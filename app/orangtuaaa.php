<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class orangtuaaa extends Model
{
    //
    protected $table ='orangtuaaas';
    protected $fillable =['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $visible =['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps = true;

    public function anak()
    {
    	return $this->hasMany('App\Anak','orangtuaaa_id');
    	}
}
