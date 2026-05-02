<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    // public function index(Request $request)
    // {
    //     $search = $request->query('q');

    //     $books = DB::table('library_system.book')
    //         ->when($search, function ($query) use ($search) {
    //             $query->where('title', 'ILIKE', "%$search%")
    //                   ->orWhere('author', 'ILIKE', "%$search%");
    //         })
    //         ->orderByDesc('id')
    //         // ->get();
    //         ->paginate(2); // ✅ FIXED HERE
            

    //     return view('books.library', compact('books'));
    // }
    public function index(Request $request)
{
    $search = $request->query('q');
    $category = $request->query('category');

    $books = DB::table('library_system.book')
        ->when($search, function ($query) use ($search) {
            $query->where(function ($q) use ($search) {
                $q->where('title', 'ILIKE', "%$search%")
                  ->orWhere('author', 'ILIKE', "%$search%");
            });
        })

        // ✅ CATEGORY FILTER
        ->when($category && $category != 'all', function ($query) use ($category) {
            $query->where('category', $category);
        })

        ->orderByDesc('id')
        ->paginate(2)
        ->appends($request->all()); // IMPORTANT for pagination + filters

    return view('books.library', compact('books', 'search', 'category'));
}
}