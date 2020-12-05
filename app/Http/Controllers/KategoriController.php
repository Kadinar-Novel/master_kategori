<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function create(Request $request)
    {
        $data = new Kategori();
        $data->kode_matkul = $request->kode_matkul;
        $data->nama_matkul = $request->nama_matkul;
        $data->id_dosen = $request->id_dosen;
        $data->deskripsi = $request->deskripsi;
        $save = $data->save();

        if($save){
            $response = [
                'status'=> "successful",
                'message'=> "Data kategori berhasil disimpan"
            ];
        }else{
            $response = [
                'status'=> "unsuccessful",
                'message'=> "Data kategori gagal disimpan"
            ];
        }

        return response($response);
    }

    public function showAll()
    {
        $data = Kategori::all();
        $response=[
            'data'=> $data
        ];

        return response($response);
    }

    public function showDetailData($id)
    {
        $data = Kategori::where('id', $id)->first();
        if($data){
            $response = [
                'status'=> "ok",
                'message'=> "Data ditemukan",
                'data'=> $data
            ];
        }
        else{
            $response = [
                'status'=> "not ok",
                'message'=> "Data tidak ditemukan",
                'data'=> $data
            ];
        }

        return response($response);
    }

    public function update(Request $request, $id)
    {

        $data = Kategori::find($id);
        $update = $data->update([
            'kode_matkul'=> $request->kode_matkul,
            'nama_matkul'=> $request->nama_matkul,
            'id_dosen'=> $request->id_dosen,
            'deskripsi'=> $request->deskripsi
        ]);

         if($update){
            $response = [
                'status'=> "successful",
                'message'=> "Data kategori berhasil diupdate"
            ];
        }else{
            $response = [
                'status'=> "unsuccessful",
                'message'=> "Data kategori gagal diupdate"
            ];
        }

        return response($response);
    }

    public function delete($id)
    {
        $data = Kategori::find($id);
        $delete = $data->delete();

        if($delete){
            $response = [
                'status'=> "successful",
                'message'=> "Data kategori berhasil dihapus"
            ];
        }else{
            $response = [
                'status'=> "unsuccessful",
                'message'=> "Data kategori gagal dihapus"
            ];
        }

        return response($response);
    }

    //
}
