<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class UserMobilePhoneBalance extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = ['user_id', 'mobile_phone_number', 'balance'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
