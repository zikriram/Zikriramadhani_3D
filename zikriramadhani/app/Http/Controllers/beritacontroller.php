<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class beritacontroller extends Controller
{
    public function index(){
        
        $listBerita=Berita::all(); 
        return view('berita.index' ,compact('listBerita'));
        
    }

    public function show($id){
        $Berita=Berita::find($id);
        return view('berita.show' ,compact('Berita'));
    }

    public function create(){
        return view('berita.create');
    }

    public function store(Request $request){
        $input= $request->all();
        Berita::create($input);

        return redirect(route('berita.index'));
    }
}
