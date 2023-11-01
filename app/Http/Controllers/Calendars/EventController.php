<?php

namespace App\Http\Controllers\Calendars;

use App\Exceptions\TranslatableException;
use App\Facades\Datagrid;
use App\Http\Controllers\Controller;
use App\Http\Requests\AddCalendarEvent;
use App\Models\Campaign;
use App\Models\Calendar;
use App\Services\CalendarService;
use App\Traits\CampaignAware;
use App\Traits\Controllers\HasDatagrid;
use App\Traits\Controllers\HasSubview;
use App\Traits\GuestAuthTrait;
use Exception;

class EventController extends Controller
{
    use CampaignAware;
    use GuestAuthTrait;
    use HasDatagrid;
    use HasSubview;

    protected CalendarService $service;

    public function __construct(CalendarService $calendarService)
    {
        $this->service = $calendarService;
    }

    public function index(Campaign $campaign, Calendar $calendar)
    {
        $this->campaign($campaign)->authView($calendar);

        $options = [$campaign, 'calendar' => $calendar];
        $after = $before = false;
        if (request()->has('before_id')) {
            $options['before_id'] = 1;
            $before = true;
        } elseif (request()->has('after_id')) {
            $options['after_id'] = 1;
            $after = true;
        }
        Datagrid::layout(\App\Renderers\Layouts\Calendar\Reminder::class)
            ->route('calendars.events', $options)
            ->permissions(!(auth()->check() && auth()->user()->can('update', $calendar)));

        $rows = $calendar->calendarEvents();
        if ($after) {
            $rows->after($calendar);
        } elseif ($before) {
            $rows->before($calendar);
        }

        $this->rows = $rows
            ->with(['entity', 'calendar', 'entity.image'])
            ->has('entity')
            ->sort(request()->only(['o', 'k']))
            ->paginate();

        if (request()->ajax()) {
            return $this->campaign($campaign)->datagridAjax();
        }

        return $this
            ->campaign($campaign)
            ->subview('calendars.events', $calendar);
    }


    public function create(Campaign $campaign, Calendar $calendar)
    {
        $this->authorize('update', $calendar);

        $date = request()->get('date');
        list($year, $month, $day) = explode('-', $date);
        if (str_starts_with($date, '-')) {
            list($year, $month, $day) = explode('-', trim($date, '-'));
            $year = "-{$year}";
        }

        return view('calendars.events.create', compact(
            'campaign',
            'calendar',
            'day',
            'month',
            'year',
        ));
    }

    public function store(AddCalendarEvent $request, Campaign $campaign, Calendar $calendar)
    {
        // For ajax requests, send back that the validation succeeded, so we can really send the form to be saved.
        if (request()->ajax()) {
            return response()->json(['success' => true]);
        }

        $routeOptions = [$campaign, $calendar->entity, 'year' => $request->post('year')];
        if ($request->has('layout')) {
            $routeOptions['layout'] = $request->get('layout');
        } else {
            $routeOptions['month'] = $request->post('month');
        }

        // We need to handle negative year dates (start with -)
        try {
            $link = $this->service
                ->calendar($calendar)
                ->addEvent($request->all());

            return redirect()->route('entities.show', $routeOptions)
                ->with('success', __('calendars.event.success', ['event' => $link->entity->name]));
        } catch (TranslatableException $e) {
            return redirect()
                ->route('entities.show', $routeOptions)
                ->with('error', __('crud.bulk.errors.general', ['hint' => $e->getTranslatedMessage()]));
        } catch (Exception $e) {
            return redirect()->route('entities.show', $routeOptions);
        }
    }
}