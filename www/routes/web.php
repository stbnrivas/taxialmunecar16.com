<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Models\Booking;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/en/');
});

Route::get("/{locale?}/", function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
        info('This is some useful information.');
        return view('welcome');

    } else {
        $locale = 'en';
        return redirect('/en/');
    }
});


Route::post("/{locale?}/", function (Request $request, $locale = null) {

    $email_confirmation_code = Str::random(10) . now()->timestamp . Str::random(10);
    $deletion_code = Str::random(10) . now()->timestamp . Str::random(10);

    $data = [
        'lang'    => $request->input('lang'),
        'type'    => $request->input('type'),
        'airport' => $request->input('airport'),
        'port'    => $request->input('port'),
        'date'    => $request->input('date'),
        'time'    => $request->input('time'),
        'origin'  => $request->input('origin'),
        'destination' => $request->input('destination'),
        'name'    => $request->input('name'),
        'phone'   => $request->input('email'),
        'email'   => $request->input('phone'),
        'deletion_code' => $deletion_code,
        'email_confirmation_code' => $email_confirmation_code
    ];

    if ($request->input('type') != 'cruise' ){
        $data['port'] = "";
    }
    if ($request->input('type') != 'airport' ){
        $data['airport'] = "";
    }

    info("--------------------------" . json_encode($data));
    $booking = Booking::create($data);
    info("--------------------------" . $booking);


    return redirect("/".$locale."/");
});



// Route::get("/booking/delete/{deletion_code?}", function ($deletion_code = null) {
//     if (isset($deletion_code) ) {
//         return view('welcome');
//     } else {
//         return redirect('/en/');
//     }
// });
