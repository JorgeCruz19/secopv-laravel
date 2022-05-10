<?php

namespace App\Http\Controllers\Admin;

use App\Lotification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lotifications = Lotification::all();
        return view('admin.lotification.index', compact('lotifications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.lotification.create', ['lotification' => new Lotification()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'departamento' => 'required',
            'ciudad' => 'required',
            'precio' => 'required',
        ]);
        $lotification = Lotification::create($request->all());
        $lotification->save();

        return redirect()->route('admin.lotification.index')
            ->with('status', 'La Lotificación se ha creado con éxito.');
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
    public function edit(Lotification $lotification)
    {
        return view('admin.lotification.edit', compact(['lotification']));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Lotification $lotification)
    {
        $request->validate([
            'nombre' => 'required',
            'departamento' => 'required',
            'ciudad' => 'required',
            'precio' => 'required',
        ]);

        $lotification->update($request->all());

        return redirect()->route('admin.lotification.index')
            ->with('status', 'La Lotificación se ha actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Lotification $lotification)
    {
        $lotification->delete();

        return redirect()->route('admin.lotification.index')
            ->with('status', 'La Lotificación se ha eliminado con éxito.');
    }
}
