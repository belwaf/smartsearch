<?php
App::uses('AppController', 'Controller');
/**
 * Languges Controller
 *
 * @property Language $Language
 */
class LanguagesController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Language->recursive = 0;
		$this->set('languages', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Language->exists($id)) {
			throw new NotFoundException(__('Invalid Language'));
		}
		$options = array('conditions' => array('Language.' . $this->Language->primaryKey => $id));
		$this->set('Language', $this->Language->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Language->create();
			if ($this->Language->save($this->request->data)) {
				$this->Session->setFlash(__('The Language has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Language could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Language->exists($id)) {
			throw new NotFoundException(__('Invalid Language'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Language->save($this->request->data)) {
				$this->Session->setFlash(__('The Language has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Language could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Language.' . $this->Language->primaryKey => $id));
			$this->request->data = $this->Language->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Language->id = $id;
		if (!$this->Language->exists()) {
			throw new NotFoundException(__('Invalid Language'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Language->delete()) {
			$this->Session->setFlash(__('Language deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Language was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
	public function language($langue)
	{
		$languagetab=explode(',',$langue);
		$this->Session->write('Config.language', $languagetab[0]);      
        $this->redirect(array('controller' => $languagetab[1], 'action' => $languagetab[2]));	
	}
}
