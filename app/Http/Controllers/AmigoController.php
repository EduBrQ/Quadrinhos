<?php namespace App\Http\Controllers;

use App\Amigo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AmigoController extends Controller
{
    public function index()
    {
        $amigos = Amigo::where('id_user', Auth::user()->id)->get();


        return view('amigos.index', compact('amigos'));
    }

    public function create()
    {
        return view('amigos.create');
    }

    public function store(Request $request)
    {
        $amigo = new Amigo();

        $amigo->create($request->all());

        return redirect()->to('/amigos');
    }

    public function edit($id)
    {
        $amigos = Amigo::findOrFail($id);


        return view('amigos.edit', compact('amigos'));
    }

    public function update($id, Request $request)
    {
        $amigo = Amigo::findOrFail($id);

        $amigo->update($request->all());

        return redirect()->to('/amigos');
    }

    public function delete($id)
    {
        Amigo::findOrFail($id)->delete();

        return redirect()->back();
    }
}