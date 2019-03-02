<?php

namespace App\Http\Controllers;

use DB;
use App\User;
use App\Messages;
use Carbon\Carbon;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class MessagesController extends Controller
{
    public function __construct(){
         $this->middleware('auth', ['except' => ['create', 'store']]);
    }

    public function index()
    {
        $messages= Messages::all();
        $user = User::find(auth()->id());
        return view('messages.index', compact(['messages', 'user']));
    }

    public function create()
    {
        return view('messages.create');
    }

    public function store(Request $request)
    {
        Messages::create($request->all());
        return redirect()->route('messages.create')->with('info', 'Hemos recibido su mensaje');
    }

    public function show($id)
    {
        $message = Messages::findOrFail($id);
        return view('messages.show', compact('message'));
    }

    public function edit(Request $request ,$id)
    {
        $message = Messages::findOrFail($id);
        $user = User::find(auth()->id());
        return view('messages.edit', compact(['message', 'user']));
    }

    public function update(Request $request, $id)
    {
        $message = Messages::find($id);
        $message->update($request->all());

        return redirect()->route('messages.index');

    }

    public function destroy($id)
    {
        $message = Messages::find($id)->delete();

        return redirect()->route('messages.index');
    }
}
