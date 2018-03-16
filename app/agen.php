<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agen extends Model
{
    //

    protected $table ='agens';
    protected $fillable =['nama','jk','no_hp','email','foto'];
    protected $visible =['nama','jk','no_hp','email','foto'];

    public $timestamps =true;

    public function rumahs()
    {
    	return $this->hasMany('App\rumah','jenis_id');
    }
}
