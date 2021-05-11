<?php

namespace App\Repositories;

use App\Campaign;
use App\Interfaces\RepositoryInterface;

class CampaignRepository extends MainRepository implements RepositoryInterface
{
    /**
     * CampaignRepository constructor.
     * @param Campaign $campaign
     */
    public function __construct(Campaign $campaign)
    {
        parent::__construct($campaign);
    }

    /**
     * @param $startDate
     * @param $endDate
     * @return mixed
     */
    public function getCampaigns($startDate, $endDate){
        return $this->model
            ->where('start_date', '>', $startDate)
            ->where('end_date', '>', $endDate)
            ->paginate(10);
    }
}
