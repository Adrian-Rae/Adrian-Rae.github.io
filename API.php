<?php

	$api_session = websiteRequest::instance();
	$api_session->deliver();

	class websiteRequest{
		
		public static function instance(){
			static $instance = null;
			if($instance === null) $instance = new websiteRequest();
			return $instance;
		}

		private function __construct(){

		}

		public function deliver(){
			echo "Tada";
			die();
		}
	}


?>