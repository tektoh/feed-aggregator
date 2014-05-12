<?php
App::uses('AppShell', 'Console/Command');

class UserShell extends AppShell {
    public $uses = [
        'User'
    ];
    
    public function help()
    {
        echo "usage:\n";
        echo "\tview\n";
        echo "\tadd username password\n";
        echo "\tdelete user_id\n";
        return;
    }
    
    public function view()
    {
        return $this->show();
    }
    
    public function show()
    {
        $users = $this->User->find('all');
        
        if (empty($users)) {
            echo "empty!\n";
        } else {
            echo "user_id,username,password\n";
            foreach ($users as $user) {
                echo "{$user['User']['id']},{$user['User']['username']},{$user['User']['password']}\n";
            }
        }
    }
    
    public function add()
    {
        if (count($this->args) != 2) {
            return $this->help();
        }
        
        $this->User->create();
        if (!$this->User->save([
            'User' => [
                'username' => $this->args[0],
                'password' => $this->args[1],
            ]
        ])) {
            $this->log("User->save Error!");
        }
    }
}
