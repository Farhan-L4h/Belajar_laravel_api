<?php

namespace App\Http\Controllers\Api;

use App\Models\KategoriModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index() {
        return KategoriModel::all();
    }

    public function store(Request $request) {
        $kategori = KategoriModel::create($request->all());
        return response()->json($kategori, 201);
    }

    public function show(KategoriModel $kategori) {
        return KategoriModel::find($kategori);
    }

    public function update(KategoriModel $kategori) {
        $kategori->update();
        return KategoriModel::find($kategori);
    }

    public function destroy(KategoriModel $kategori) {
        $kategori->delete();

        return response()->json([
            'success' => true,
            'massage' => 'Data terhapus',
        ]);
    }
}
