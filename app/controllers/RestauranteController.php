<?php

class RestauranteController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function buscaAction(){
		$this->persistent->parameters = null;
		header("Access-Control-Allow-Origin:*");	
		//url contra la que atacamos
		$ch = curl_init("http://172.17.1.25:8080/RestauranteServis/PlatillosRestaurantes");	
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

