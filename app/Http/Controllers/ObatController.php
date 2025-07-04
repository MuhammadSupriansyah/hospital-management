<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // private $client;

    // public function __construct()
    // {
    //     $this->client = new Client([
    //         'base_uri' => 'http://localhost:3000'
    //     ]);
    // }

    public function index()
    {
        // $response = $this->client->get('/obat');
        // $data = json_decode($response->getBody(), true);

        $obats = Obat::all();
        // $dd($obats);
        return view('admin.CRUDObat', compact('obats'));
    }

    // public function tentang()
    // {
    //     // $response = $this->client->get('/obat');
    //     // $data = json_decode($response->getBody(), true);

    //     $obats = Obat::all();

    //     return view('main.tentangObat', $obats );
    // }


    public function tentang()
{
    $obats = Obat::all(); // Ambil semua data obat dari database

    // Kirim data ke view menggunakan compact
    return view('main.tentangObat', compact('obats'));
}


    //untuk menampilkan di tampilan user
    // public function getAllObat(Request $request)
    // {
    //     $query = $request->input('cariObat');
    //     $response = $this->client->get('/obat');
    //     $data = json_decode($response->getBody(), true);

    //     // Filter data jika ada query pencarian
    //     if ($query) {
    //         $data = array_filter($data, function ($obat) use ($query) {
    //             return stripos($obat['nama_obat'], $query) !== false;
    //         });
    //     }

    //     return view('main.tentangObat', ['obats' => $data, 'cariObat' => $query]);
    // }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{

    $request->validate([
        "nama_obat" => "required|string|max:255",
        "deskripsi" => "required|string",
        "foto" => "nullable|image|max:2048",  
    ]);

    // Ambil data dari request
    $validatedData = $request->only(['nama_obat', 'deskripsi', 'foto']);

    // Jika ada foto yang diupload
    if ($request->hasFile('foto')) {
        $fotoPath = $request->file('foto')->store('uploads/obat', 'public');
        $validatedData['foto'] = $fotoPath;
    }

    // Simpan data obat ke dalam database
    Obat::create($validatedData);

    // Redirect dengan pesan sukses
    return redirect()->route('admin.CRUDObat')->with('success', 'Obat baru berhasil ditambahkan!');
}


    /**
     * Display the specified resource.
     */
    public function show(Obat $obat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Obat $obat)
    {
        return redirect()->route('admin.CRUDObat');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Obat $obat)
    {
        $response = $this->client->put("/obat/{$obat->id}", [
            'json' => $request->only(['nama_obat', 'deskripsi', 'url_gambar']),
        ]);

        return redirect()->route('admin.CRUDObat');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Obat $obat)
    {
        $response = $this->client->delete("/obat/{$obat->id}");

        return redirect()->route('admin.CRUDObat');
    }
}
