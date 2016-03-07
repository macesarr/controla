<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Utility\Inflector;

/**
 * Business Controller
 *
 * @property \App\Model\Table\BusinessTable $Business
 */
class BusinessController extends AppController
{

  /**
   * Index method
   *
   * @return \Cake\Network\Response|null
   */
  public function index()
  {
    $this->paginate = [
      'contain' => ['BusinessCategories', 'Cities']
    ];
    $business = $this->paginate($this->Business);

    $this->set(compact('business'));
    $this->set('_serialize', ['business']);
  }

  /**
   * View method
   *
   * @param string|null $id Busines id.
   * @return \Cake\Network\Response|null
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function view($id = null)
  {
    $busines = $this->Business->get($id, [
      'contain' => ['BusinessCategories', 'Cities']
    ]);

    $this->set('busines', $busines);
    $this->set('_serialize', ['busines']);
  }

  /**
   * Add method
   *
   * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
   */
  public function add()
  {    
    
    $busines = $this->Business->newEntity();
    if ($this->request->is('post')) {
      
      $slug = Inflector::slug($this->request->data['name']);
      $this->request->data['slug'] = $slug;
      $this->request->data['membership'] = 0;
      $this->request->data['active'] = true;
      
      if($this->request->data['logo']['name'] != ''){
	$logo = sha1(md5($this->request->data['name'])) . substr($this->request->data['logo']['name'], -4);
	$folder = 'uploads/' . $logo;
  
	move_uploaded_file($this->request->data['logo']["tmp_name"], $folder);
	
	$this->request->data['folder'] = $folder;
	$this->request->data['logo'] = $logo;
      }else{
	$this->request->data['folder'] = 'uploads/controla-logo.png';
	$this->request->data['logo'] = 'controla-logo.png';
      }
      
      $busines = $this->Business->patchEntity($busines, $this->request->data);

      if ($result = $this->Business->save($busines)) {

	$session = $this->request->session();

	$this->Flash->success(__('Tu negocio fue guardado exitosamente. Ahora solo debes completar el registro de tu cuenta para empezar a usar CONTROLA.'));

	$session->write('userEmail', $this->request->data['email']);
	$session->write('idBusiness', $result->id);
	
	return $this->redirect(['controller' => 'users', 'action' => 'add']);
      } else {
	$this->Flash->error(__('The busines could not be saved. Please, try again.'));
      }
    }
    
    $businessCategories = $this->Business->BusinessCategories->find('list', ['limit' => 200]);
    $cities = $this->Business->Cities->find('list', ['limit' => 200]);
    $this->set(compact('busines', 'businessCategories', 'cities'));
    $this->set('_serialize', ['busines']);
  }

  /**
   * Edit method
   *
   * @param string|null $id Busines id.
   * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
   * @throws \Cake\Network\Exception\NotFoundException When record not found.
   */
  public function edit($id = null)
  {
    $busines = $this->Business->get($id, [
      'contain' => []
    ]);
    if ($this->request->is(['patch', 'post', 'put'])) {
      $busines = $this->Business->patchEntity($busines, $this->request->data);
      if ($this->Business->save($busines)) {
        $this->Flash->success(__('The busines has been saved.'));
        return $this->redirect(['action' => 'index']);
      } else {
        $this->Flash->error(__('The busines could not be saved. Please, try again.'));
      }
    }
    $businessCategories = $this->Business->BusinessCategories->find('list', ['limit' => 200]);
    $cities = $this->Business->Cities->find('list', ['limit' => 200]);
    $this->set(compact('busines', 'businessCategories', 'cities'));
    $this->set('_serialize', ['busines']);
  }

  /**
   * Delete method
   *
   * @param string|null $id Busines id.
   * @return \Cake\Network\Response|null Redirects to index.
   * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
   */
  public function delete($id = null)
  {
    $this->request->allowMethod(['post', 'delete']);
    $busines = $this->Business->get($id);
    if ($this->Business->delete($busines)) {
      $this->Flash->success(__('The busines has been deleted.'));
    } else {
      $this->Flash->error(__('The busines could not be deleted. Please, try again.'));
    }
    return $this->redirect(['action' => 'index']);
  }
}
