<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            [
                'id' => 1,
                'title' => 'task_create',
            ],
            [
                'id' => 2,
                'title' => 'task_edit',
            ],
            [
                'id' => 3,
                'title' => 'task_destroy',
            ],
        ];
        Permission::insert($permissions);
        Role::findOrFail(1)->permissions()->sync([1, 2, 3]);
        Role::findOrFail(2)->permissions()->sync([1]);
    }
}
