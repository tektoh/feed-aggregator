<?php
App::uses('Controller', 'Controller');

class AppController extends Controller
{
    public $components = [
        'DebugKit.Toolbar',
        'Auth' => [
            'flash' => [
                'element' => 'alert',
                'key' => 'auth',
                'params' => [
                    'plugin' => 'BoostCake',
                    'class' => 'alert-error'
                ]
            ]
        ]
    ];
    
    public $helpers = [
        'Session',
        'Html' => ['className' => 'BoostCake.BoostCakeHtml'],
        'Form' => ['className' => 'BoostCake.BoostCakeForm'],
        'Paginator' => ['className' => 'BoostCake.BoostCakePaginator'],
    ];
    
    public function beforeFilter()
    {
        $this->Auth->loginRedirect  = ['controller' => 'pages', 'action' => 'home'];
        $this->Auth->logoutRedirect = ['controller' => 'users', 'action' => 'login'];
        $this->set('loggedIn', $this->Auth->loggedIn());
    }
}
