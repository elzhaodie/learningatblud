<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Nilai; // Assuming you have a nilai model

class NilaiController extends BaseController
{
    public function index()
    {
        $nilais = Nilai::all();
        return view('admin.pages.nilai');
    }

}

