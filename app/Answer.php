<?php

namespace App;

use App\User;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * Users who rated this answer
     */
    public function ratedBy(){
        return $this->belongsToMany(User::class, 'ratings');
    }
}
