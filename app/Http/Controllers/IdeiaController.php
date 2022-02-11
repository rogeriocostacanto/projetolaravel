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
        $ideias = Ideia::where('user_id', $user_id)->paginate(3);
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
    public function edit($id)
    {
        $ideia = Ideia::findOrFail($id);

        $user_id = auth()->user()->id;

        if($ideia->user_id == $user_id) {
            return view('ideia.edit', ['ideia' =>$ideia]);
        } else {
            return view('acesso-negado');                                                                                           
        }

        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Ideia  $ideia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //print_r($request->all());
        //echo '<hr>';
        $ideia = Ideia::findOrFail($id);
        $user_id = auth()->user()->id;                                                                                                 
        
        if($ideia->user_id == $user_id) {
        
         $ideia->update($request->all());
         return redirect()->route('ideia.show', [$ideia]);
         
        } else {
            return view('acesso-negado');
        }    
        //print_r($ideia->getAttributes());
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
