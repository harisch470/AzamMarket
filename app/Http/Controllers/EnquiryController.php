<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    protected function create(Request $request)
    {
        $data=$request->all();
        $enquiry=Enquiry::create($data);
        $success=1;
        return view('enquiry',compact('success'));

    }
}
