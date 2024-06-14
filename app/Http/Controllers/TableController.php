<?php

namespace App\Http\Controllers;

use PDF;
use App\Models\Table;
use Illuminate\Http\Request;

class TableController extends Controller
{
    public function index()
    {
        return view('admin.table');
    }

    public function exportPdf()
    {
        $tables = Table::all(); // Fetch all records from the Table model

        $pdf = PDF::loadView('table.export_pdf', compact('tables')); // Pass the data to the view

        return $pdf->download('tables.pdf'); // Download the generated PDF
    }
}
