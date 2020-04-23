<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class AppController extends Controller
{
    public function index(){
    	return "hola mundo";
    }

    public function index1(){
      return View('welcome');
    }

     public function conductores(){
     // $login = $this->login();
      $client = new Client(['base_uri' => 'http://integrainnobus.sitesas.com.co', 'verify' => false]);
      $response = $client->request('GET', 'Thucronevents/getcond');
      $datos = json_decode($response->getBody(),true);
     // $logout = $this->logout();
      return $datos;
    }

    public function programacion(){
     // $login = $this->login();
      $client = new Client(['base_uri' => 'http://integrainnobus.sitesas.com.co', 'verify' => false]);
      $response = $client->request('GET', 'Thucronevents/getprogramacioncond');
      $datos = json_decode($response->getBody(),true);
     // $logout = $this->logout();
      return $datos;
    }
    public function na(){
      return "hola mundo 2";
    }
}
