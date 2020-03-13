<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use \Sushi\Sushi;

    protected $rows = [
        [
            'label' => 'House Rent',
            'value' => 'house-rent'
        ],
        [
            'label' => 'Car Rent',
            'value' => 'car-rent'
        ],
        [
            'label' => 'Bike Rent',
            'value' => 'bike-rent'
        ]
        
    ];
}
