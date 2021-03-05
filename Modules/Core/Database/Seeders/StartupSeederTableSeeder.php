<?php

namespace Modules\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class StartupSeederTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();
        $perms = ['add','view','edit','delete'];
        $roles = ['user','admin','superAdmin'];
      /* Role::create(['name' => 'user']);
       Role::create(['name' => 'admin']);
        // create permissions
        Permission::create(['name' => 'edit plans']);
        Permission::create(['name' => 'delete plans']);
        Permission::create(['name' => 'publish plans']);
        Permission::create(['name' => 'unpublish plans']);
        Permission::create(['name' => 'view plans']);*/
        $tables = DB::select('SHOW TABLES');
        foreach($tables as $table) {
            echo $table->Tables_in_db_name;
        }

         Role::create(['name' => 'user'])
            ->givePermissionTo(['view plans']);



        // $this->call("OthersTableSeeder");
    }
}
