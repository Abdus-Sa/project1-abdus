<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TaskSeeder extends Seeder
{
    public function run()
    {
        // menambahkan data task dengan query builder
        $this->db->table('tasks')->insert([
            'name' => 'Belajar Codeigniter',
            'description' => 'CI merupakan framework PHP dengan konsep MVC.',
            'done' => false
        ]);
    }
}
