<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function loginPage()
    {
        return view('admin.login');
    }

    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'username' => 'required',
    //         'password' => 'required'
    //     ]);

    //     $user = DB::table('library_system.admin')
    //         ->where('username', $request->username)
    //         ->first();

    //     if ($user && $request->password === $user->password) {
    //         session(['admin' => $user->username]);
    //         return redirect('/admin/dashboard');
    //     }

    //     return back()->with('error', 'Invalid login');
    // }


    public function login(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        $user = DB::table('library_system.admin')
            ->where('username', $request->username)
            ->first();

        // ✅ FIX HERE (HASH CHECK)
        if ($user && Hash::check($request->password, $user->password)) {

            session(['admin' => $user->username]);

            return redirect('/admin/dashboard');
        }

        return back()->with('error', 'Invalid login');
    }

    // public function dashboard()
    // {
    //     if (!session()->has('admin')) {
    //         return redirect('/admin/login');
    //     }

    //     return view('admin.dashboard');
    // }


    public function dashboard()
    {
        if (!session()->has('admin')) {
            return redirect('/admin/login');
        }

        $totalBooks = DB::table('library_system.book')->count();

        $books = DB::table('library_system.book')
            ->orderByDesc('id')
            ->get();

        return view('admin.dashboard', compact('totalBooks', 'books'));
    }

    // public function logout()
    // {
    //     session()->forget('admin');
    //     return redirect('/admin/login');
    // }
   public function logout(Request $request)
{
    $request->session()->forget('admin'); // remove admin session
    $request->session()->invalidate(); // destroy session
    $request->session()->regenerateToken(); // security

    return redirect('/'); // go home
}
}
