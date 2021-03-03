<?php

use App\Controllers\HomeController;
use App\Controllers\CategorieController;
use App\Models\Categorie;
use App\Models\ChefClasses;
use App\Models\EmploiTps;
use App\Models\Classe;
use App\Models\Enseignant;
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

	$password = sha1(md5($password));

    // $req=ChefClasses::with('classes')->where('matricule_etudiant',$username)->where('password',$password);

    $req=ChefClasses::where('email',$username)->where('password',$password);
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


// INSCRIPTION DE NOUVEAU ÉTUDIANT

$app->post('/register', function ($request, $response, $args) {
    
    $user = $request->getParsedBody();

    $name=$user['name'];
    $surname=$user['surname'];
    $matricule=$user['matricule'];
    $email=$user['email'];
    $sexe=$user['sexe'];
    $tel1=$user['phone'];
    $password=$user['password'];

    $insert=Enseignant::create([
        'matricule'=>$matricule,
        'nom'=>$name,
        'prenom'=>$surname,
        'sexe'=>$sexe,
        'tel1'=>$tel1,

    ]);

    if ($insert) {
        return $this->response->withJson(['status'=>'ok']);
    }else
        return $this->response->withJson("rien");

});



// AVOIR LES EMPLOIS DU TPSœ
$app->get('/emploi_tps/{filiere}/{classe}', function ($request, $response, $args) {
	
    
	$filiere=$args['filiere'];
	$classe=$args['classe'];
    
    // $tps=EmploiTps::where('filiere',$filiere)->where('classe',$classe)->get();
    $tps=EmploiTps::where('filiere',$filiere)->where('classe',$classe)->get();

	return $this->response->withJson(['status'=>'ok','emploi_tps'=>$tps]);


});



// CREER EMPLOI DU TPS
$app->post('/create_emploi_tps', function ($request, $response, $args) {

    $input = $request->getParsedBody();

    $filiere=$input['filiere'];
    $classe=$input['classe'];
    $semaine=$input['semaine'];
    $file=$input['file'];
    $user=$input['user'];

    $cree=EmploiTps::create([
        'filiere'=>$filiere,
        'classe'=>$classe,
        'semaine'=>$semaine,
        'file'=>$file,
        'user_id'=>$user,
    ]);

    if($cree)
        return $this->response->withJson(['status'=>'ok']);
    else
        return $this->response->withJson(['status'=>'non']);


});






// PROGRAMMATION DES COURS
$app->get('/cours', function ($request, $response, $args) {
    
    $input = $request->getParsedBody();
    $code=$input['code'];

    $cours=Programmation::where('code_classe',$code)->get();

	return $this->response->withJson($cours);


});


// PROGRAMMATION DES COURS  / VU ENSEIGNANT
$app->get('/cours_enseignant', function ($request, $response, $args) {
    

    $input = $request->getParsedBody();
    $code=$input['code'];

    $cours=Programmation::where('matricule_enseignant',$code)->get();

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









