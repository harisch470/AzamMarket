<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Buyer extends Model
{
    protected $fillable = [
        'name','type','email','address','contactNo', 'password','profileImg','coverImg'
    ];

    public static function create(array $data){
        $buyer = new Buyer();
        $buyer->name = $data['name'];
        $buyer->type = $data['type'];
        $buyer->email = $data['email'];
        $buyer->address = $data['address'];
        $buyer->contactNo = $data['contactNo'];
        $buyer->password = encrypt($data['password']);
        $buyer->profileImg = $data['profileImg']->getClientOriginalName();
        $buyer->coverImg = $data['coverImg']->getClientOriginalName();
        $buyer->save();
        $user=new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);
        $user->save();
    }



}
