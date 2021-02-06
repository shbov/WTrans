<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissionsCollection = collect([
            'User' => [
                ['name' => 'books.view'],
                ['name' => 'books.create'],
                ['name' => 'books.edit'],
                ['name' => 'books.delete'],
                ['name' => 'books.join'],
                ['name' => 'books.leave']
            ],
            'Admin' => [
                ['name' => 'books.view.*'],
                ['name' => 'books.edit.*'],
                ['name' => 'books.delete.*'],
            ],
            'Super Admin' => [
                ['name' => 'users.edit.*'],
                ['name' => 'manage users'] // Временно
            ]
        ]);

        $rolesCollection = [
            ['name' => 'User'],
            ['name' => 'Admin'],
            ['name' => 'Super Admin']
        ];

        foreach ($permissionsCollection->flatten(1)->toArray() as $perm) {
            Permission::create($perm);
        }

        foreach ($rolesCollection as $role) {
            $roleModel = Role::create($role);
            $rolePerms = Permission::whereIn('name', $permissionsCollection->toArray()[$roleModel->name])->get();

            foreach ($rolePerms as $rolePerm) {
                $roleModel->givePermissionTo($rolePerm);
            }

            $roleModel->save();
        }
    }
}
