<?php

	class Controller_fournisseur extends Controller
	{

		public function action_default() {
			$this->action_home() ;
		}
 
		public function action_home() {
			$this->render("home") ;
		}

		public function action_all_fournisseur() {
			$m=Model::get_model();
			$data = ["fournisseurs" => $m->get_all_fournisseur()];
			$this->render("all_fournisseur", $data) ;
		}
	}

	?>