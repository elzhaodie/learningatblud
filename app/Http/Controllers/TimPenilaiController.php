<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Timpenilai; // Assuming you have a Timpenilai model

class TimPenilaiController extends BaseController
{
    public function index()
    {
        $timpenilais = Timpenilai::all();
        return view('admin.pages.timpenilai', compact('timpenilais'));
    }

    public function edit($id)
    {
        $timpenilais = Timpenilai::findOrFail($id);
        return view('admin.pages.edittimpenilai', compact('timpenilais'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'opd_penilai' => 'required|string|max:255',
        ]);

        $timpenilais = Timpenilai::findOrFail($id);
        $timpenilais->update([
            'opd_penilai' => $validated['opd_penilai'],
        ]);

        return redirect()->route('timpenilai')->with([
                'success' => 'Master Tim Penilai berhasil diperbarui!',
                'error' => 'Master Tim Penilai gagal diperbarui  !',
            ]);
    }
}
