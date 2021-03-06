<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    protected $table = 'programs';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function detailProgram()
    {
        return $this->hasOne('App\Models\DetailPrograms', 'id_programs', 'id');
    }
}
