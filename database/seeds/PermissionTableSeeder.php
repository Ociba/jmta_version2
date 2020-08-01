<?php

use Illuminate\Database\Seeder;
use App\Permission;

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
        $permissions = ['Can view dashboard','Can view course','Can view course content','Can view account settings','Can add course','Can view enrollment form',
        'Can view revelation','Can view assessment form','Can view Bible marathon','Can view Forum','Can view trainees','Can view assignment results',
        'Can view assignments','Can view assignment actions','Can add assignment marks','Can view assignment form',
        'Can view assignment answer form'];
        for($i=0; $i < count($permissions); $i++){
            $permission = new Permission();
            if(Permission::where("id",$i)->exists()){
                $permission->id = $i+1;
            }
            else{
                $permission->id = $i;
            } 
            $permission->permission=$permissions[$i];
            $permission->save();
        }
    }
}
