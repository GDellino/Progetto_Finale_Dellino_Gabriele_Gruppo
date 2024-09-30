<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Article;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class RevisorController extends Controller
{
    public function index(){
        $article_to_check=Article::where('is_accepted',null)->first();
        return view('revisor.index',compact('article_to_check'));
    }

    public function accept(Article $article){
        $article->setAccepted(true);
        return redirect()
        ->back()->with('message', __('ui.articleAccept') . " $article->title");
    }

    public function reject(Article $article){
        $article->setAccepted(false);
        return redirect()
        ->back()->with('message',__('ui.articleReject') . " $article->title");
    }

    public function becomeRevisor(Request $request){
        $user = Auth::user();
        $body = $request->body;
        Mail::to('admin@presto.it')->send(new BecomeRevisor($user, $body));
        return redirect()->route('homepage')->with('message', __('ui.revisorOK'));
    }

    public function makeRevisor(User $user){
        Artisan::call('app:make-user-revisor',['email'=>$user->email]);
        return redirect()->back();
    }
}
