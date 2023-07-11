<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Identity;

class BookIdentityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $identity = Identity::get();
        return view('identity.index', compact('identity'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        return view('identity.create');
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
            'nama_identity' => 'required|string'
        ]);

        $data = $request->only('nama_identity');
        $post = Identity::create($data);
        return redirect()->route('identity.index')->with('success', 'Berhasil Menyimpan Identitas Buku : '.$request->get('nama_identitas'));
        // return view('identity.create', compact('identity'));

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
        $identity = Identity::findOrFail($id);
        return view('identity.edit', compact('identity'));

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
        $identity = Identity::findOrFail($id);
        $this->validate($request,[
            'nama_identity' => 'required|string|max:255' . $identity->id
        ]);

        $data = $request->only('nama_identity');
        $identity->update($data);
        return redirect()->route('identity.index')->with('success', 'Berhasil update identitas : '. $request->get('nama_identity'));

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
        $identity = Identity::find($id);
        $identity->delete();
        return redirect()->route('identity.index')-with('success', "berhasil delete ");
        return redirect()->route('indentity.index');
    }
}
