<?php

namespace App\Http\Controllers\Settings;

use App\Facades\CampaignCache;
use App\Http\Controllers\Controller;
use App\Models\Campaign;
use App\Services\CampaignBoostService;
use App\User;

class PremiumController extends Controller
{
    /**
     * @var CampaignBoostService
     */
    protected CampaignBoostService $service;


    public function index()
    {
        if (auth()->user()->hasBoosterNomenclature()) {
            return redirect()->route('settings.boost');
        }

        // If a campaign was provided, make sure we have access to it
        $campaignId = request()->get('campaign');
        $campaign = null;

        /** @var User $user */
        $user = auth()->user();
        $premiums = $user->boosts()->with('campaign')->groupBy('campaign_id')->get();
        $userCampaigns = $user->campaigns()->unboosted()->whereNotIn('campaigns.id', $premiums->pluck('campaign_id'))->get();

        if (!empty($campaignId)) {
            /** @var Campaign $campaign */
            $campaign = Campaign::where(['id' => (int)$campaignId])->firstOrFail();
            CampaignCache::campaign($campaign);
            $this->authorize('access', $campaign);

            if ($campaign->premium()) {
                return redirect()
                    ->route('settings.premium');
            }

            $userCampaigns = $userCampaigns->where('id', '!=', $campaignId);
        }

        return view('settings.premium.index')
            ->with('campaigns', $userCampaigns)
            ->with('premiums', $premiums)
            ->with('focus', $campaign)
            ;
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(CampaignBoostService $campaignBoostService)
    {
        $this->middleware(['auth', 'identity']);
        $this->service = $campaignBoostService;
    }
    public function migrate()
    {
        $this->service
            ->user(auth()->user())
            ->migrate();

        return redirect()->route('settings.premium')
            ->with('success', __('Thanks for switching to our premium campaigns!'));
    }
}
