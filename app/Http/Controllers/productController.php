<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Product;
use Excel;


class productController extends Controller
{
    //

public function index(){


    return view('import_product');



}

public function import(Request $request){

    if($request->hasFile('importProcess')){

        $path = $request->file('importProcess')->getRealPath();

        $data = Excel::load($path)->get();
  
        if($data->count()){

            foreach ($data as $key => $value) {

                $arr[] = [
                          'name' => $value->name,
                          'sku' => $value->sku,
                          'price' => $value->price,
                          'shortdescription' => $value->shortdescription,
                          'description' => $value->description,
                          'categorie' => ($value->categorie > 0)?$value->categorie:1,
                          'image' => $value->image,
                        ];
              
            }

            if(!empty($arr)){

                DB::table('products')->insert($arr);

                
                \Session::flash('flash_message','Insert Recorded successfully.');
                return view('import_product');

            }

       
        }

    }
    \Session::flash('flash_message','Request data does not have any files to import.');
 
    return view('import_product');   

} 



}
