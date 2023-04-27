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

    
    'show item',    
    'add item',
    'edit item',
    'delete item',

    'show category',
    'add category',
    'edit category',
    'delete category',

    'show role',
    'add role',
    'edit role',
    'delete role',

    'show user',
    'add user',
    'edit user',
    'delete user',
    
    'show contact us',

    'show orders',
    'add orders',
    'edit orders',
    'delete orders',
  


];



foreach ($permissions as $permission) {

Permission::create(['name' => $permission]);
}


}
}
