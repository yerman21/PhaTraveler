<?php
use Phalcon\Mvc\Model\Criteria;

class HomeController extends \Phalcon\Mvc\Controller
{
    public function buscaAction()
	{
		$this->persistent->parameters = null;
		header("Access-Control-Allow-Origin:*");	
		//url contra la que atacamos
		$ch = curl_init("http://localhost:8000/myhous/");		
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));          
		$response = curl_exec($ch);
		// Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);
		//Para solicitar JSON... pero con un formato especial ... los clave:"/value/"
		//$config =new Phalcon\Config\Adapter\Json("http://localhost:8090/Cliente/datoss.php");

		//$var =$config->city;
		
		$this->view->setVar('datos',$response);
	}

}

