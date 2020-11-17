<?php

class RestPeopleController extends AppController {

    public $uses = array('Person');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

    public function index() {
        $people = $this->Person->find('all');
        $this->set(array(
            'people' => $people,
            '_serialize' => array('people')
        ));
    }

    public function add() {
        $this->Person->create();
        if ($this->Person->save($this->request->data)) {
            $message = 'Created';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function view($id) {
        $person = $this->Person->findById($id);
        $this->set(array(
            'person' => $person,
            '_serialize' => array('person')
        ));
    }

    public function edit($id) {
        $this->Person->id = $id;
        if ($this->Person->save($this->request->data)) {
            $message = 'Saved';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

    public function delete($id) {
        if ($this->Person->delete($id)) {
            $message = 'Deleted';
        } else {
            $message = 'Error';
        }
        $this->set(array(
            'message' => $message,
            '_serialize' => array('message')
        ));
    }

}
