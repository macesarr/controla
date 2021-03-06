<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * BusinessCategories Controller
 *
 * @property \App\Model\Table\BusinessCategoriesTable $BusinessCategories
 */
class BusinessCategoriesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $businessCategories = $this->paginate($this->BusinessCategories);

        $this->set(compact('businessCategories'));
        $this->set('_serialize', ['businessCategories']);
    }

    /**
     * View method
     *
     * @param string|null $id Business Category id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $businessCategory = $this->BusinessCategories->get($id, [
            'contain' => ['Business']
        ]);

        $this->set('businessCategory', $businessCategory);
        $this->set('_serialize', ['businessCategory']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $businessCategory = $this->BusinessCategories->newEntity();
        if ($this->request->is('post')) {
            $businessCategory = $this->BusinessCategories->patchEntity($businessCategory, $this->request->data);
            if ($this->BusinessCategories->save($businessCategory)) {
                $this->Flash->success(__('The business category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The business category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('businessCategory'));
        $this->set('_serialize', ['businessCategory']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Business Category id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $businessCategory = $this->BusinessCategories->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $businessCategory = $this->BusinessCategories->patchEntity($businessCategory, $this->request->data);
            if ($this->BusinessCategories->save($businessCategory)) {
                $this->Flash->success(__('The business category has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The business category could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('businessCategory'));
        $this->set('_serialize', ['businessCategory']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Business Category id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $businessCategory = $this->BusinessCategories->get($id);
        if ($this->BusinessCategories->delete($businessCategory)) {
            $this->Flash->success(__('The business category has been deleted.'));
        } else {
            $this->Flash->error(__('The business category could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
