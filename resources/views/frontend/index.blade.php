@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
    <form action="{{route('frontend.price.search')}}" method="post" enctype="multipart/form-data">
    {{csrf_field()}}

        <input type="text" class="form-control" style="margin-top:100px; text-transform:uppercase" name="code" placeholder="Enter Tile Code Here" required>

        <div class="mt-5 text-center">
            <button type="submit" class="btn rounded-pill text-light px-4 py-2 ms-2 btn-success">Check Now</button>
        </div>

    </form>

        @if($price != null)
            @if($price != 'Not Available')
                <h2>LKR {{$price->mr_price_decimal}}</h2>    
            @else
                <h2>Not Available</h2>   

            @endif
        @endif

@endsection
