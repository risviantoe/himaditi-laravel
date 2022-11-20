<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;


class UserController extends Controller
{
    public function index(Request $request)
    {
        for ($tanggal = 25; $tanggal < 32; $tanggal++) {
            $chart1 = collect(DB::SELECT("SELECT count(id) AS jumlah from users where day(created_at)='$tanggal'"))->first();
            $chartUser[] = $chart1->jumlah;
        }
        $user = User::latest();

        $jmlUser = $user->count();

        $no = 1;

        if ($request['search']) {
            $user->where('nama', 'LIKE', '%' . $request['search'] . '%')
            ->orWhere('email', 'LIKE', '%' . $request['search'] . '%')
            ->orWhere('tempat_lahir', 'LIKE', '%' . $request['search'] . '%')
            ->orWhere('agama', 'LIKE', '%' . $request['search'] . '%')
            ->orWhere('no_hp', 'LIKE', '%' . $request['search'] . '%');
        }

        return view('backend.user.user', [
            'no' => $no,
            'user' => $user->paginate(10)->withQueryString(),
            'jmlUser' => $jmlUser,
        ], compact('chartUser'))->with('i');
    }

    public function create()
    {
        return view('backend.user.add');
    }

    public function store(Request $request)
    {
        $validate = $request->validate([
            'nama' => 'required|min:2',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8',
            'password_confirmation' => 'required|min:8|same:password',
            'gender' => 'required',
            'role' => 'required'
        ]);

        $user = User::create([
            'nama' => $request['nama'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'gender' => $request['gender'],
            'role' => $request['role']
        ]);

        return back()->with('success', 'User berhasil ditambahkan!');
    }
}
