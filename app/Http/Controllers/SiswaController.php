<?php

namespace App\Http\Controllers;

use App\Kelas;
use App\Siswa;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $a = Siswa::all();
        return view('Siswa.index',compact('a'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $a = Siswa::all();
        $b = Kelas::all();
        return view('Siswa.create',compact('a','b'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $a = $request->all();
        Siswa::create($a);
        return redirect('Siswa');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = Siswa::findOrFail($id);
        return view('Siswa.show',compact('show'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $edit = Siswa::findOrFail($id);
        $b = Kelas::all();
        return view('Siswa.edit',[
            'edit'=>$edit,
            'b'=>$b
        ]);
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
        $a = $request->all();
        $b = Siswa::findOrFail($id);
        $b->update($a);
        return redirect('Siswa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $a = Siswa::findOrFail($id);
        $a->delete();
        return redirect('Siswa');
    }
}
