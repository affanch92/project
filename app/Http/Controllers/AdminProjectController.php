<?php

namespace App\Http\Controllers;

use App\Models\Projects;
use Barryvdh\DomPDF\Facade\Pdf;

class AdminProjectController extends Controller
{
    //

    public function index()
    {
        $projects = Projects::latest()->get();

        return view('admin.projects.index', compact('projects'));
    }

    public function cetakPdf()
    {
        $projects = Projects::latest()->get();

        $pdf = Pdf::loadView('admin.projects.pdf', compact('projects'));

        return $pdf->download('projects.pdf'); // ini untuk mendownload file PDF

        // return $pdf->stream('projects.pdf'); // ini untuk menampilkan file PDF di browser
    }

    public function cetakPdfById($id)
    {
        $projects = Projects::findOrFail($id);

        $pdf = Pdf::loadView('admin.projects.pdf-by-id', compact('projects'));

        // return $pdf->download('projects.pdf'); // ini untuk mendownload file PDF

        return $pdf->stream('projects.pdf'); // ini untuk menampilkan file PDF di browser
    }
}
