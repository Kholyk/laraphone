<?php

namespace Kholyk\Laraphone\Http\Controllers;

class PhoneVerificationController extends Controller
{
    public function form()
    {
        if (! auth()->check()) {
            abort (403, 'Only authenticated users can try to verify its phones');
        }

        $user = auth()->user();

        return view('laraphone.form');
    }
}
