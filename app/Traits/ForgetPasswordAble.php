<?php

namespace App\Traits;

use App\Mail\ResetPasswordMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

trait ForgetPasswordAble
{
    public function createForgetToken()
    {
        return Str::limit(md5($this->email . Str::random()), 254, '');
    }

    public function sendTokenToUser()
    {
        $this->reset_password_token = $this->createForgetToken();
        $this->save();
        Mail::to($this)->queue(new ResetPasswordMail($this));
    }
}
