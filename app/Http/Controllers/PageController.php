<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller

{

    public function index () {

        $pages = [];
        $files =  \File::files(resource_path('views/pages'));
        foreach ($files as $file) {
            $fileName = substr(pathinfo($file)['filename'], 0, strpos(pathinfo($file)['filename'], '.'));
            $pages[] = array(
                'filename' => $fileName,
                'page_link' => env('APP_URL') . '/pages/' . $fileName,
                'edit_link' =>  env('APP_URL') . '/panel/pages/edit/' . $fileName,
            );
        }

        return view('panel/pages', ['pages' => $pages]);
    }

    public function show($page){
        if (view()->exists("pages.$page")) {
            return view("page-box", ['page' => $page]);
        }
        else
            throw new \Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
    }
    public function edit($page){
        if (!view()->exists("pages.$page")) {
            return view("panel.main")->withErrors(['Страница не существует']);
        }
        $content = file_get_contents(resource_path("views/pages/$page.blade.php"));
        return view('panel.forms.page_edit', ['page' => $page, 'content' => $content]);
    }

    public function create(){
        return view('panel.forms.page_edit');
    }

    public function store($page, Request $request){
        $request->validate(['page-content' => 'required']);

        if (!view()->exists("pages.$page")) {
            throw new \Exception('Страница не найдена');
        }
        $file = resource_path('/views/pages/' . $page . '.blade.php');
        $content = $request->input('content');
        file_put_contents($file, $content);
        return view('panel.forms.page_edit', [
            'page' => $page,
            'content' => $content,
            'message' => 'Страница обновлена. <a href="'. env('APP_URL') . '/pages/' . $page . '">Посмотреть</a>'
        ]);

    }
}
