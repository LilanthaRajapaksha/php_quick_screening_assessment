<?php

namespace App\Services;

use App\Interfaces\ServiceInterface;
use App\Repositories\CampaignRepository;

class CampaignService extends MainService implements ServiceInterface
{
    protected $campaignRepository;

    /**
     * CampaignService constructor.
     * @param CampaignRepository $campaignRepository
     */
    public function __construct(
        CampaignRepository $campaignRepository
    ) {
        parent::__construct();
        $this->campaignRepository = $campaignRepository;
    }

    /**
     * @param $startDate
     * @param $endDate
     * @return mixed
     */
    public function getCampaigns($startDate, $endDate){
        return $this->campaignRepository->getCampaigns($startDate, $endDate);
    }

}
