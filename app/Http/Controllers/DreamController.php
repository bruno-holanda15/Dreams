<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Dream;

class DreamController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function create()
    {
        return view('dreams.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'titulo' => 'required|min:2|max:80',
            'descricao' => 'required|min:5|max:250',
        ]);

        if ($validator->fails()) {
            return redirect('create')->withErrors($validator->errors());
        }

        $dream = new Dream();
        $dream->titulo = $request->titulo;
        $dream->descricao = $request->descricao;
        $dream->save();

        return redirect('home')->with('dreamsSent', 'Sonhos inseridos com sucesso.');
    }
}
