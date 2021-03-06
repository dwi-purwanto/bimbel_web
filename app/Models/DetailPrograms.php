<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailPrograms extends Model
{
    protected $table = 'detail_kursus';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    /**
     * Get the author of the post.
     */
    public function programHeader()
    {
        return $this->belongsTo('App\Models\Program', 'id_programs', 'id');
    }
}
