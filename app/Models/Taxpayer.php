<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Taxpayer extends Model
{
      use HasApiTokens, HasFactory, Notifiable;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'tax_year',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'ssn',
        'date_of_birth',
        'occupation',
        'email_address',
        'work_phone',
        'mobile_phone',
        'address',
        'city',
        'state',
        'zip',
        'spouse_first_name',
        'spouse_middle_name',
        'spouse_last_name',
        'spouse_suffix',
        'spouse_ssn',
        'spouse_date_of_birth',
        'spouse_occupation',
        'spouse_email_address',
        'spouse_work_phone',
        'spouse_mobile_phone',
        'filing_status',
        'bank_routing_number',
        'bank_account_number',
        'card_holder_name',
        'card_number',
        'card_expiration_date',
        'card_cvv',

    ];
 
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'ssn',
        'spouse_ssn',
        'bank_routing_number',
        'bank_account_number',
        'card_holder_name',
        'card_number',
        'card_expiration_date',
        'card_cvv',

    ];



     /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];


}
