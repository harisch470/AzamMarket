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
                if(isset($request['profileImg']) && $request['coverImg'] ){
                    $profile=$request['profileImg'];
                    $profile->move('uploads/Sellers/profileImg',$profile->getClientOriginalName());
                    $cover=$request['coverImg'];
                    $cover->move('uploads/Sellers/coverImg',$cover->getClientOriginalName());
                }
            return redirect()->route('login')->with('message', 'Seller has been save successfully!');
        }

        else{
            $buyer=Buyer::create($data);
                if(isset($request['profileImg']) && $request['coverImg'] ){
                    $profile=$request['profileImg'];
                    $profile->move('uploads/Buyers/profileImg',$profile->getClientOriginalName());
                    $cover=$request['coverImg'];
                    $cover->move('uploads/Buyers/coverImg',$cover->getClientOriginalName());
                }
            return redirect()->route('login')->with('message', 'Seller has been save successfully!');
        }

    }
}
