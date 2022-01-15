<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;

class Clients extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'user_id',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'website_url',
        'business_type',
        'business_activity',
        'business_services',
        'business_solutions',
        'business_ideal_clients',
        'business_environment',
        'business_issues',
        'business_goal_and_timeframe',
        'business_services_desired_startup',
        'business_services_desired_planning_marketing',
        'business_services_desired_web_development_design',
        'business_services_desired_web_seo',
    ];


     /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'user_id',
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
