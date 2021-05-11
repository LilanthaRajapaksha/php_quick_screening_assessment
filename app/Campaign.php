<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Campaign extends Model
{
    protected $table = 'campaigns';
    protected $guarded = [];

    public function orders()
    {
        return $this->hasMany(Order::class, 'campaign_id', 'id');
    }

    public function totalRevenue()
    {
        return $this->hasMany(Order::class, 'campaign_id', 'id')
            ->selectRaw('SUM(order_value) as TOTAL');
    }

}
