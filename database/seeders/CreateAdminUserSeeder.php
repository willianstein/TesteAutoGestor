<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'name' => 'auto gestor',
            'email' => 'admin@admin',
            'password' => bcrypt('123123')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = [
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            'product-list',
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
         ];

        $permissions = Permission::whereIn('name', $permissions)->pluck('id','id')->all();

        $role->syncPermissions($permissions);

        $user->assignRole([$role->id]);
    }
}
