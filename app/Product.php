<?php

namespace App;


use DateTimeInterface;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 
        'amount', 
        'description', 
        'status', 
        'stock',
        'created_at',
        'updated_at'
    ];

    protected function serializeDate(DateTimeInterface $date){
        return $date->format('Y-m-d H:i:s');
    }
}
