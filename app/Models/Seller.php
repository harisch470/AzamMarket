<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $fillable = [
        'name','type','shopName','email','address','contactNo','subCharges', 'password','profileImg','coverImg'
    ];

    public static function create(array $data){
        $seller = new Seller();
        $seller->name = $data['name'];
        $seller->type = $data['type'];
        $seller->shopName = $data['shopName'];
        $seller->email = $data['email'];
        $seller->address = $data['address'];
        $seller->contactNo = $data['contactNo'];
        $seller->subCharges = $data['subCharges'];
        $seller->password = bcrypt($data['password']);
        $seller->profileImg = $data['profileImg']->getClientOriginalName();
        $seller->coverImg = $data['coverImg']->getClientOriginalName();
        $seller->save();
        $user=new User();
        $user->name=$data['name'];
        $user->email=$data['email'];
        $user->password=bcrypt($data['password']);
        $user->save();

    }
}
