<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $pages = Page::all();
        return view('pages.index', ['pages' => $pages->toArray()]);
    }

    public function create()
    {
        return view('pages.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body'  => 'required',
        ]);

        $page = Page::create(
            [
                'title' => request('title'),
                'body' => request('body')
            ]
        );

        return redirect('/pages');
    }

}
