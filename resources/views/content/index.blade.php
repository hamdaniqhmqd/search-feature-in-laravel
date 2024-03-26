@extends('layouts.head')
@section('content')
    <div class="container mt-5 bg-light rounded">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Fitur Pencarian Pada Laravel Versi</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <div class="row mb-2">
                            <div class="col-md-6">
                                <h2 class="">Daftar Mahasiswa</h2>
                            </div>
                            <div class="col-md-6">
                                <div class="align-content-end">
                                    <form action="{{ route('content.index') }}" class="d-flex" method="GET">
                                        <input class="form-control me-2" type="search" placeholder="Search" name="search"
                                            value="{{ $request->get('search') }}">
                                        <button class="btn btn-outline-success" type="submit">Search</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">NAMA</th>
                                    <th scope="col">NIM</th>
                                    <th scope="col">JURUSAN</th>
                                    <th scope="col">PROGRAM STUDI</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($mhs as $data)
                                    <tr>
                                        <td>{{ $data->nama }}</td>
                                        <td>{{ $data->nim }}</td>
                                        <td>{{ $data->jurusan }}</td>
                                        <td>{{ $data->prodi }}</td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        @if ($request->get('search'))
                                            Data {{ $request->get('search') }} tidak ditemukan.
                                        @else
                                            Data Mahasiswa tidak ditemukan.
                                        @endif
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{ $mhs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
