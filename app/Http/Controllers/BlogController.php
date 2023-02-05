<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('admin.blog.index');
    }

    public function create(Request $request)
    {
        return $request->all();
    }

    public function manage()
    {
        return view('admin.blog.manage');
    }
    public function edit()
    {
        return view('admin.blog.edit');
    }

    public function update(Request $request)
    {
        $request->all();
    }

    public function delete($id)
    {
        return $id;
    }
}
