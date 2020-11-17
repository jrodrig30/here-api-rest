<?php

class RestPeopleController extends AppController {

    public $uses = array('Event');
    public $helpers = array('Html', 'Form');
    public $components = array('RequestHandler');

    public function index() {
        $events = $this->Event->find('all');
        $this->set(array(
            'events' => $events,
            '_serialize' => array('events')
        ));
    }

    public function add() {
        $this->Event->create();
        if ($this->Event->save($this->request->data)) {
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
        $event = $this->Event->findById($id);
        $this->set(array(
            'event' => $event,
            '_serialize' => array('event')
        ));
    }

    public function edit($id) {
        $this->Event->id = $id;
        if ($this->Event->save($this->request->data)) {
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
        if ($this->Event->delete($id)) {
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
