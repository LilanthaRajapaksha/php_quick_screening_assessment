<?php

namespace App\Repositories;

use App\Interfaces\RepositoryInterface;
use App\Order;

class OrderRepository extends MainRepository implements RepositoryInterface
{
    /**
     * OrderRepository constructor.
     * @param Order $order
     */
    public function __construct(Order $order)
    {
        parent::__construct($order);
    }
}
