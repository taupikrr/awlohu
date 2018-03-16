<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jenis extends Model
{
    //
    protected $table ='jenis';
    protected $fillable =['jenis'];
    protected $visible =['jenis'];

    public $timestamps =true;

    public function rumahs()
    {
    	return $this->hasMany('App\rumah','agen_id');
    }
}
