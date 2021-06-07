<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileController extends Controller
{
    public function create()
    {
        return view('picture');
    }

    public function store(Request $request)
    {
        $this-&gt;validate($request, [
            'filenames' = &gt; 'required',
            'filenames.*' = &gt; 'mimes:doc,pdf,docx,zip'
        ]);

        if($request-&gt;hasfile('filenames'))
        {
            foreach($request-&gt;file('filenames') as $file)
            {
                $name = time().'.'.$file-&gt;extension();
                $file-&gt;move(public_path().'/files/', $name);
                $data[] = $name;
            }
        }

        $file= new File();
        $file-&gt;filenames=json_encode($data);
        $file-&gt;save();

        return back()-&gt;with('success', 'Data Your files has been successfully added');
    }
}
