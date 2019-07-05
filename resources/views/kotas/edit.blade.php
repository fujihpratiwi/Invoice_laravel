@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Edit Data Produk</h3>
                    </div>
                    <div class="card-body">
                        @if (session('error'))
                            <div class="alert alert-danger">
                                {{ session('error') }}
                            </div>
                        @endif

                        <form action="{{ url('/kota/' . $kt->id) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT" class="form-control">
                            <div class="form-group">
                                <label for="">Nama Kota</label>
                                <input type="text" name="nama_kota" class="form-control" value="{{ $kt->nama_kota }}" placeholder="Masukkan nama kota">
                            </div>
                            <div class="form-group">
                                <label for="">Ongkir</label>
                                <input type="text" name="ongkir" class="form-control" value="{{ $kt->ongkir }}">
                            </div>
                                <button class="btn btn-primary btn-sm">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection