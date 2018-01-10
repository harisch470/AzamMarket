<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Models\Seller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected function create(Request $request)
    {
        $data=$request->all();
        if(isset($data['subCharges'])){
            $seller=Seller::create($data);
            return redirect()->route('login')->with('message', 'Seller has been save successfully!');
        }

        else{
            $buyer=Buyer::create($data);
            return redirect()->route('login')->with('message', 'Seller has been save successfully!');
        }

    }
}
