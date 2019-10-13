<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('clients/{count}', '\fakeJsonDataBundle\Client\Controller\Controller@index');
Route::get('orders/{count}', '\fakeJsonDataBundle\Order\Controller\Controller@index');
Route::get('true', function ()
{
    return response()->json(true);
});
Route::get('error', function ()
{
    return response()->json('error', 500);
});
