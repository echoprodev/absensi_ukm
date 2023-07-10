@extends('layouts.dashboard')
@section('content')
    <div class="panel-header bg-primary-gradient">
        <div class="page-inner py-5">
            <div class="d-flex align-items-left align-items-md-center flex-column flex-md-row">
                <div>
                    <h2 class="text-white pb-2 fw-bold">Dashboard {{ Auth::user()->hak_akses }}</h2>
                    <h3 class="text-white mb-2">{{ Auth::user()->name }}</h3>
                </div>
                <div class="ml-md-auto py-2 py-md-0">
                    <h5 class="text-white mb-2 mr-5 h3" id="tanggal"></h5>
                    <h5 class="text-white float-right mr-5 h3" id="jam"></h5>
                </div>
            </div>
        </div>
    </div>
    <div class="page-inner mt-3">
        <div class="row">
            <div class="col-sm-6 col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h3 class="card-title">Tambah Pengguna</h3>
                    </div>
                    <div class="card-body">
                        <form method="post" action="{{ route('Pengguna.store')}}">
                            {{ csrf_field() }}

                            <div class="form-group">
                                <label for="kode_cabang">Nama Pengguna</label>
                                <input type="text" class="form-control" id="kode_cabang" name="name" placeholder="Input Nama Pengguna" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Email Pengguna</label>
                                <input type="email" class="form-control" id="kode_cabang" name="email" placeholder="Input Email Pengguna" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Akses Pengguna</label>
                                <select name="hak_akses" class="form-control" id="">
                                    @foreach ($akses as $data)
                                        <option value="{{$data->nama_akses}}">{{$data->nama_akses}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Password</label>
                                <input type="password" class="form-control" id="kode_cabang" name="password" placeholder="Input Password Pengguna" value="">
                            </div>
                            <div class="form-group">
                                <label for="kode_cabang">Konfirmasi Password</label>
                                <input type="password" class="form-control" id="kode_cabang" name="password_confirmation" placeholder="Input Konfirmasi Password Pengguna" value="">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-sm text-white ml-auto" type="submit">Simpan Data</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection