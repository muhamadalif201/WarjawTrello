<?php

namespace App\Http\Controllers;


use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Coba untuk melakukan login
        if (Auth::attempt($request->only('email', 'password'), $request->filled('remember'))) {
            // Login berhasil
            return redirect()->intended('dashboard'); // Ganti dengan rute tujuan Anda
        }

        // Jika login gagal
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }


    


    public function index(Request $request)
    {
        $users = User::where('name','LIKE','%'.$request->search. '%')->orderBy('name','ASC'
        )->simplePaginate(5);
        return view('User.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('User.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'role'=>'required',
        ]);

        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
        ]);

        return redirect()->route('user.homeuser')->with('success','Berhasil Menambahkan data akun');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=User::find($id);
        return view('User.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'password'=>'required|min:6',
            'role'=>'required',
        ]);

        User::where('id',$id)->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt($request->password),
            'role'=>$request->role,
        ]);

        return redirect()->route('user.homeuser')->with('success','Berhasil Mengedit data akun');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        user::where('id',$id)->delete();
        return redirect()->back()->with('success','Berhasil Menghapus Data User');
    }
}
