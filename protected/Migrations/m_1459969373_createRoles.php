<?php

namespace App\Migrations;

use T4\Orm\Migration;

class m_1459969373_createRoles
    extends Migration
{

    public function up()
    {
        $this->createTable('roles', [
            'role' => ['type' => 'string'],
        ]);

        $this->addColumn('users', [
           '__role_id' => ['type' => 'link']
        ]);

        $this->insert('roles', [
            'role' => 'Admin',
        ]);

        $this->insert('roles', [
            'role' => 'User',
        ]);

        $this->insert('users', [
            'name' => 'user1',
            '__role_id' => 1
        ]);

    }

    public function down()
    {
        $this->dropColumn('users', '__role_id');
        $this->dropTable('roles');
    }
    
}