<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Classe extends Model
{

	public $table = 'classes';
    protected $fillable =[
    					'id',
					   	'code_classe',
					   	'libelle_classe',
					   	'sigle_classe',
					   	'code_filiere',
					   	'agent',
					   ];


	public function filiere()
    {
        return $this->belongsTo('App\Models\Filiere','code_filiere','code_filiere');
    }




}

?>

