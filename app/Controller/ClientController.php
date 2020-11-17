<?php
App::uses('HttpSocket', 'Network/Http');
class ClientController extends AppController {
	public $components = array('Security', 'RequestHandler');
	
	public function index(){
		
	}

	public function request_index(){
	
		// remotely post the information to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . '/here/rest_people.json';
		
		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->get($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	
	public function request_view($id){
	
		// remotely post the information to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . '/here/rest_phones/'.$id.'.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->get($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	
	public function request_edit($id){
	
		// remotely post the information to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . '/here/rest_phones/'.$id.'.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$data['Person']['name'] = 'José Rodrigo R Flores';
		$data['Person']['registration_number'] = '201568723';
		$data['Person']['email'] = 'jose@onehost.com.br';
		$data['Person']['photo'] = 'teste.jpg';
		
		$response = $httpSocket->put($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
	
	public function request_add(){
            $this->render(false);
		// remotely post the information to the server

		$link =  "http://" . $_SERVER['HTTP_HOST'] .'/here/rest_people.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$data['Person']['name'] = 'José Rodrigo R Flores';
		$data['Person']['registration_number'] = '201568723';
		$data['Person']['email'] = 'jose@onehost.com.br';
		$data['Person']['photo'] = 'teste.jpg';
		
		$response = $httpSocket->post($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
	}
	
	public function request_delete($id){
	
		// remotely post the inform $this->webroot.'ation to the server
		$link =  "http://" . $_SERVER['HTTP_HOST'] . '/here/rest_phones/'.$id.'.json';

		$data = null;
		$httpSocket = new HttpSocket();
		$response = $httpSocket->delete($link, $data );
		$this->set('response_code', $response->code);
		$this->set('response_body', $response->body);
		
		$this -> render('/Client/request_response');
	}
}