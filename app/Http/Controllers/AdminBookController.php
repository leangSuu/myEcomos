<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class AdminBookController extends Controller
{
    public function index()
{
    $books = DB::table('library_system.book')
        ->orderByDesc('id')
        ->get();

    return view('admin.books.index', compact('books'));
}

    public function create()
    {
        return view('admin.books.create');
    }

    public function store(Request $request)
    {
        $img = null;
        $pdf = null;

        if ($request->hasFile('book_img')) {
            $img = time().'_'.$request->file('book_img')->getClientOriginalName();
            $request->file('book_img')->move(public_path('uploads'), $img);
        }

        if ($request->hasFile('book_file')) {
            $pdf = time().'_'.$request->file('book_file')->getClientOriginalName();
            $request->file('book_file')->move(public_path('uploads'), $pdf);
        }

        DB::table('library_system.book')->insert([
            'title' => $request->book_title,
            'author' => $request->author_name,
            'ibsn' => $request->book_number,
            'category' => $request->book_genre,
            'publish_date' => $request->publish_date,
            'publisher' => $request->publisher,
            'descriptions' => $request->description,
            'tag' => $request->tag,
            'img' => $img,
            'pdf' => $pdf,
        ]);

        return redirect()->route('admin.books.index');
    }

    public function edit($id)
    {
        $book = DB::table('library_system.book')->where('id', $id)->first();
        return view('admin.books.edit', compact('book'));
    }

    public function update(Request $request, $id)
    {
        DB::table('library_system.book')
            ->where('id', $id)
            ->update([
                'title' => $request->book_title,
                'author' => $request->author_name,
                'ibsn' => $request->book_number,
                'category' => $request->book_genre,
                'publish_date' => $request->publish_date,
                'publisher' => $request->publisher,
                'descriptions' => $request->description,
                'tag' => $request->tag,
            ]);

        return redirect()->route('admin.books.index');
    }

    public function destroy($id)
    {
        DB::table('library_system.book')->where('id', $id)->delete();
        return back();
    }
}