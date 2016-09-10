<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 9/4/16
 * Time: 10:27 AM
 */

namespace App\Repositories;

use App\Order;

class OrderRepository
{
    public static function create($infos)
    {
        return Order::create($infos);
    }

    public static function lists($status, $rows)
    {
        if ($status) {
            return Order::where('status', $status)->paginate($rows);
        }

        return Order::paginate($rows);
    }

    public static function show($id)
    {
        return Order::find($id);
    }

    public static function updateStatus($id, $infos)
    {
        return Order::where('id', $id)->update($infos);
    }
}