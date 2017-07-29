<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class anak extends Model
{
    //
      protected $table ='anaks';
    protected $fillable =['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    protected $vilable =['nama_ibu','nama_ayah','umur_ibu','umur_ayah','alamat'];
    public $timestamps = true;
    
    public function Orangtuaaa()
    {
    	return $this->belongsTo('App\Orangtuaaa','orangtuaaa_id');
    	}
}
