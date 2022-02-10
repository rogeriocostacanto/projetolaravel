<?php

namespace App\Http\Controllers;

use App\Models\Ideia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IdeiaController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
            $id = Auth::user()->id;
            $name = Auth::user()->name;
            $email = Auth::user()->email;

            return "ID: $id | Nome: $name | Email: $email";
        } else {
            return 'Você não está logado no sistema';
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ideia.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ideia = Ideia::create($request->all());
        return redirect()->route('ideia.show', ['ideia'->$ideia->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ideia  $ideia
     * @return \Illuminate\Http\Response
     */
    public function show(Ideia $ideia)
    {
        dd($ideia);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ideia  $ideia
     * @return \Illuminate\Http\Response
     */
    public function edit(Ideia $ideia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ideia  $ideia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ideia $ideia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ideia  $ideia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ideia $ideia)
    {
        //
    }
}
