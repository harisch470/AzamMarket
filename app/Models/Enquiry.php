<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    protected $fillable = [
        'name','city','email','country','contactNo', 'subject','message'
    ];

    public static function create(array $data){
        $enquiry = new Enquiry();
        $enquiry->name = $data['name'];
        $enquiry->city = $data['city'];
        $enquiry->email = $data['email'];
        $enquiry->country = $data['country'];
        $enquiry->contactNo = $data['contactNo'];
        $enquiry->subject = $data['subject'];
        $enquiry->message = $data['message'];
        $enquiry->save();
    }
}
