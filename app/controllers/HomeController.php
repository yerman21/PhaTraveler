<?php
use Phalcon\Mvc\Model\Criteria;

class HomeController extends \Phalcon\Mvc\Controller
{
    public function buscaAction()
	{
		$this->persistent->parameters = null;
		header("Access-Control-Allow-Origin:*");	
		//url contra la que atacamos
		$ch = curl_init("http://localhost:8090/Cliente/datoss.php");

		//a true, obtendremos una respuesta de la url, en otro caso, 
		//true si es correcto, false si no lo es
		//establecemos el verbo http que queremos utilizar para la petición
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
		curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));          

		//enviamos el array data
		//curl_setopt($ch, CURLOPT_POSTFIELDS,http_build_query($data));
		//obtenemos la respuesta
		$response = curl_exec($ch);
		// Se cierra el recurso CURL y se liberan los recursos del sistema
		curl_close($ch);
		$config =new Phalcon\Config\Adapter\Json("http://localhost:8090/Cliente/datoss.php");

		$var =$config->city;
		
		$this->view->setVar('datos',$config);
	}

}

