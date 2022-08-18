<?php

\Illuminate\Support\Facades\Route::post('/contact-with-us', function (\Illuminate\Http\Request $request) {
    \Illuminate\Support\Facades\Log::info($request['email'], [$request['content']]);
    return redirect('/');
})->name('contact-with-us');