<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    /**
     * Change table name here
     *
     */
    protected $table = 'plans';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'price', 'duration', 'description',
    ];

    // for foreign key constraint
    public function PlanToSubscription(){
        return $this->hasMany('App\Subscription');
    }

}
