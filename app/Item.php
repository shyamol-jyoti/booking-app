<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $appends = ['links'];
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
    public function getLinksAttribute()
    {
        return [
            'show' => route('items.show', $this),           
        ];
    }
}
