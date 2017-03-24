<?php
App::uses('AppController', 'Controller');
/**
 * Composants Controller
 *
 * @property Composant $Composant
 */
class ComposantsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Composant->recursive = 0;
		$this->set('composants', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Composant->exists($id)) {
			throw new NotFoundException(__('Invalid composant'));
		}
		$options = array('conditions' => array('Composant.' . $this->Composant->primaryKey => $id));
		$this->set('composant', $this->Composant->find('first', $options));
		$this->loadModel('TypeComponent');
	$types=$this->TypeComponent->find('all');
	$this->set(compact('types'));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Composant->create();
			if ($this->Composant->save($this->request->data)) {
				$this->Session->setFlash(__('The composant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The composant could not be saved. Please, try again.'));
			}
		}
		$this->loadModel('TypeComponent');
	$types=$this->TypeComponent->find('all');
	$this->set(compact('types'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Composant->exists($id)) {
			throw new NotFoundException(__('Invalid composant'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Composant->save($this->request->data)) {
				$this->Session->setFlash(__('The composant has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The composant could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Composant.' . $this->Composant->primaryKey => $id));
			$this->request->data = $this->Composant->find('first', $options);
		}
		$this->loadModel('TypeComponent');
	$types=$this->TypeComponent->find('all');
	$this->set(compact('types'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Composant->id = $id;
		if (!$this->Composant->exists()) {
			throw new NotFoundException(__('Invalid composant'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Composant->delete()) {
			$this->Session->setFlash(__('Composant deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Composant was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
