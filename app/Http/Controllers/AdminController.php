<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function dashboardadmin(){
        return view ('Admin.Admin-dashboard');
    }
//     public function datapengguna(){
//         $pelanggan = User::where('peran', '=', 'pelanggan')
//         ->paginate(5);
//         return view ('admin.data-pengguna', compact('pelanggan'));
//     }

    public function tambah_product(Request $request)
    {
        
    }


}