<?php


use App\Models\Customer;
use App\Models\PriceQuote;
use App\Models\Product;
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


    //usage 
;
Route::get('/', function () {
    $priceQuote = PriceQuote::find(1);
    return $priceQuote;
});
