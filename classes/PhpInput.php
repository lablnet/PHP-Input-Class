<?php

class PhpInput

{

	private $method;

	public function __construct() {

		$this->method =  $_SERVER['REQUEST_METHOD'];
	}

	public function WordWrapEnable($str){

		return wordwrap($str, $width, '<br />\n');

	}

	public function IsFromSubmit($name){

			if(isset($_REQUEST[$name])){

				return true;

			}else{

				return false;

			}

	}

	public function Input ( $params ) {

		if(is_array($params)){

			if(isset($this->method) && !empty($this->method)){

				if(isset($params['name']) && !empty($params['name'])){

					if($this->method === 'POST' && isset($_POST[$params['name']])){

						$string = $_POST[$params['name']];

					}elseif($this->method === 'GET' && isset($_GET[$params['name']])){

						$string = $_GET[$params['name']];

					}elseif($this->method === 'PUT'){

						$data = file_get_contents('php://input');

						$json_decode_data = json_decode($data,true);

						$string = $json_decode_data;

					}elseif($this->method === 'PATCH'){

						$data = file_get_contents('php://input');

						$json_decode_data = json_decode($data,true);

						$string = $json_decode_data;

					}else{

						if(isset($_REQUEST[$params['name']])){

							$string = $_REQUEST[$params['name']];

						}

					}

					if(isset($string)){

						return $string;

					}

				}

			}

		}else{

			return false;

		}

	}

	public function CleanInput($params){
		if(is_array($params)){
			if(!empty($params['input'])){
				if(!empty($params['type'])){
					if($params['type'] === 'secured'){
				        return  stripslashes(trim(htmlspecialchars($params['input'])));
					}elseif($params['type'] === 'root'){
						return  stripslashes(trim(htmlspecialchars(strip_tags($params['input']))));
					}
				}else{
					return false;
				}
			}else{
				return false;
			}
		}else{
			return false; 
		}
	}

	public function IsAjax(){

		if(isset($_SERVER['HTTP_X_REQUESTED_WITH']) && $_SERVER['HTTP_X_REQUESTED_WITH'] === 'XMLHttpRequest'){

			return true;

		}else{

			return false;

		}
	}

}