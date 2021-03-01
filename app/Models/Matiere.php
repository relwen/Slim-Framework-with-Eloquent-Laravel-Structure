<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
/**
 * Class Article permet d'enregistrer 
 * des produits dans notre boutique en ligne
 */
class Matiere extends Model
{

	public $table = 'matieres';
    protected $fillable =[
    					'id',
					   	'code_matiere',
					   	'libelle_matiere',
					   	'credit',
					   	'vf_ct',
					   	'vf_td',
					   	'vf_tp',
					   	'vh',
					   	'poids',
					   	'code_semestre',
					   	'code_ue',
					   	'code_classe',
					   ];




    public function cours()
    {
        return $this->hasMany('App\Models\Cours','code_matiere','code_matiere');
    }

	

	
}


?>