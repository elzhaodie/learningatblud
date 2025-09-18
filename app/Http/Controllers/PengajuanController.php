<?php
namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use App\Opd;
use App\Pengajuan;

class PengajuanController extends BaseController
{
    public function index()
    {
        $data = Opd::join('roles', 'opds.role_id', '=', 'roles.id')
                    ->select('*')
                    ->where('opds.id', '=', '1')
                    ->get();

        return view('user.pages.pengajuan',compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'gambaran_umum' => 'required|string|max:255',
            'dok_subs_teknis' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'dok_srt_permohonan' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'dok_srt_sanggup_meningkatkan_kinerja' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'dok_pola_tata_kelola' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'dok_spm' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'dok_renstra' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'dok_lap_audit' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'dok_lapkeu' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
        
        $path1 = $request->file('dok_subs_teknis')->store('uploads', 'public');
        $path2 = $request->file('dok_srt_permohonan')->store('uploads', 'public');
        $path3 = $request->file('dok_srt_sanggup_meningkatkan_kinerja')->store('uploads', 'public');
        $path4 = $request->file('dok_pola_tata_kelola')->store('uploads', 'public');
        $path5 = $request->file('dok_spm')->store('uploads', 'public');
        $path6 = $request->file('dok_renstra')->store('uploads', 'public');
        $path7 = $request->file('dok_lap_audit')->store('uploads', 'public');
        $path8 = $request->file('dok_lapkeu')->store('uploads', 'public');
        
        $pengajuan = Pengajuan::create([
            'opd_id' => '1',
            'gambaran_umum' => $validated['gambaran_umum'],
            'dok_subs_teknis' => $path1,
            'dok_srt_permohonan' => $path2,
            'dok_srt_sanggup_meningkatkan_kinerja' => $path3,
            'dok_pola_tata_kelola' => $path4,
            'dok_spm' => $path5,
            'dok_renstra' => $path6,
            'dok_lap_audit' => $path7,
            'dok_lapkeu' => $path8,
        ]);
        
        // return redirect()->route('pengajuan')   
        return redirect()->route('pengajuan')->with([
                'success' => 'Pengajuan pendirian BLUD berhasil ditambahkan!',
                'error' => 'Pengajuan pendirian BLUD gagal ditambahkan!',
        ]);
    }

}

    