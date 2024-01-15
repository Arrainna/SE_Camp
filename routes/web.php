<?php
use App\Http\Controllers\Myform;
use App\Http\Controllers\MyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/my-controller', [MyController::class,'index']);
Route::get('/my-controller2', 'App\Http\Controllers\MyController@index');

Route::namespace('App\Http\Controllers')->group(function(){
    Route::get('/my-controller3', 'MyController@index');
});

Route::resource(('/my-controller4'), MyController::class);
Route::get('/', function () {
    return view('welcome');
});
Route::resource(('/my-form'), Myform::class);
Route::get('/', function () {
    return view('welcome');
});


Route::get('/my-route', function(){
    //  Key => Value
    $data = ['val_a' => '|'];
    $data['val_b'] = "|";
    return view('myfolder.mypage',$data);
});

Route::post('/my-route', function(Request $req){
    $data['myinput'] = $req->input('myinput');
    return view('myroute', $data);
});
