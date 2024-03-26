<?php
namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DataMahasiswa extends Controller{
    public function index(Request $request): View{
        $title = 'Daftar Mahasiswa';

        $mhs = Mahasiswa::latest()->paginate(20);
        $search = $request->get('search');
        if ($search) {
            $mhs = Mahasiswa::whereAny(['nama', 'nim', 'jurusan', 'prodi'], 'LIKE', "%$search%")->paginate(10);
        }
        return view('content.index', compact('request', 'mhs', 'title'));
    }
}
