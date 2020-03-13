<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Service;

class PageController extends Controller
{
    public function index()
    {
        //Directly access
        // $houses = Item::limit(4)->where('service_id', 1)->orderBy('created_at', 'desc')->get();
        // $cars = Item::limit(4)->where('service_id', 2)->orderBy('created_at', 'desc')->get();
        // $bikes = Item::limit(4)->where('service_id', 3)->orderBy('created_at', 'desc')->get();

        // $items = Item::orderBy('created_at', 'desc')->get()->groupBy('service_id')->map(function($item) {
        //     return $item->take(4);
        // });


        $items = Item::orderBy('created_at', 'desc')->get()->groupBy(function($item){
            return $item->service_id;
        })->mapWithKeys(function($item, $key) {  
            $key = Service::find($key)->label; 
            return [$key => $item->take(4)]; 
        });
        //return json_encode($items);
        
        return view('welcome', compact('items'));
    }
}
