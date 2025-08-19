<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Unsur;
use App\Penilaian; // Assuming you have a penilaian model

class UnsurController extends BaseController
{
    public function index()
    {
        $data = Unsur::join('penilaians', 'unsurs.penilaian_id', '=', 'penilaians.id')
                            ->select('unsurs.id','penilaians.penilaian_name', 'unsurs.indikator','unsurs.unsur','unsurs.bobot')
                            ->get();

        return view('admin.pages.unsur', compact('data'));
    }

}