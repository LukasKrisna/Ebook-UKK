<?php

namespace App\Http\Controllers;

use App\Models\Ebook;
use Illuminate\Http\Request;

class EbookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ebooks = Ebook::simplePaginate(3);
        return view('dashboard')->with('ebooks', $ebooks);

        // $ebooks = Ebook::all();
        // $search = Ebook::latest();

        // if (request('search')) {
        //     $ebooks->where('judul', 'like', '%' . request('search') . '%');
        // }
        // $ebooks = Ebook::all()->simplePaginate(3);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->validate([
            'judul'         => 'required|max:150',
            'pengarang'     => 'required|max:100',
            'penerbit'      => 'required|max:100',
            'deskripsi'     => 'required',
            'persediaan'    => 'required|max:11',
            'gambar'        => 'image|file|max:5024'
        ]);

        if ($request->file('gambar')) {
            $input['gambar'] = $request->file('gambar')->store('cover-buku');

            // $request->file('image')->move(public_path('img/products/'), $request->file('image')->getClientOriginalName());
            // $input['gambar'] = 'img/products/' . $request->file('image')->getClientOriginalName();

            // $file = $request->File('img');
            // $ext  = $user->username . "." . $file->clientExtension();
            // $file->storeAs('images/', $ext);
            // $user->image_name = $ext;
        }

        Ebook::create($input);
        return redirect('dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ebook = Ebook::find($id);
        // return $ebook;
        // $ebooks = Ebook::findOrFail($id);

        return view('detail', compact('ebook'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ebooks = Ebook::find($id);
        return view('form_edit', compact('ebooks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $ebooks = Ebook::find($id);
        // $input = $request->all();
        $input = $request->validate([
            'judul'         => 'required|max:150',
            'pengarang'     => 'required|max:100',
            'penerbit'      => 'required|max:100',
            'deskripsi'     => 'required',
            'persediaan'    => 'required|max:11',
            'gambar'        => 'image|file|max:5024'
        ]);

        if ($request->file('gambar')) {
            $input['gambar'] = $request->file('gambar')->store('cover-buku');
        }

        $ebooks->update($input);
        return redirect('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ebook::destroy($id);
        // Ebook::table('ebooks')->where('id', $id)->delete();
        return redirect('dashboard');
    }
}
