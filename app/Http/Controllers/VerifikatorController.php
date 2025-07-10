<?php

namespace App\Http\Controllers;

use App\Models\Sppbj;
use Illuminate\Http\Request;

class VerifikatorController extends Controller
{
    public function index()
    {
        return view('verifikator.dashboard');
    }

    public function index_pengajuan_sp2d()
    {
        $data = Sppbj::WhereIn('status',[2])->get();

        return view('spp-bj.index-verifikator', compact('data'));

    }

}
