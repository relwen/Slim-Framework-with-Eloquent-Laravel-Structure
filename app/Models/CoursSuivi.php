<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class CoursSuivi extends Model
{

	protected $table = 'suivis_views';
	protected $guarded = ['*'];
	

    public function agent()
    {
        return $this->hasMany('App\Models\User','id');
    }

		
	
}


