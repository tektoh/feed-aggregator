<?php
/**
 * アプリケーション用スキーマファイル
 *
 * データベースのスキーマを作成する時に使用します
 *
 * @package       app.Config.Schema
 */

/*
 *
 * Using the Schema command line utility
 * cake schema create DbApp
 *
 */
class AppSchema extends CakeSchema {

    public function before($event = array()) {
        return true;
    }

    public function after($event = array()) {
    }

    public $users = [
        'id' => [
            'type'    => 'integer',
            'null'    => false,
            'default' => null,
            'length'  => 10,
            'key'     => 'primary'
        ],
        'username' => [
            'type'    => 'string',
            'null'    => false,
            'default' => null,
            'length'  => 50
        ],
        'password' => [
            'type'    => 'string',
            'null'    => false,
            'default' => null,
            'length'  => 255
        ],
        'indexes' => [
            'PRIMARY' => [
                'column' => 'id',
                'unique' => true
            ]
        ]
    ];
}