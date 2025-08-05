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
        //compact bidangs untuk membuatnya menjadi array yang bisa diakses di view
        return view('admin.pages.insertbidang', compact('bidangs'));
    }
    
    public function store(Request $request)
    {
        $validated = $request->validate([
            'bidang_name' => 'required|string|max:255',
            'created_at' => now()
        ]);

        Bidang::create($validated);

        return redirect()->back()->with('success', 'Bidang berhasil ditambahkan');
    }
}
