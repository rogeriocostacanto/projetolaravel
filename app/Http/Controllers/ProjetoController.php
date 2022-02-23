<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$curso='técnico em informatica';
        $user_id = auth()->user()->id;
        $projetos = Projeto::where('user_id', $user_id)->paginate(3);
        
        return view('projeto.index', ['projetos' => $projetos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projeto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
       // if($request->arquivo->isValid()) {
       //     $nameFile = $request->autor.'.'.$request->arquivo->extension();
       //     dd($request->arquivo->storeAs('projetos_academicos', $nameFile));
      //  }

      /*        
       $dados = $request->all();
       $dados['user_id'] = auth()->user()->id;

       $projeto = Projeto::create($dados);

       return redirect()->route('projeto.show', ['projeto' => $projeto->id]);*/


       // Handle File Upload
        if($request->hasFile('arquivo')){
            // Get filename with the extension
            $filenameWithExt = $request->file('arquivo')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('arquivo')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore= $filename.'_'.time().'.'.$extension;
            // Upload file
            $path = $request->file('arquivo')->storeAs('public/acervo', $fileNameToStore);
        } else {
            $fileNameToStore = 'nofile.pdf';
        }

        //save in database
        $projeto = Projeto::create([
            'titulo' => $request->titulo,
            'autor' => $request->autor,
            'data_documento' => $request->data_documento,
            'curso' => $request->curso,
            'descricao' => $request->descricao,
            'user_id' => auth()->user()->id,
            'arquivo' => $fileNameToStore
        ]);

        $request->session()->flash(
            'mensagem',
            "Projeto {$projeto->id} criado com sucesso {$projeto->titulo}"
        );
        return  redirect()->route('projeto.show',['projeto' => $projeto->id]);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Projeto $projeto)
    {
        return view('projeto.show', ['projeto' => $projeto]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Projeto $projeto, Request $request)
    {
        $user_id = auth()->user()->id;
        
        if($projeto->user_id == $user_id) {

            //remove o arquivo antigo caso um novo arquivo tenha sido enviado no request
            if($request->hasFile('arquivo')) {
                Storage::disk('public')->delete($projeto->arquivo);
            }
            return view('projeto.edit', ['projeto'=> $projeto]);
        }

        return view('acesso-negado');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Projeto $projeto)
    {
        if(!$projeto->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }

        $projeto->update($request->all());
        return redirect()->route('projeto.show',['projeto' => $projeto->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Projeto  $projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Projeto $projeto)
    {
        if(!$projeto->user_id == auth()->user()->id) {
            return view('acesso-negado');
        }
        $projeto->delete(); 

        return redirect()->route('projeto.index');
    }
}
