<?php

namespace App;
use DB;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','role_id', 'password','photo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function getUserPermisions(){
        $empty_permissions_array = [];
        $permissions_array = DB::table('permission_roles')
        ->join('permissions','permissions.id','permission_roles.permission_id')
        ->where('role_id',Auth::user()->role_id)
        ->select('permissions.permission')->get();
        foreach(json_decode($permissions_array,true) as $permissions){
                array_push($empty_permissions_array,$permissions["permission"]);
        }
        return $empty_permissions_array;
    }
    public function getLoggedInUserImage(){
        $user_logo = User::where('id', '=', $this->id)->value('photo');
        if(empty($user_logo)){
            $user_logo = 'logo.jpg';
        }
        return $user_logo;
     }
    
    /**
     * This function add all the trainees
     */
    public function allTrainees(){
        $all_trainees =$count_of_new_trainees + $count_of_old_trainees;
        return $all_trainees;
    }
     /**
     * This function counts the new trainees
     */
    public  function countNewTrainees(){
        $count_of_new_trainees = Enrollment::whereMonth('created_at',date('M'))->count();
        return $count_of_new_trainees;
    }
    /**
     * This function counts the old trainees
     */
    public function countOldTrainees(){
        $count_of_old_trainees = Enrollment::whereMonth('created_at','!=',date('M'))->count();
        return $count_of_old_trainees;
    }

}
