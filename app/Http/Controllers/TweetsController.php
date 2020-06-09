<?php

namespace App\Http\Controllers;

use App\Tweet;
use Illuminate\Routing\Redirector;

class TweetsController extends Controller {

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $tweets = Tweet::latest()->get();

        return view('tweets.index', [
            'tweets' => auth()->user()->timeline()
        ]);
    }


    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|Redirector
     */
    public function store()
    {
        $attributes = request()->validate(['body' => 'required | max:255']);
        Tweet::create([
            'user_id' => auth()->id(),
            'body'    => $attributes['body']
        ]);

        return redirect()->route('home');
    }
}
