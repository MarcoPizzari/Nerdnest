<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    
public function home(){
    $articles = Article::orderBy('created_at', 'desc')->take(3)->get();
    return view('welcome', compact('articles'));
}

public function __construct(){
    $this->middleware('auth')->except('homepage');
}


public function careers(){
    return view('careers');
}

public function careersSubmit(Request $request){
    $request->validate([
        'role' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

$user = Auth::user();
$role = $request->role;
$email = $request->email;
$message = $request->message;

mail::to('marco.pizzari94@gmail.com')->send(new CareerRequestMail(compact('role','email','message')));

switch($role){
    case 'admin':
    $user->is_admin = NULL;
    break;

    case 'revisor':
    $user->is_revisor = NULL;
    break;

    case 'writer':
    $user->is_writer = NULL;
    break;

}

user->update();
return redirect(route('homepage')->with('message', 'grazie per averci contattato'));

}
}


