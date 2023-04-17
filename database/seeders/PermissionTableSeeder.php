<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
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


$permissions = [

        
        'add product',
        'edit product',
        'delete product',

         'add category',
         'edit category',
        'delete category',

        'show role',
        'add role',
        'edit role',
        'delete role',
     

];



foreach ($permissions as $permission) {

Permission::create(['name' => $permission]);
}


}
}
