<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class PenggunaController extends Controller
{
    public function index()
    {
        $users = Pengguna::all();

        return view('index', compact('users'));
    }

    public function create()
    {
        return view('create');
    }
    
    public function saveUser(Request $request)
    {
        $input = $request->input('data');

        preg_match('/(.*?)(\d+)(?:\s*(?:TAHUN|THN|TH))?((?:\s+.*)*)/', $input, $matches);
        $name = strtoupper(trim($matches[1]));
        $age = intval($matches[2]);
        $city = strtoupper(trim(preg_replace('/\b(?:TAHUN|THN|TH)\b/i', '', $matches[3])));

        $pengguna = new Pengguna();
        $pengguna->name = $name;
        $pengguna->age = $age;
        $pengguna->city = $city;
        $pengguna->save();

        return response()->json(['message' => 'Data saved successfully']);
    }
}
