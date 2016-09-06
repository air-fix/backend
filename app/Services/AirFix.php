<?php
/**
 * Created by PhpStorm.
 * User: abel
 * Date: 16-9-2
 * Time: 下午4:59
 */

namespace App\Services;

use App\Repositories\OrderRepository;

class AirFix
{
    public static function createNewOrder($infos)
    {
        return OrderRepository::create($infos);
    }

    public static function lists()
    {
        return OrderRepository::lists();
    }

    public static function show($id)
    {
        return OrderRepository::show($id);
    }

    public static function handle($id, $infos)
    {
        return OrderRepository::updateStatus($id, $infos);
    }
}