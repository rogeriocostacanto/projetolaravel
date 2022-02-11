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
        $user_id = auth()->user()->id;
        $ideias = Ideia::where('user_id', $user_id)->get();
        return view('ideia.index', ['ideias' => $ideias]);
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
        $dados = $request->all('nome', 'tipo', 'descricao');
        $dados['user_id'] = auth()->user()->id;

        $ideia = Ideia::create($dados);

        //$destinario = auth()->user()->email; //e-mail do usuário logado (autenticado)
        //Mail::to($destinario)->send(new NovaTarefaMail($ideia));

        return redirect()->route('ideia.show', [$ideia]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ideia  $ideia
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $ideia = Ideia::findOrFail($id);
        return view('ideia.show', ['ideia' => $ideia]);
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
