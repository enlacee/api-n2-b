<?php

use Phinx\Migration\AbstractMigration;

class AdminCreateData extends AbstractMigration
{
    public function change()
    {
        $data = [
            [
                'id' => 1,
                'name' => 'Admin',
                'description' => 'Default Administration role',
                'resources' => '',
                'active' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->table('admin_roles')
            ->insert($data)
            ->save();


        // ------
        $data = [
            [
                'admin_roles_id' => 1,
                'name' => 'Admin',
                'username' => 'admin',
                'password' => 'admin',
                'active' => 1,
                'is_superuser' => 1,
                'created_at' => date('Y-m-d H:i:s'),
            ],
        ];

        $this->table('admin_users')
            ->insert($data)
            ->save();
    }
}
