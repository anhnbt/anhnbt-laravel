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

    protected $fillable = [
        'name', 'price', 'old_price', 'total_price', 'estimated_completion_time', 'total_estimated_completion_time', 'thumbnail',
    ];

    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    public function user()
    {
        return $this->belongsTo('App\User', 'foreign_key');
    }
}
