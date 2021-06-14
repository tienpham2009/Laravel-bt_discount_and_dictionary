<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/show_discount_amount',function (){
    return view('show_discount_amount');
});

Route::post('/show_discount_amount' , function (\Illuminate\Http\Request $request){
    $productDescription = $request->productDescription;
    $price = $request->price;
    $discountPercent = $request->discountPercent;

    $discountAmount = $price * $discountPercent * 0.01;
    $discountPrice = $price - $discountAmount;
    return view('show_discount_amount', compact(['discountPrice', 'discountAmount', 'productDescription', 'price', 'discountPercent']));
});
Route::get('/dictionary',function (){
    return view('dictionary');
});

Route::post('/dictionary', function (\Illuminate\Http\Request $request){
    $english = ["dog" , "cat" , "bird"];
    $vietnamese = ["cho" , "meo" , "chim"];
    $text = $request->text;
    for ($i = 0 ; $i < count($english) ; $i++){
        if ($text == $english[$i]){
            $text = $vietnamese[$i];
        }
    }
    return view('dictionary',['text' => $text]);
});
