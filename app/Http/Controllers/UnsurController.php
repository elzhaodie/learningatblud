<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Unsur;
use App\Penilaian; 
use App\KategoriPenilaian; 


class UnsurController extends BaseController
{
    public function index(Request $request)
    {
        $kategoris = KategoriPenilaian::all();

        // dropdown penilaian (kosong dulu, kecuali kategori dipilih)
        $penilaians = collect();
        if ($request->kategori_id) {
            $penilaians = Penilaian::where('kategori_penilaian_id', $request->kategori_id)->get();
        }

        // query unsur
        $query = Unsur::with('relasiunsurkepenilaian');
        if ($request->kategori_id) {
            $query->whereHas('relasiunsurkepenilaian', function($q) use ($request) {
                $q->where('kategori_penilaian_id', $request->kategori_id);
            });
        }

        if ($request->penilaian_id) {
            $query->where('penilaian_id', $request->penilaian_id);
        }

        // default: kosong jika tidak ada filter, request harus memiliki kategori dan penilaian
        $data = ($request->kategori_id && $request->penilaian_id)
                ? $query->get()
                : collect();

        $totalBobot = ($request->filled('kategori_id') && $request->filled('penilaian_id'))
        ? $data->sum('bobot'): null;

        return view('admin.pages.unsur', compact('data', 'kategoris', 'penilaians', 'totalBobot'));
    }

    public function indextemp()
    {
        $data = Unsur::join('penilaians', 'unsurs.penilaian_id', '=', 'penilaians.id')
                            ->select('unsurs.id','penilaians.penilaian_name', 'unsurs.indikator','unsurs.unsur','unsurs.bobot')
                            ->get();

        return view('admin.pages.unsur', compact('data'));
    }

}