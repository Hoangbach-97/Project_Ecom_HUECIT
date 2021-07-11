<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','role','photo','status','provider',
        'provider_id','two_factor_code', 'two_factor_expires_at'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders(){
        return $this->hasMany('App\Models\Order');
    }

    public function generateTwoFactorCode()
    {
        $this->timestamps =false;
        // Cho số ngẫu nhiên hàng trăm nghìn
        $this->two_factor_code = random(100000,999999);
        // Thời gian là 10'
        $this->two_factor_expires_at= now()->addMinutes(10);
        $this->save();
     }
     public function resetTwoFactorCode()
     {
        $this->timestamps =false;
        // Cho số ngẫu nhiên hàng trăm nghìn
        $this->two_factor_code = null;
        // Thời gian là 10'
        $this->two_factor_expires_at= null;
        $this->save();

     }
}
