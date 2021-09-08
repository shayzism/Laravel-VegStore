<?php
namespace App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Seller extends Authenticatable
{
    use Notifiable;
    protected $guard = 'seller';
    protected $fillable = [
        'name', 'phone_number', 'password',
    ];
    protected $hidden = [
        'password', 'remember_token','phone_number',
    ];
    public function product ()
    {
        return $this->hasMany('App\'product');
    }
}
