<?php

namespace App\Http\Controllers;

use App\Facades\CampaignLocalization;
use App\Http\Requests\HistoryRequest;
use App\Models\EntityLog;
use App\User;

class HistoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(HistoryRequest $request)
    {
        $campaign = CampaignLocalization::getCampaign();
        $this->authorize('recover', $campaign);

        $pagnation = $campaign->superboosted() ? 25 : 10;
        $models = EntityLog::with(['user', 'entity' => fn($q) => $q->withTrashed(), 'impersonator'])
            ->filter($request)
            ->select(['*'])
            ->orderBy('created_at', 'desc')
            ->paginate($pagnation);

        $previous = null;
        $superboosted = $campaign->superboosted();

        $users = User::select(['id', 'name'])->orderBy('name')->get();
        $user = $request->get('user');
        $action = $request->get('action');
        $actions = [
            '' => __('history.filters.all-actions'),
            EntityLog::ACTION_CREATE => __('entities/logs.actions.create'),
            EntityLog::ACTION_UPDATE => __('entities/logs.actions.update'),
            EntityLog::ACTION_DELETE => __('entities/logs.actions.delete'),
            EntityLog::ACTION_RESTORE => __('entities/logs.actions.restore'),
        ];

        $filters = [];
        if (!empty($user)) {
            $filters['user'] = (int) $user;
        }
        if (!empty($action)) {
            $filters['action'] = (int) $action;
        }

        return view('history.index', compact(
            'models',
            'previous',
            'campaign',
            'superboosted',
            'users',
            'user',
            'action',
            'actions',
            'filters',
        ));
    }
}
