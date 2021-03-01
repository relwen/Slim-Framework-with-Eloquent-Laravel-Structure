<?php

use App\Controllers\HomeController;
use App\Controllers\CategorieController;
use App\Models\Categorie;
use App\Models\ChefClasses;
use App\Models\EmploiTps;
use App\Models\Classe;
use App\Models\Programmation;
use App\Models\Matiere;
use App\Models\CoursSuivi;
use App\Models\Suivi;
use App\Models\Cours;
use Carbon\Carbon;



	$app->get('/',function($request,$response,$args){
		return "Cool Burkina Faso";
	});

$app->post('/login', function ($request, $response, $args) {
    
    $user = $request->getParsedBody();

    $username=$user['username'];
    $password=$user['password'];

	$password = password_hash($password, PASSWORD_BCRYPT);

    // $req=ChefClasses::with('classes')->where('matricule_etudiant',$username)->where('password',$password);

    $req=ChefClasses::where('matricule_etudiant',$username);
    // $req=ChefClasses::where('matricule_etudiant',$username)->where('password',$password);

    $req_ex=$req->exists();
    $data=$req->get();

    if($req_ex){
    	// Pour recuperer le code Filiere
    	// echo $req->get('code_classe')[0]->classes['code_filiere'];

    	return $this->response->withJson(['status'=>'ok','user'=>$data]);
    }
    else
    	return $this->response->withJson("rien");
});




// AVOIR LES EMPLOIS DU TPS
$app->get('/emploi_tps/{filiere}/{classe}', function ($request, $response, $args) {
	
    
	$filiere=$args['filiere'];
	$classe=$args['classe'];
    
    // $tps=EmploiTps::where('filiere',$filiere)->where('classe',$classe)->get();
    $tps=EmploiTps::where('filiere',$filiere)->where('classe',$classe)->get();

	return $this->response->withJson(['status'=>'ok','emploi_tps'=>$tps]);


});





// PROGRAMMATION DES COURS
$app->get('/cours', function ($request, $response, $args) {
    

    $cours=Programmation::all();

	return $this->response->withJson($cours);


});




// PROGRAMMATION DES COURS
$app->get('/suivi', function ($request, $response, $args) {
    

    $cours=CoursSuivi::with('agent')->get();

	return $this->response->withJson($cours);


});




// SUIVI DES COURS
$app->post('/suivi', function ($request, $response, $args) {

    $input = $request->getParsedBody();

    $vct=$input['vct'];
    $vtp=$input['vtp'];
    $vtd=$input['vtd'];
    $description=$input['description'];
    $code_cours=$input['code_matiere'];

	$dt = Carbon::now();

	// $cours=Cours::where('code_matiere',$code_matiere)->get('id');

	// echo($cours);

    $suivi=Suivi::create([
    	'description'=>$description,
    	'date_cours'=>$dt,
    	'code_cours'=>4,
    	'heure_ct'=>$vct,
    	'heure_td'=>$vtd,
    	'heure_tp'=>$vtp,
    	'agent'=>2,
    ]);

	return $this->response->withJson($suivi);


});









