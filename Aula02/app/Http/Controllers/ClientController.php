<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Client;

class ClientController extends Controller
{
    public function create(){
        return view('cliente.create');
    }

    public function store(Request $request){
        Client::create($request->all());
        dd("Cadastrado!");
    }

    public function index(){
        dd(Client::all());
    }
}
