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
        $client->save();

        return redirect('/dashboard');
    }
}
