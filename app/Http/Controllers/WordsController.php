<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Word;

class WordsController extends Controller
{
    public function index()
    {
        $words = word::all();

        return view('words.index', compact('words'));
    }
    public function create()
    {
        return view('words.create');
    }
    public function store()
    {
        $word = new Word();

        $word->word = request('word');
        $word->clue1 = request('clue1');
        $word->clue2 = request('clue2');
        $word->clue3 = request('clue3');
        $word->clue4 = request('clue4');
        $word->clue5 = request('clue5');

        $word->save();

        return redirect('/words');
    }
}
