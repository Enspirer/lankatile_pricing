<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Price;

/**
 * Class HomeController.
 */
class HomeController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index()
    {
        $price = null;
        
        return view('frontend.index',[
            'price' => $price
        ]);
    }

    public function search(Request $request)
    {
        // dd($request);

        $price = Price::where('product_code',$request->code)->first();
        // dd($price);

        if($price){
            $price = $price;
        }else{
            $price = 'Not Available';
        }

        return view('frontend.index',[
            'price' => $price
        ]);
    }

}
