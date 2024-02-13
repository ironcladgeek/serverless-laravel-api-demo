<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;

Route::get('/hello', function () {
    return response()->json([
        'message' => 'Hello from my API!',
        'time' => Carbon::now('UTC')->toDateTimeString(),
        'status_code' => 200
    ]);
});
