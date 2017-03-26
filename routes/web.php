<?php

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

Route::get('/form', ['as' => 'form.show', function () {
    return view('form');
}]);

Route::post('/form',['as' => 'form.post', function() {

    return redirect('/form')->with('submitted', 'Form successfully submitted');
}]);

Route::get('/vueform', ['as' => 'vueform.show', function () {
    return view('vueform');
}]);

Route::post('/vueform',['as' => 'vueform.post', function() {

    return ['status' =>'submitted', 'message' => 'Form successfully submitted'];
}]);
