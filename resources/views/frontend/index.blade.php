@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
    
@include('frontend.includes.nav')

    <div class="body">
        <form action="{{route('frontend.price.search')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
            <div class="price-checker">
                <div class="title">Check our product prices (MRP)</div>
                <input type="text" name="code" id="code" placeholder="Enter Tile Code" oninput="this.value = this.value.toUpperCase()" required>
                <h5 class="mb-4" style="color: rgb(144, 144, 144);font-size: 15px;padding-top: 8px;">Example: FAEANW-M079A66</h5>
                <button type="submit" class="btn-check">Check Now</button>

                @if($price != 'Not Available')

                @else
                    <div class="row" style="height: 70px;">
                        <div class="col-md-2" style="font-size: 35px;color: rgb(255, 0, 24);padding-top: 5px;text-align: left;margin-bottom: 20px;"><i class="bi bi-x-circle-fill"></i></div>
                        <div class="col-md-10" style="font-size: 20px;color: rgb(255, 0, 0);margin-bottom: 0px;font-weight: 600;text-align: left;padding-left: 10px;padding-top: 15px;">Incorrect Tile Code</div>
                    </div>
                @endif

            </div>
        </form>

        <div class="results-block">
            @if($price != null)
            @if($price != 'Not Available')
            <div class="product-found">
                <div class="alert" style="margin-bottom: unset;padding-bottom: 0px;">Maximum Retail Price (MRP)</div>
                <div class="price">LKR {{$price->mr_price_decimal}}</div>
            </div>
            @else

            @endif
        @endif
        </div>
    </div>

@endsection
