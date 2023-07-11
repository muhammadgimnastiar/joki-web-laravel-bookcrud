<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis;


class BookJenisController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $jenis = Jenis::get();
        return view('jenis.index', compact('jenis'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('jenis.create');
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
        $this->validate($request, [
            'jenis_buku' => 'required|string'
        ]);

        $data = $request->only('jenis_buku');
        $post = Jenis::create($data);
        return redirect()->route('jenis.index')->with('success', 'Berhasil Menyimpan Identitas Buku : '.$request->get('nama_identitas'));
        // return view('jenis.create', compact('jenis'));

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
        $jenis = Jenis::findOrFail($id);
        return view('jenis.edit', compact('jenis'));

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
        $jenis = Jenis::findOrFail($id);
        $this->validate($request,[
            'jenis_buku' => 'required|string|max:255' . $jenis->id
        ]);

        $data = $request->only('jenis_buku');
        $jenis->update($data);
        return redirect()->route('jenis.index')->with('success', 'Berhasil update identitas : '. $request->get('jenis_buku'));

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
        $jenis = Jenis::find($id);
        $jenis->delete();
        return redirect()->route('jenis.index')-with('success', "berhasil delete ");
        return redirect()->route('indentity.index');
    }
}
