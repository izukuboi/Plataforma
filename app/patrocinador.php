<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class patrocinador extends Model
{
	protected $table='patrocinador';
	//protected $dates = ['deleted_at'];
    protected $primarykey='idPatrocinador';
    use SoftDeletes;
    protected $dates = ['deleted_at'];
}
