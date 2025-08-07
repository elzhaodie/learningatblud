<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Daerah; // Assuming you have a daerah model

class DaerahController extends BaseController
{
    public function index()
    {
        $daerahs = Daerah::all();
        return view('admin.pages.daerah', compact('daerahs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'daerah_name' => 'required|string|max:255',
            'jenis_daerah' => 'required|string|max:255',
        ]);

        Daerah::create([
            'daerah_name' => $validated['daerah_name'],
            'jenis_daerah' => $validated['jenis_daerah'],
        ]);

        // return redirect()->route('daerah')
        return redirect()->route('daerah')->with([
                'success' => 'Master Daerah berhasil ditambahkan!',
                'error' => 'Master Daerah gagal ditambahkan!',
            ]);
    }

    public function edit($id)
    {
        $daerah = Daerah::findOrFail($id);
        return view('admin.pages.editdaerah', compact('daerah'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'daerah_name' => 'required|string|max:255',
            'jenis_daerah' => 'required|string|max:255',
        ]);

        $daerah = Daerah::findOrFail($id);
        
        $daerah->update([
            'daerah_name' => $validated['daerah_name'],
            'jenis_daerah' => $validated['jenis_daerah'],   
        ]);

        return redirect()->route('daerah')->with([
                'success' => 'Master Daerah berhasil diperbarui!',
                'error' => 'Master Daerah gagal diperbarui!',
            ]);
    }
}
