<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Provinsi;

class adminUserController extends Controller
{
    public function index()
    {

        $user = DB::table('users')
            ->get();
        return view(
            'admin.user.index',
            [
                'user' => $user
            ]
        );
    }
}
