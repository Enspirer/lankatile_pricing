<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Price;

class PriceController extends Controller
{
    
    public function index()
    {
        return view('backend.price.index');
    }

    public function getdetails(Request $request)
    {
       
        $data = Price::get();
        return DataTables::of($data)
            ->addColumn('action', function($data){
                $button = '<button type="button" name="delete" id="'.$data->id.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i> Delete</button>';
                return $button;
            })
            ->rawColumns(['action'])
            ->make(true);
        
        return back();
    }
    

    public function destroy($id)
    {
        Price::where('id', $id)->delete(); 
    }

}
