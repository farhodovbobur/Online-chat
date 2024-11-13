<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index(): Application|Factory|View
    {
        $me = auth()->user();
        $users = User::all();

        return view('home', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'message' => ['required', 'string'],
            'sender_id' => ['required', 'integer', 'in:' . Auth::id()],
            'receiver_id' => ['required', 'integer', 'exists:' . User::class . ',id'],
        ]);

        $message = Message::create($validate);

        return $this->show($request->receiver_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::query()->find($id);

        $action = route('user', $id);

        return view('home', ['user' => $user, 'action' => $action]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
