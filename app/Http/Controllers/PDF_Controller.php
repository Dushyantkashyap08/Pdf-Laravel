<?php

namespace App\Http\Controllers;
use TCPDF;
use Illuminate\Http\Request;
use App\Models\user_data;
class PDF_Controller extends Controller
{
    public function index(){
        $names=user_data::all();
        return view('pdf',compact('names'));
    }

    public function generatePDF(Request $request){
        $data=user_data::all();
        $pdf=new TCPDF();
        $pdf->AddPage();
        $pdf->setTitle('user_data');
        $pdf->SetFont('dejavusans', 12);//optional
        // Add column headings
        $pdf->Cell(50, 10, 'Id', 1);
        $pdf->Cell(50, 10, 'Name', 1);
        $pdf->Cell(50, 10, 'Email', 1);
        $pdf->Ln(); 

        foreach ($data as $row) {
            $pdf->Cell(50, 10, $row->id, 1);
            $pdf->Cell(50, 10, $row->name, 1);
            $pdf->Cell(50, 10, $row->email, 1);
            $pdf->Ln(); 
        }
        return $pdf->Output('user_data.pdf','I');
    }
}