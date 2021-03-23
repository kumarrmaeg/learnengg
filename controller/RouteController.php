<?php
// include_once("model/User.php");
class RouteController{
	// public $model;
	public function __construct(){
		// $this->model = new User();
	}

	public function home(){
		include 'view/home.php';
	}

	public function iti(){
		include 'view/iti.php';
	}

	public function aboutus(){
		include 'view/aboutus.php';	
	}

	public function products(){
		include 'view/products.php';	
	}

	public function development_process(){
		include 'view/development-process.php';	
	}

	public function inviting_contributions(){
		include 'view/inviting-contributions.php';	
	}

	public function supports(){
		include 'view/supports.php';	
	}

	public function diploma(){
		include 'view/diploma.php';	
	}

	public function be_btech(){
		include 'view/be-btech.php';	
	}

	public function certifications(){
		include 'view/certifications.php';	
	}

	public function skill(){
		include 'view/skill.php';	
	}

	public function term(){
		include 'view/term.php';	
	}

	public function product_single(){
		include 'view/product-single.php';	
	}

	public function iti_sub(){
		include 'view/iti/product-single.php';	
	}
} ?>