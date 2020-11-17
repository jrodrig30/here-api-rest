<?php
App::uses('AppController', 'Controller');
/**
 * EventMeetings Controller
 *
 * @property EventMeeting $EventMeeting
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EventMeetingsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator', 'Session');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->EventMeeting->recursive = 0;
		$this->set('eventMeetings', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventMeeting->exists($id)) {
			throw new NotFoundException(__('Invalid event meeting'));
		}
		$options = array('conditions' => array('EventMeeting.' . $this->EventMeeting->primaryKey => $id));
		$this->set('eventMeeting', $this->EventMeeting->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventMeeting->create();
			if ($this->EventMeeting->save($this->request->data)) {
				$this->Session->setFlash(__('The event meeting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event meeting could not be saved. Please, try again.'));
			}
		}
		$events = $this->EventMeeting->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventMeeting->exists($id)) {
			throw new NotFoundException(__('Invalid event meeting'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventMeeting->save($this->request->data)) {
				$this->Session->setFlash(__('The event meeting has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event meeting could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventMeeting.' . $this->EventMeeting->primaryKey => $id));
			$this->request->data = $this->EventMeeting->find('first', $options);
		}
		$events = $this->EventMeeting->Event->find('list');
		$this->set(compact('events'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventMeeting->id = $id;
		if (!$this->EventMeeting->exists()) {
			throw new NotFoundException(__('Invalid event meeting'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EventMeeting->delete()) {
			$this->Session->setFlash(__('The event meeting has been deleted.'));
		} else {
			$this->Session->setFlash(__('The event meeting could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
