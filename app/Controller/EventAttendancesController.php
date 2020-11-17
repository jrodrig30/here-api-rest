<?php
App::uses('AppController', 'Controller');
/**
 * EventAttendances Controller
 *
 * @property EventAttendance $EventAttendance
 * @property PaginatorComponent $Paginator
 * @property SessionComponent $Session
 */
class EventAttendancesController extends AppController {

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
		$this->EventAttendance->recursive = 0;
		$this->set('eventAttendances', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->EventAttendance->exists($id)) {
			throw new NotFoundException(__('Invalid event attendance'));
		}
		$options = array('conditions' => array('EventAttendance.' . $this->EventAttendance->primaryKey => $id));
		$this->set('eventAttendance', $this->EventAttendance->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EventAttendance->create();
			if ($this->EventAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The event attendance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event attendance could not be saved. Please, try again.'));
			}
		}
		$people = $this->EventAttendance->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->EventAttendance->exists($id)) {
			throw new NotFoundException(__('Invalid event attendance'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EventAttendance->save($this->request->data)) {
				$this->Session->setFlash(__('The event attendance has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The event attendance could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EventAttendance.' . $this->EventAttendance->primaryKey => $id));
			$this->request->data = $this->EventAttendance->find('first', $options);
		}
		$people = $this->EventAttendance->Person->find('list');
		$this->set(compact('people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->EventAttendance->id = $id;
		if (!$this->EventAttendance->exists()) {
			throw new NotFoundException(__('Invalid event attendance'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->EventAttendance->delete()) {
			$this->Session->setFlash(__('The event attendance has been deleted.'));
		} else {
			$this->Session->setFlash(__('The event attendance could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
