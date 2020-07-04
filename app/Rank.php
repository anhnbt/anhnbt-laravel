<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'ranks';

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key', 'id');
    }
}
