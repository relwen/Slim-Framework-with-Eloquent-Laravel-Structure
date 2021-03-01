<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class ChefClasses extends Model
{

	public $table = 'chef_views';
	protected $guarded = ['*'];
	


    // protected $fillable =[
    // 					'id',
				// 	   	'code_user',
				// 	   	'code_classe',
				// 	   	'matricule_etudiant',
				// 	   	'supprimer',
				// 	   	'agent',
				// 	   	'password',
				// 	   ];


    // public function classes()
    // {
    //     return $this->belongsTo('App\Models\Classe','code_classe','code_classe');
    // }

	
	
}


?>