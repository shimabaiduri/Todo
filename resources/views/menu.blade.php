@extends('template.index')

@section('title', 'home')

@section('content')

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                <a href="/menu/add">
                    <button type="button" class="btn btn-primary" style="background-color: rgb(0, 128, 0)">Tambah</button>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Keterangan</th>
                        <th style="max-width: 200px"></th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $row)
                            <tr>
                                <th scope="row">{{ $row->kode_makanan}}</th>
                                <td>{{ $row->nama}}</td>
                                <td>{{ $row->kategori}}</td>
                                <td>{{ $row->harga}}</td>
                                <td>{{ $row->ket}}</td>
                                <td>
                                    <a href="/menu/{{ $row->kode_makanan}}/edit">
                                        <button type="button" class="btn btn-primary" style="background-color: rgb(0, 128, 0)">Edit</button>
                                    </a>

                                    <a href="/menu/{{ $row->kode_makanan}}/delete">
                                        <button type="button" class="btn btn-danger">Hapus</button>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
    </div>

@endsection
