<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Penilaian;
use App\KategoriPenilaian; // Assuming you have a penilaian model

class PenilaianController extends BaseController
{
    public function indexsubstantif()
    {
        $data = Penilaian::join('kategoripenilaians', 'penilaians.kategori_penilaian_id', '=', 'kategoripenilaians.id')
                            ->select('penilaians.id','kategoripenilaians.kategori_name', 'penilaians.penilaian_name', 'penilaians.bobot')
                            ->where('kategoripenilaians.id', '=', '1')
                            ->get();

        
        $totalBobot = $data->sum('bobot');

        return view('admin.pages.penilaian', compact('data', 'totalBobot'));
    }

    public function edit($id)
    {
        $penilaian = Penilaian::findOrFail($id);
        return view('admin.pages.editpenilaian', compact('penilaian'));
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'penilaian_name' => 'required|string|max:255',
        ]);

        $penilaian = Penilaian::findOrFail($id);

        $penilaian->update([
            'penilaian_name' => $validated['penilaian_name'],
        ]);

        return redirect()->route('penilaiansubstantif')->with([
                'success' => 'Master Penilaian berhasil diperbarui!',
                'error' => 'Master Penilaian gagal diperbarui!',
            ]);
    }

    public function indexteknis()
    {
        $data = Penilaian::join('kategoripenilaians', 'penilaians.kategori_penilaian_id', '=', 'kategoripenilaians.id')
                            ->select('penilaians.id','kategoripenilaians.kategori_name', 'penilaians.penilaian_name', 'penilaians.bobot')
                            ->where('kategoripenilaians.id', '=', '2')
                            ->get();

        $totalBobot = $data->sum('bobot');

        return view('admin.pages.penilaianteknis', compact('data', 'totalBobot'));
    }

    public function indexadministratif_telahupt()
    {
        $data = Penilaian::join('kategoripenilaians', 'penilaians.kategori_penilaian_id', '=', 'kategoripenilaians.id')
                            ->select('penilaians.id','kategoripenilaians.kategori_name', 'penilaians.penilaian_name', 'penilaians.bobot')
                            ->where('kategoripenilaians.id', '=', '3')
                            ->get();

        $totalBobot = $data->sum('bobot');

        return view('admin.pages.penilaianadministratif', compact('data', 'totalBobot'));
    }

    public function indexadministratif_belumupt()
    {
        $data = Penilaian::join('kategoripenilaians', 'penilaians.kategori_penilaian_id', '=', 'kategoripenilaians.id')
                            ->select('penilaians.id','kategoripenilaians.kategori_name', 'penilaians.penilaian_name', 'penilaians.bobot')
                            ->where('kategoripenilaians.id', '=', '4')
                            ->get();

        $totalBobot = $data->sum('bobot');

        return view('admin.pages.penilaianadministratif', compact('data', 'totalBobot'));
    }


    public function administratifedit($id)
    {
        $penilaian = Penilaian::findOrFail($id);
        return view('admin.pages.editpenilaianadministratif', compact('penilaian'));
    }

    public function administratifupdate(Request $request, $id)
    {
        $validated = $request->validate([
            'penilaian_name' => 'required|string|max:255',
        ]);

        $penilaian = Penilaian::findOrFail($id);

        $penilaian->update([
            'penilaian_name' => $validated['penilaian_name'],
        ]);

        return redirect()->route('penilaianadministratif')->with([
                'success' => 'Master Penilaian berhasil diperbarui!',
                'error' => 'Master Penilaian gagal diperbarui!',
            ]);
    }
}