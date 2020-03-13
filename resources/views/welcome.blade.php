@component('layouts.app')



<div class="container mx-auto">
@foreach($items as $key=>$value)
    <h1 class="text-2xl text-blue-600">{{$key}}</h1>
    <div class="flex flex-wrap mb-8">
    
    @foreach($value as $item)
    
        <div class="w-1/4 h-48">
            <div class="h-full rounded overflow-hidden shadow-lg m-2">
                <div class="px-6 py-4">
                    <a href="{{$item->links['show']}}" class="text-blue-700 font-bold text-xl mb-2">{{$item->title}}</a>
                    <div class="font-bold text-xl mb-2">{{$item->type}}</div>
                    <p class="text-gray-700 text-base">Price: {{$item->price}}</p>
                    <p class="text-gray-700 text-base">Price: {{$item->price_type}}</p>
                </div>            
            </div>    
        </div>
    
    @endforeach
    </div>
@endforeach
</div>


@endcomponent

