<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1459969132_createUsers
    extends Migration
{

    public function up()
    {
        $this->createTable('users', [
            'name' => ['type' => 'string']
        ]);
    }

    public function down()
    {
        $this->dropTable('users');
    }
    
}