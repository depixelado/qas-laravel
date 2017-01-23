<?php

namespace App;

use User;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    /**
     * Users who rated this answer
     */
    public function ratedBy(){
        $this->belongsToMany(User::class, 'ratings');
    }
}
