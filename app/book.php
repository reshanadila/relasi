<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{
    //
     protected $table ='books';
    protected $fillable =['title','author_id','amounth','cover'];
    protected $visible =['title','author_id','amounth','cover'];
    public $timestamps = true;
    
    public function author()
    {
    	return $this->belongsTo('App\book','author_id');
    	}
}
