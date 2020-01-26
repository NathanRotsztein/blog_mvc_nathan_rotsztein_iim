<?php namespace controller;

include_once('../common/view.php');
include_once('../entity/post.php');
include_once('../dao/factory.php');

use common\View;
use entity\post;
use dao\Factory;


if(isset($_GET['action']))
{
	$action = $_GET['action'];
	postController::$action($_GET);
}


if(isset($_POST['action']))
{
	$action = $_POST['action'];
	postController::$action($_POST);
}

class postController
{
	public static function search($req)
	{
		$boul = new post();
		$facto = new Factory();
		$list = serialize($facto->search($boul, ""));
		View::show('post_search', array('data' => urlencode($list)));
	}

	public static function create($req)
	{
		
		$nom = $req['nom'];
		$nb_depost = $req['nb_depost'];

		
		$boul = new post();
		$facto = new Factory();

		
		$boul->set_nom($nom);
		$boul->set_nb_depost($nb_depost);

		
		$facto->create($boul);

	
		header('Location:/nathan-taff-php/controller/post.php?action=search');
	}

	public static function read($req)
	{
		
		$boul = new post();
		
		$boul->set_id($req['id']);
		
		$facto = new Factory();
		$found = $facto->read($boul);
		
		View::show('post_read', array('id' => $found->get_id(), 'nom' => $found->get_nom(), 'nb_depost' => $found->get_nb_depost()));
	}

	public static function update($req)
	{

	}

	public static function delete($req)
	{

	}
}

 ?>