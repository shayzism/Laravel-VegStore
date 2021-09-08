<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Seller;

class SellerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function show_on_admin_panel(){

        $all_sellers=Seller::all();
        return view('admin.seller.show',compact($all_sellers,'all_sellers'));

    }
    public function destroy ($id)
    {
        Seller::destroy($id);
        return redirect()->back()->with('delete_success',true);
    }
}
