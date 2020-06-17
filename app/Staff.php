<?php

namespace App;

use App\Mail\ResetPasswordMail;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class Staff extends Authenticatable
{
    use Notifiable , ThrottlesLogins;
    protected $table = 'staffs';

    protected $fillable = [
        'firstname', 'username', 'lastname', 'email'
    ];
    protected $hiden = [
        'password',  'remember_token'
    ];

    // Relation Ships Section
    public function role()
    {
        return $this->belongsTo(StaffRoles::class);
    }

    // reset password
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
