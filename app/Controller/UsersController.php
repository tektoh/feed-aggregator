<?php
App::uses('AppController', 'Controller');

class UsersController extends AppController
{
    public $uses = [
        'User'
    ];
    
    public function login()
    {
        if ($this->request->is('post')) {
            $user = $this->User->auth($this->request->data);
            if ($user !== false &&  $this->Auth->login($user['User'])) {
                return $this->redirect($this->Auth->redirect());
            } else {
                $this->Session->setFlash('Please verify that your username and password are correct.',
                    'alert', ['plugin' => 'BoostCake', 'class' => 'alert-danger']);
            }
        }
    }
    
    public function logout()
    {
        $this->redirect($this->Auth->logout());
    }
}
