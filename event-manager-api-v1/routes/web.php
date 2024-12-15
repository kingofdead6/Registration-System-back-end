<?php

use App\Mail\AcceptanceMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $recipientEmail = 'na_bougroura@esi.dz';
    $recipientName = 'na_bougroura';

    Mail::to($recipientEmail)->send(new AcceptanceMail($recipientName));
});
