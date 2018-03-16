<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kontak extends Model
{
    //
    protected $table ='kontaks';
    protected $fillable =['nama','email','seluler','pesan'];
    protected $visible =['nama','email','seluler','pesan'];

    public $timestamps =true;

}
