<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Validator;

use App\Http\Controllers\PostController;
use  App\Models\Booking;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use App\Mail\BookingConfirmation;
use App\Mail\BookingNotification;

# logs messages: `info('This is some useful information.');`

function checkBookingLocations($data, &$errors_at ): int {
    $error = 0;
    if($data['origin'] == ''){
        array_push($errors_at, 'origin');
        $error += 1;
    }
    if($data['destination'] == ''){
        array_push($errors_at, 'destination');
        $error += 1;
    }
    return $error;
}

function checkBookingForDate($data, &$errors_at): int {
    $errors = 0;
    // Log::info("==========   checkBookingForDate ". $data['date'] . "   " . $data['time']);
    if($data['date'] == ''){
        array_push($errors_at, 'date');
        $errors += 1;
    }
    if($data['time'] == ''){
        array_push($errors_at, 'time');
        $errors += 1;
    }
    return $errors;
}


function checkBookingPort($data, &$errors_at): int {
    $errors = 0;
    $ports = array("from-motril","to-motril","from-malaga","to-malaga");
    if (!in_array($data['port'],$ports)) {
        $errors += 1;
        array_push($errors_at, 'port');
    }
    return $errors;
}

function checkBookingAirport($data, &$errors_at): int {
    $errors = 0;
    $airports = array("from-granada","to-granada","from-malaga","to-malaga");
    if (!in_array($data['airport'],$airports)) {
        $errors += 1;
        array_push($errors_at, 'airport');
    }
    return $errors;
}

function checkContactInfo($data, &$errors_at): int {
    $errors = 0;
    if($data['name'] == ''){
        $errors += 1;
        array_push($errors_at, 'name');
    }
    if($data['phone'] == ''){
        $errors += 1;
        array_push($errors_at, 'phone');
    }
    if($data['email'] == ''){
        $errors += 1;
        array_push($errors_at, 'email');
    }
    return $errors;
}










// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('/es/');
});

Route::get("/{locale?}/", function ($locale = null) {
    if (isset($locale) && in_array($locale, config('app.available_locales'))) {
        app()->setLocale($locale);
        return view('welcome');
    } else {
        $locale = 'es';
        return redirect('/es/');
    }
});



Route::post("/{locale?}", function (Request $request, $locale = null) {

    // Log::info("=================== post /" . $locale . "/");

    $email_confirmation_code = Str::random(10) . now()->timestamp . Str::random(10);
    $deletion_code = Str::random(10) . now()->timestamp . Str::random(10);

    $data = [
        'lang'                    => $request->lang,
        'type'                    => $request->type,
        'airport'                 => $request->airport,
        'port'                    => $request->port,
        'date'                    => $request->date,
        'time'                    => $request->time,
        'origin'                  => $request->origin,
        'destination'             => $request->destination,
        'name'                    => $request->name,
        'phone'                   => $request->phone,
        'email'                   => $request->email,
        'deletion_code'           => $deletion_code,
        'email_confirmation_code' => $email_confirmation_code
    ];

    $errors = [];
    if ($data['type'] == ''){
        array_push($errors, 'type');
        checkContactInfo($data, $errors);
    } else if ($data['type'] == 'instant'){
        $data['airport'] = "";
        $data['port'] = "";
        checkBookingLocations($data, $errors);
        checkContactInfo($data, $errors);
    } else if ($data['type'] == 'reservation'){
        $data['airport'] = "";
        $data['port'] = "";
        checkBookingForDate($data, $errors);
        checkBookingLocations($data, $errors);
        checkContactInfo($data, $errors);
    } else if ($data['type'] == 'cruise'){
        $data['airport'] = "";
        checkBookingForDate($data, $errors);
        checkBookingPort($data, $errors);
        checkContactInfo($data, $errors);
    } else if ($data['type'] == 'airport'){
        $data['port'] = "";
        checkBookingForDate($data, $errors);
        checkBookingAirPort($data, $errors);
        checkContactInfo($data, $errors);
    } else if ($data['type'] == 'routes'){
        $data['airport'] = "";
        $data['port'] = "";
        $data['origin'] = "";
        $data['destination'] = "";
        checkBookingForDate($data, $errors);
        checkContactInfo($data, $errors);
    }


    // Log::info('     $data[type]                     = '. $data['type']);
    // Log::info('     $data[lang]                     = '. $data['lang']);
    // Log::info('     $data[airport]                  = '. $data['airport']);
    // Log::info('     $data[port]                     = '. $data['port']);
    // Log::info('     $data[date]                     = '. $data['date']);
    // Log::info('     $data[time]                     = '. $data['time']);
    // Log::info('     $data[origin]                   = '. $data['origin']);
    // Log::info('     $data[destination]              = '. $data['destination']);
    // Log::info('     $data[name]                     = '. $data['name']);
    // Log::info('     $data[phone]                    = '. $data['phone']);
    // Log::info('     $data[email]                    = '. $data['email']);
    // Log::info('     $data[deletion_code]            = '. $data['deletion_code']);
    // Log::info('     $data[email_confirmation_code]  = '. $data['email_confirmation_code']);

    // Log::info('     $errors = '. count($errors));
    // Log::info('     $errors   = '. implode(", ", $errors));

    $result = '';
    if (count($errors) == 0){
        $booking = Booking::create($data);
        $request->session()->put('errors', []);
        $result = 'success';

        // // mail confirmation to user who made the booking
        Mail::to($data['email'])->send(new BookingConfirmation($booking));

        // // mail notification to notify a taxi booking
        Mail::to(env('MAIL_TO_NOTIFY_BOOKING'))->send(new BookingNotification($booking));

        if(strlen(env('MAIL_TO_DEVELOPMENT') > 0)){
            // // mail notification to dev
            Mail::to(env('MAIL_TO_DEVELOPMENT'))->send(new BookingNotification($booking));
        }

    } else {
        $request->session()->put('errors', $errors);
        $result = 'error';
    }
    return redirect("/".$locale."/booking/".$result);
});


Route::get("{locale?}/booking/{result?}", function (Request $request) {
    return view('book',['result' => $request->result ]);
});


// confirm


Route::get("{locale?}/email", function (Request $request) {
    // Mail::to('stbnrivas@gmail.com')->send(new BookingConfirmation());
    // return "mail sent";
});


Route::get("{locale?}/booking/confirmation/{code?}", function (Request $request) {


    return view('book',['code' => $request->code ]);
});


Route::get("{locale?}/booking/delete/{code?}", function (Request $request) {
    return view('book',['code' => $request->code ]);
});


// Route::get("/booking/delete/{deletion_code?}", function ($deletion_code = null) {
//     if (isset($deletion_code) ) {
//         return view('welcome');
//     } else {
//         return redirect('/en/');
//     }
// });
