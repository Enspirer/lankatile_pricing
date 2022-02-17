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
                <h5 class="mb-4" style="color:#909090; font-size:17px;">Example: FAEANW-M079A66</h5>
                <button type="submit" class="btn-check">Check Now</button>

                @if($price != 'Not Available')

                @else
                    <div class="row" style="height: 70px;"><div class="col-md-2" style="font-size: 40px;color: #ff0018;padding-top: 5px;text-align: left;margin-bottom: 20px;"><i class="bi bi-x-circle-fill"></i></div> <div class="col-md-10" style="text-align: left !important;"><div class="alert" style="font-size: 23px;color: rgb(255, 0, 0);margin-bottom: 0px;font-weight: 600;text-align: left;">Incorrect Tile Code</div></div></div>




                @endif

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

            @endif
        @endif
        </div>
    </div>

@endsection
