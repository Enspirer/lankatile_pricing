@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.nav')

    <div class="body">
        <form action="{{route('frontend.price.search')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="price-checker">
                <div class="title">Check our product prices (MRP)</div>
                <input type="text" name="code" id="code" placeholder="Enter Tile Code"   oninput="this.value = this.value.toUpperCase()" required>
                <h5 class="mb-4" style="color:#909090; font-size:17px;">Example: FAEANW-M079A66</h5>
                <button type="submit" class="btn-check">Check Now</button>
            </div>
        </form>

        <div class="results-block">
            @if($price != null)
            @if($price != 'Not Available')
            <div class="product-found">
                <div class="alert">Maximum Retail Price (MRP)</div>
                <div class="price">LKR {{$price->mr_price_decimal}}</div>
            </div>
            @else
            <div class="product-not-found">
                <i class="bi bi-x-circle-fill"></i>
                <div class="alert">Incorrect Tile Code</div>
            </div>
            @endif
        @endif
        </div>
    </div>

@endsection
