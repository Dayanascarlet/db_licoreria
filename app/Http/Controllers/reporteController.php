<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reporte;
use App\factura;
use DB;
use PDF;

class reporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         $data=$request->all();
        //dd($data);
        $desde=date('Y-m-d');
        $hasta=date('Y-m-d');
        if(isset($data['desde'])){
        $desde=$data['desde'];
        $hasta=$data['hasta'];
    }
       
        
         //boton del pdf
        if(isset($data['btn_pdf'])){ 
       $data=['reporte'=>$reporte];
       $pdf = PDF::loadView('reporte',$data);
        return $pdf->stream('reporte.pdf');
           }

        
        return view('reporte.index')
        ->with('desde',$desde)
        ->with('hasta',$hasta)
        ;
    }
    public function search (request $request){
      $data=$request->all();
      dd($data);
       $producto=producto::all();
       $cliente=cliente::all();
       $proveedor=proveedor::all();
       $cli_id="";
        $pro_id="";
       $sql_cli="";
       $sql_pro="";
        $data=$request->all();

        if(isset($data['cli_id'])){
            $cli_id=$data['cli_id'];
            $sql_cli="AND se.cli_id=$cli_id ";
        }
        if(isset($data['pro_id'])){
            $pro_id=$data['pro_id'];
            $sql_pro="AND se.pro_id=$pro_id ";
        }
       
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}