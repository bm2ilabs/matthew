<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::post('charge', function(\Illuminate\Http\Request $request) {

    $stripe = Stripe::make(config('services.stripe.secret'));

    try {
        // check if this charge is already done
        $charge = $stripe->charges()->create([
            'source' => $request->input('stripeToken'),
            'currency' => 'USD',
            'amount'   => 5049,
        ]);

        if($charge['paid']) {
            return view('success');
        } else {
            return view('error');
        }
    } catch (ErrorException $errorException) {

    }




});
Route::get('/', function () {
    return view('payment');
});


