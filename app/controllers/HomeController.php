<?php
use Phalcon\Mvc\Model\Criteria;

class HomeController extends \Phalcon\Mvc\Controller
{
    public function buscaAction()
	{
		$this->persistent->parameters = null;
		$data_tipo='1';
		$data_lugar='Alameda';
		header("Access-Control-Allow-Origin:*");	
		//url contra la que atacamos
		$ch = curl_init("http://localhost:8000/myhous/"+$data_tipo+"/"+$data_lugar+"/");

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
	public function restauranteAction(){
		$this->persistent->parameters = null;
		header("Access-Control-Allow-Origin:*");	
		//url contra la que atacamos
		$ch = curl_init("http://localhost/Cliente/datoss.php");	
		//establecemos que la peticion sera por GET
		curl_setopt($ch, CURLOPT_HTTPGET, true);
		//Configuramos para que el valor devuelto lo podamos
		// manipular y no simplemete inprimirlo
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);		
		//enviamos el array data como parametro
		//curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
		//obtenemos la respuesta
		$response = curl_exec($ch);
		// Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);	
		//Te lleva a la VISTA restaurante ubicado en views/home/restaurante.volt
		//Tratar el archivo restaurante.volt como un PHP					
		$this->view->setVar('datos',$response);
	}

}

