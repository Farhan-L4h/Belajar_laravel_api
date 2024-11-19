<?php

namespace App\Http\Controllers\Api;

use App\Models\BarangModel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    public function index() {
        return BarangModel::all();
    }

    public function store(Request $request) {

        $validator = Validator::make($request->all(), [
            'kategori_id' => 'required',
            'barang_kode' => 'required',
            'barang_nama' => 'required',
            'harga_beli' => 'required|integer',
            'harga_jual' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);


        $imageName = null;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = $image->hashName(); // Nama file unik
            $image->storeAs('public/posts', $imageName); // Simpan file
        }

        // Buat user baru
        $barang = BarangModel::create([
            'kategori_id' => $request->kategori_id,
            'barang_kode' => $request->barang_kode,
            'barang_nama' => $request->barang_nama,
            'harga_jual' => $request->harga_jual,
            'harga_beli' => $request->harga_beli,
            'image' => $imageName, // Simpan nama file di database
        ]);

        if ($barang) {
            return response()->json([
                'success' => true,
                'barang' => $barang,
            ], 201);
        }

        return response()->json([
            'success' => false,
            'message' => 'User creation failed',
        ], 409);
    }

    public function show(BarangModel $barang) {
        return BarangModel::find($barang);
    }

    public function update(Request $request, BarangModel $barang) {
        $barang->update($request->all());
        return BarangModel::find($barang);
    }

    public function destroy(BarangModel $barang) {
        $barang->delete();

        return response()->json([
            'success' => true,
            'massage' => 'Data terhapus',
        ]);
    }
}
