<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create()
    {
        $user = auth()->user();
        $lastClient = $user->clients()->orderBy('id', 'desc')->first();
        $nextId = $lastClient ? $lastClient->id + 1 : 1;

        return view('clients.create', ['nextId' => $nextId]);
    }

    public function store(Request $request)
    {
        $client = new Client();
        $user = auth()->user();

        $client->name = $request->name;
        $client->user_id = $user->id;
        $client->document = $request->document;
        $client->email = $request->email;
        $client->phone = $request->phone;
        $client->address = $request->address;
        $client->number_address = $request->number;
        $client->neighborhood = $request->neighborhood;
        $client->city = $request->city;
        $client->uf = $request->uf;
        $client->cep = $request->cep;
        $client->save();

        return redirect('/dashboard');
    }


    public function list()
    {
        $user = auth()->user();

        $clients = Client::Where('user_id', $user->id)->get();

        return view('clients.list', compact('clients'));
    }
}
