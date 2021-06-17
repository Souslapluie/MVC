<?php

	class Controller_commander extends Controller
	{

		public function action_default() {
			$this->action_home() ;
		}
 
		public function action_home() {
			$this->render("home") ;
		}

		public function action_all_commander() {
			$m=Model::get_model();
			$data = ["commanders" => $m->get_all_commander()];
			$this->render("all_commander", $data) ;
		}
	}

	?>