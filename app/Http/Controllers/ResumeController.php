<?php

namespace App\Http\Controllers;

use App\Models\Sppbj;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class ResumeController extends Controller
{
    public function print($id)
    {
        $data = Sppbj::findOrFail($id);
        $pdf = Pdf::loadView('print.resume.print-resume', compact('data'));
        $filename = 'Resume Kontrak' . str_replace(['/', '\\'], '_', $data->nomor) . '.pdf';
        return $pdf->stream($filename);
    }
}
