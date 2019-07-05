@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row">
                            <div class="col-md-6">
                                <h3 class="card-title">Manajemen Kota</h3>
                            </div>
                            <div class="col-md-6">
                                <a href="{{ url('/kota/new') }}" class="na navbar-right btn btn-primary btn-sm float-right">Tambah Data</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {!! session('success') !!}
                            </div>
                        @endif
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th>Nama Kota</th>
                                    <th>Ongkir</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($kotas as $kt)
                                <tr>
                                    <td>{{ $kt->nama_kota }}</td>
                                    <td>Rp {{ number_format($kt->ongkir) }}</td>
                                    <td>
                                        <form action="{{ url('/kota/' . $kt->id) }}" method="POST">
                                            {{csrf_field()}} 
                                            <input type="hidden" name="_method" value="DELETE" class="form-control">
                                            <a href="{{ url('/kota/' . $kt->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                            <button class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td class="text-center" colspan="6">Tidak ada data</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection