<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dependents extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'dependent_id',
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'ssn',
        'date_of_birth',
        'relationship',
        'child_care',
        'college_tuition',
        'health_insurance',
        'months_insured',
    ];



     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'dependent_id',
        'user_id',
        'ssn',
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
