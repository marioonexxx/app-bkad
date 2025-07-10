<?php

namespace App\Http\Controllers;

use App\Models\Sppbj;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SppBjController extends Controller
{
    public function index()
    {
        $data = Sppbj::all();
        return view('spp-bj.index', compact('data'));
    }
    public function index_ppk()
    {
        $data = Sppbj::whereIn('status', [1])->get();
        return view('spp-bj.index-ppk', compact('data'));
    }
    public function index_pengajuan_sp2d()
    {
        $data = Sppbj::whereIn('status', [2])->get();
        return view('spp-bj.index-ppksp2d', compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nomor' => 'required|string|max:255',
            'kontrak_nomor' => 'required|string|max:255',
            'kontrak_tgl' => 'required|date',
            'spmk_nomor' => 'nullable|string|max:255',
            'spmk_tgl' => 'nullable|date',
            'sppbj_nomor' => 'nullable|string|max:255',
            'sppbj_tgl' => 'nullable|date',
            'perusahaan_nama' => 'nullable|string|max:255',
            'perusahaan_alamat' => 'nullable|string|max:255',
            'perusahaan_bank' => 'nullable|string|max:255',
            'kontrak_nilai' => 'nullable|numeric',
            'keterangan' => 'nullable|string',
            'waktu_pelaksanaan' => 'nullable|integer',
            'tgl_penyelesaian' => 'nullable|date',

            // file validations
            'file_kontrak' => 'nullable|file|mimes:pdf|max:5120',
            'file_spmk' => 'nullable|file|mimes:pdf|max:5120',
            'file_sppbj' => 'nullable|file|mimes:pdf|max:5120',
            'file_bap' => 'nullable|file|mimes:pdf|max:5120',
            'file_ba_pemeriksaan' => 'nullable|file|mimes:pdf|max:5120',
            'file_lap_kemajuan' => 'nullable|file|mimes:pdf|max:5120',
            'file_dokumentasi' => 'nullable|file|mimes:pdf|max:5120',

            'status' => '1',
        ]);

        // Handle upload file satu-satu
        if ($request->hasFile('file_kontrak')) {
            $validated['file_kontrak'] = $request->file('file_kontrak')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_spmk')) {
            $validated['file_spmk'] = $request->file('file_spmk')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_sppbj')) {
            $validated['file_sppbj'] = $request->file('file_sppbj')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_bap')) {
            $validated['file_bap'] = $request->file('file_bap')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_ba_pemeriksaan')) {
            $validated['file_ba_pemeriksaan'] = $request->file('file_ba_pemeriksaan')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_lap_kemajuan')) {
            $validated['file_lap_kemajuan'] = $request->file('file_lap_kemajuan')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_dokumentasi')) {
            $validated['file_dokumentasi'] = $request->file('file_dokumentasi')->store('sppbj', 'public');
        }

        // Simpan ke DB
        Sppbj::create($validated);
        return redirect()->back()->with('success', 'Data berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {

        $validated = $request->validate([
            'nomor' => 'required|string|max:255',
            'kontrak_nomor' => 'required|string|max:255',
            'kontrak_tgl' => 'required|date',
            'spmk_nomor' => 'nullable|string|max:255',
            'spmk_tgl' => 'nullable|date',
            'sppbj_nomor' => 'nullable|string|max:255',
            'sppbj_tgl' => 'nullable|date',
            'perusahaan_nama' => 'nullable|string|max:255',
            'perusahaan_alamat' => 'nullable|string|max:255',
            'perusahaan_bank' => 'nullable|string|max:255',
            'kontrak_nilai' => 'nullable|numeric',
            'keterangan' => 'nullable|string',
            'waktu_pelaksanaan' => 'nullable|integer',
            'tgl_penyelesaian' => 'nullable|date',


            // file validations
            'file_kontrak' => 'nullable|file|mimes:pdf|max:5120',
            'file_spmk' => 'nullable|file|mimes:pdf|max:5120',
            'file_sppbj' => 'nullable|file|mimes:pdf|max:5120',
            'file_bap' => 'nullable|file|mimes:pdf|max:5120',
            'file_ba_pemeriksaan' => 'nullable|file|mimes:pdf|max:5120',
            'file_lap_kemajuan' => 'nullable|file|mimes:pdf|max:5120',
            'file_dokumentasi' => 'nullable|file|mimes:pdf|max:5120',

        ]);

        $sppbj = Sppbj::findOrFail($id);

        // Handle upload file satu-satu
        if ($request->hasFile('file_kontrak')) {
            $validated['file_kontrak'] = $request->file('file_kontrak')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_spmk')) {
            $validated['file_spmk'] = $request->file('file_spmk')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_sppbj')) {
            $validated['file_sppbj'] = $request->file('file_sppbj')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_bap')) {
            $validated['file_bap'] = $request->file('file_bap')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_ba_pemeriksaan')) {
            $validated['file_ba_pemeriksaan'] = $request->file('file_ba_pemeriksaan')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_lap_kemajuan')) {
            $validated['file_lap_kemajuan'] = $request->file('file_lap_kemajuan')->store('sppbj', 'public');
        }
        if ($request->hasFile('file_dokumentasi')) {
            $validated['file_dokumentasi'] = $request->file('file_dokumentasi')->store('sppbj', 'public');
        }

        // Set status = 1
        $validated['status'] = 1;


        // Update data
        $sppbj->update($validated);

        return redirect()->back()->with('success', 'Data berhasil diperbarui.');
    }

    public function destroy($id)
    {

        $data = Sppbj::findOrFail($id);

        // Hapus semua file PDF jika ada
        if ($data->file_kontrak) {
            Storage::disk('public')->delete($data->file_kontrak);
        }
        if ($data->file_spmk) {
            Storage::disk('public')->delete($data->file_spmk);
        }
        if ($data->file_sppbj) {
            Storage::disk('public')->delete($data->file_sppbj);
        }
        if ($data->file_bap) {
            Storage::disk('public')->delete($data->file_bap);
        }
        if ($data->file_ba_pemeriksaan) {
            Storage::disk('public')->delete($data->file_ba_pemeriksaan);
        }
        if ($data->file_lap_kemajuan) {
            Storage::disk('public')->delete($data->file_lap_kemajuan);
        }
        if ($data->file_dokumentasi) {
            Storage::disk('public')->delete($data->file_dokumentasi);
        }

        // Hapus data dari database
        $data->delete();

        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }

    public function reject(Request $request, $id)
    {
        $request->validate([
            'notes' => 'required|string|max:1000',
        ]);

        $sppbj = Sppbj::findOrFail($id);

        $sppbj->update([
            'status' => 5, // status 4 = ditolak
            'notes' => $request->alasan
        ]);

        return redirect()->back()->with('success', 'SPP berhasil ditolak.');
    }

    public function create_spm(Request $request, $id)
    {
        $request->validate([
            'spm_nomor' => 'required|string|max:255',
            'spm_tgl' => 'required|date',
            'file_spm' => 'required|file|mimes:pdf|max:5120',
        ]);

        $sppbj = Sppbj::findOrFail($id);

        $sppbj->spm_nomor = $request->spm_nomor;
        $sppbj->spm_tgl = $request->spm_tgl;
        $sppbj->status = 2; // <- Tambahan update status

        if ($request->hasFile('file_spm')) {
            $path = $request->file('file_spm')->store('sppbj', 'public');
            $sppbj->file_spm = $path;
        }

        $sppbj->save(); // <- pastikan ini ada

        return redirect()->back()->with('success', 'Data berhasil dibuat.');
    }
}
