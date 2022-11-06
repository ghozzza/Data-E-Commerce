<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Rumah_sakit;

class adminRumahSakitController extends Controller
{
    public function index()
    {
        $rumah_sakit = DB::table('rumah_sakits')
            ->get();
        return view(
            'admin.rumah-sakit.index',
            [
                'rumah_sakit' => $rumah_sakit
            ]
        );
    }

    public function create()
    {
        return view('admin.rumah-sakit.create');
    }
    public function store(Request $request)
    {
        $rumah_sakit = DB::table('rumah_sakits')->insert([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        if ($rumah_sakit) {
            return redirect('admin-dashboard/rumah-sakit')
                ->with([
                    'success' => 'Post has been added successfully'
                ]);
        } else {
            return redirect('admin-dashboard/rumah-sakit')
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
    public function edit($id)
    {
        $rumah_sakit = Rumah_sakit::findOrFail($id);
        return view('admin.rumah-sakit.edit', compact('rumah_sakit'));
    }
    public function update(Request $request, $id)
    {
        $rumah_sakit = Rumah_sakit::findOrFail($id);
        $rumah_sakit->update([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'no_telp' => $request->no_telp,
        ]);
        if ($rumah_sakit) {
            return redirect('admin-dashboard/rumah-sakit')
                ->with([
                    'success' => 'Post has been updated successfully'
                ]);
        } else {
            return redirect('admin-dashboard/rumah-sakit')
                ->back()
                ->withInput()
                ->with([
                    'error' => 'Some problem has occured, please try again'
                ]);
        }
    }
    public function delete($id)
    {
        $rumah_sakit = Rumah_sakit::findOrFail($id);
        $rumah_sakit->delete();

        if ($rumah_sakit) {
            return redirect('admin-dashboard/rumah-sakit')
                ->with([
                    'success' => 'Post has been deleted successfully'
                ]);
        } else {
            return redirect('admin-dashboard/rumah-sakit')
                ->with([
                    'error' => 'Some problem has occurred, please try again'
                ]);
        }
    }
}
