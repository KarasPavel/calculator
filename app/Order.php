<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Order extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'delivery',
        'quantity',
        'price',
        'urgency',
        'order_data',
        'comment',
        'application_status_id',
        'order_date',
        'created_at',
        'updated_at'
    ];

    /**
     * @return mixed
     */
    public static function getOrders()
    {
        return DB::table('orders')
            ->select('orders.id', 'name', 'email', 'phone', 'comment', 'orders.created_at',
                'orders.updated_at', 'status')
            ->join('statuses', 'application_status_id', '=', 'statuses.id')
            ->orderByDesc('orders.created_at')
            ->get();
    }
}
