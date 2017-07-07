<?php
use Phalcon\Mvc\Model\Criteria;

class HomeController extends \Phalcon\Mvc\Controller
{
	public function indexAction(){



	}

    public function buscaAction()
	{
		$this->persistent->parameters = null;
		$data_tipo='1';
		$data_lugar='Alameda';
		header("Access-Control-Allow-Origin:*");	
		//url contra la que atacamos
		$ch = curl_init("http://localhost:8000/myhous/".$data_tipo."/".$data_lugar."/");

		curl_setopt($ch, CURLOPT_HTTPGET, true);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
		//curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		//curl_setopt($ch,CURLOPT_POSTFIELDS,$jsondata):
		$response = curl_exec($ch);
		// Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);
		//Para solicitar JSON... pero con un formato especial ... los clave:"/value/"
		//$config =new Phalcon\Config\Adapter\Json("http://localhost:8090/Cliente/datoss.php");

		//$var =$config->city;
		
		$this->view->setVar('datos',$response);
	}
	
}

