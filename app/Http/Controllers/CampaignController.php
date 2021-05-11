<?php

namespace App\Http\Controllers;

use App\Services\CampaignService;

class CampaignController extends Controller
{
    private $campaignService;

    /**
     * CampaignController constructor.
     * @param CampaignService $campaignService
     */
    public function __construct(
        CampaignService $campaignService
    ) {
        $this->campaignService = $campaignService;
    }

    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Foundation\Application|\Illuminate\View\View
     */
    public function index()
    {
        $startDate = session('START_DATE');
        $endDate = session('END_DATE');

        $campaigns = $this->campaignService->getCampaigns($startDate, $endDate);

        return view('campaign.view', compact('campaigns'));
    }
}
