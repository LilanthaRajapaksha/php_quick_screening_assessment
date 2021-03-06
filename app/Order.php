<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $guarded = [];

    public function campaign()
    {
        return $this->belongsTo(Campaign::class, 'id', 'campaign_id');
    }
}
