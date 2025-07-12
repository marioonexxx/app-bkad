<?php

namespace App\Http\Controllers;

use App\Models\Opd;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserManajemenController extends Controller
{
    public function index()
    {
        $dataOPD = Opd::all();
        $data = User::whereIn('role', [5, 6])->get();
        return view('manajemen-user.index', compact('data', 'dataOPD'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'opd_id' => 'required|exists:opd,id',
            'nip' => 'required|unique:users,nip',
            'name' => 'required',
            'email' => 'required|email|unique:users,email',
            'phone' => 'required',
            'nama_jabatan' => 'required',
            'role' => 'required|in:5,6',
            'password' => 'required|min:6',
        ]);

        // ❗ Cek apakah sudah ada role yang sama dalam OPD yang sama
        $duplicateRoleInOpd = User::where('opd_id', $request->opd_id)
            ->where('role', $request->role)
            ->exists();

        if ($duplicateRoleInOpd) {
            return back()->withErrors(['duplicate_role' => 'Sudah ada pengguna dengan role ini dalam OPD tersebut.']);
        }

        User::create([
            ...$request->except('password'),
            'password' => Hash::make($request->password),
        ]);

        return back()->with('success', 'Pengguna berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return back()->with('success', 'Pengguna berhasil dihapus.');
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'opd_id' => 'required|exists:opd,id',
            'nip' => 'required|unique:users,nip,' . $id,
            'name' => 'required',
            'email' => 'required|email|unique:users,email,' . $id,
            'phone' => 'required',
            'nama_jabatan' => 'required',
            'role' => 'required|in:5,6',
            'password' => 'nullable|min:6',
        ]);

        // Cek duplikat role di OPD lain (kecuali user ini)
        $exists = User::where('opd_id', $request->opd_id)
            ->where('role', $request->role)
            ->where('id', '!=', $id)
            ->exists();

        if ($exists) {
            return back()->withErrors(['duplicate_role' => 'Role ini sudah terdaftar di OPD tersebut.']);
        }

        $user = User::findOrFail($id);
        $data = $request->except('password');

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return back()->with('success', 'Pengguna berhasil diperbarui.');
    }
}
