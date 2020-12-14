<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    /**
     * Change table name here
     *
     */
    protected $table = 'subscriptions';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'plan_id', 'type', 'duration', 'expiry_date', 'status',
    ];

    // for foreign key constraint
    public function SubscriptionToPlan()
    {
        return $this->belongsTo('App\Plan','plan_id');
    }

    // for foreign key constraint
    public function SubscriptionToUser()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
