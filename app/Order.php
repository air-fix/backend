<?php

namespace App;

use App\Repositories\OrderRepository;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'building',
        'room',
        'name',
        'contact',
        'description',
        'status',
    ];
}
