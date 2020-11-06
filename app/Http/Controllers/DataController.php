<?php

namespace App\Http\Controllers;

use App\Data;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use DB;
class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function pdf()
    {
        $fpdf = new Fpdf;
        $fpdf->AddPage("L", ['100', '100']);
        $fpdf->SetFont('Times', 'B', 11);

        $fpdf->Text(10, 10, "Hello FPDF");       
         
        $fpdf->Output();
        exit;
    }
    public function index()
    {
        $data = \App\Data::all();
        return view('listbarang',['data' =>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        \App\Data::create($request->all());
        return redirect('/data')->with('sukses','Sukses Input' );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = \App\Data::find($id);
        // dd($data);
        return view('editbarang',['data' =>$data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = \App\Data::find($id);
        $data->update($request->all());
        // $data = DB::table('barang')
        //       ->where('id', $id)
        //       ->update(['nama' => 'sampo']);
        return redirect('/data')->with('sukses','Sukses Edit' );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Data  $data
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $data = \App\Data::find($id);
        $data->delete($data);
        return redirect('/data')->with('sukses','Sukses Hapus' );


    }

    public function master($value='')
    {
        $data = \App\Data::all();
        return view('content',['data' =>$data]);
    }
}
