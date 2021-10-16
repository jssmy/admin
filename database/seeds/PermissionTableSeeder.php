<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $menu_user_main =  Permission::create([
            'name' => 'user.main',
            'description' => 'MENU USUARIOS',
            'icon' => 'radio_button_unchecked',
            'type' => 'menu',
            'state' => 1
        ]);
        Permission::create([
            'name' => 'user.index',
            'description' => 'Usuarios',
            'icon' => 'radio_button_unchecked',
            'type' => 'menu',
            'state' => 1,
            'parent_id' => $menu_user_main->id
        ]);

        Permission::create([
            'name' => 'user.create',
            'description' => 'Crear usuario',
            'icon' => 'radio_button_unchecked',
            'type' => 'option',
            'state' => 1
        ]);

        Permission::create([
            'name' => 'user.store',
            'description' => 'Guardar usuario',
            'icon' => 'radio_button_unchecked',
            'type' => 'option',
            'state' => 1
        ]);

        $user = User::create([
            'document_number'=> '73362261',
            'user_name' => 'jssmy',
            'name' => 'Joset',
            'last_name' => 'Manihuari Yaricahua',
            'password' => bcrypt('123456')
        ]);

        $role = Role::create(['name' => 'Administrador']);

        $permissions = Permission::pluck('id', 'id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}

