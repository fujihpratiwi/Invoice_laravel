<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kota;

class KotaController extends Controller
{
    public function index()
    {
        $kotas = Kota::orderBy('created_at', 'DESC')->get();
        return view('kotas.index', compact('kotas'));
    }

    public function create()
    {
        return view('kotas.create');
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'nama_kota' => 'required|string',
            'ongkir'    => 'required|string'
        ]);

        try {
            $kt = Kota::create([
                    'nama_kota' => $request->nama_kota,
                    'ongkir'    => $request->ongkir
                ]);
            return redirect('/kota')->with(['success' => '<strong>'. $kt->nama_kota . '</strong> Telah disimpan']);
        } catch(\Exception $e){
            return redirect('/kota/new')->with(['eror' => $e->getMessage()]);
        }
    }

    public function edit($id)
    {
        $kt = Kota::find($id);
        return view('kotas.edit', compact('kt'));
    }

    public function update(Request $request, $id)
    {
        $kt = Kota::find($id);
        $kt->update([
            'nama_kota' => $request->nama_kota,
            'ongkir'    => $request->ongkir
        ]);
        return redirect('/kota')->with(['success' => '<strong>'. $kt->nama_kota . '<strong> Diperbaharui']);
    }

    public function destroy($id)
    {
        $kt = Kota::find($id);
        $kt->delete();
        return redirect('/kota')->with(['success' => '<strong>'. $kt->nama_kota . '<strong> Dihapus']);
    }
}
