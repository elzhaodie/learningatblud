<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Bidang; // Assuming you have a bidang model

class BidangController extends BaseController
{
    public function index()
    {
        $bidangs = Bidang::all();
        return view('admin.pages.bidang', compact('bidangs'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bidang_name' => 'required|string|max:255',
        ]);

        Bidang::create([
            'bidang_name' => $validated['bidang_name'],
        ]);

        // return redirect()->route('bidang')   
        return redirect()->route('bidang')->with([
                'success' => 'Master Bidang berhasil ditambahkan!',
                'error' => 'Master Bidang gagal ditambahkan!',
            ]);
    }

    public function edit($id)
    {
        $bidang = Bidang::findOrFail($id);
        return view('admin.pages.editbidang', compact('bidang'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'bidang_name' => 'required|string|max:255',
        ]);

        $bidang = Bidang::findOrFail($id);
        $bidang->update([
            'bidang_name' => $validated['bidang_name'],
        ]);

        return redirect()->route('bidang')->with([
                'success' => 'Master Bidang berhasil diperbarui!',
                'error' => 'Master Bidang gagal diperbarui  !',
            ]);
    }
}
