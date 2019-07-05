@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Tambah Data Kota</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/kota/') }}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="">Nama Kota</label>
                                <input type="text" name="nama_kota" class="form-control {{ $errors->has('nama_kota') ? 'is-invalid':'' }}" placeholder="Masukkan nama kota">
                                <p class="text-danger">{{ $errors->first('nama_kota') }}</p>
                            </div>
            
                            <div class="form-group">
                                <label for="">Ongkir</label>
                                <input type="text" name="ongkir" class="form-control {{ $errors->has('ongkir') ? 'is-invalid':'' }}" placeholder="Masukkan Ongkir">
                                <p class="text-danger">{{ $errors->first('ongkir') }}</p>
                            </div>
        
                            <div class="form-group">
                                <button class="btn btn-danger btn-sm">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection