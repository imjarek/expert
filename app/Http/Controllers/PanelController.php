<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Block;
use App\Content;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->blocks = Block::all();
    }

    public function index()
    {
        return view('panel.blocks', ['blocks' => $this->blocks]);
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        return view('panel.forms.content_edit', ['content' => $content, 'blocks' => $this->blocks]);
    }

    public function create()
    {
        return view('panel.forms.content_edit', ['blocks' => $this->blocks]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:1000',
            'block_id' => 'required|integer',
            'sys_name' => 'required|string:max:128'
        ]);

        $content = new Content();
        $content->title = $request->get('title');
        $content->content = $request->get('page-content') ?? '';
        $content->block_id = $request->get('block_id');
        $content->sys_name = $request->get('sys_name');
        $content->save();

        return view('panel.forms.content_edit', ['content' => $content, 'blocks' => $this->blocks]);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:1000',
            'page-content' => 'required',
            'block_id' => 'required|integer'
        ]);

        $content = Content::findOrFail($id);
        $content->title = $request->get('title');
        $content->content = $request->get('page-content');
        $content->sys_name = $request->get('sys_name');
        $content->save();

        return view('panel.forms.content_edit', ['content' => $content, 'blocks' => $this->blocks]);
    }
}
