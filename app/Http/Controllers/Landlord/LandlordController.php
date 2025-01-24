<?php

namespace App\Http\Controllers\Landlord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandlordController extends Controller
{
    //
    public function landlord_dashboard()
    {
        return view('landlord.landlord-dashboard');
    }
}
