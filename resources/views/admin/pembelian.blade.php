@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data Pembelian</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Pembeli</th>
                                        <th>Nama Model</th>
                                        <th>Alamat</th>
                                        <th>Kota</th>
                                        <th>Kabupaten</th>
                                        <th>Provinsi</th>
                                        <th>Kode Pos</th>
                                        <th>Telepon</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($orders as $key)
                                        <tr>
                                            <th>{{ $loop->iteration + $orders->firstItem() - 1 . '.' }}</th>
                                            <td>{{ $key->full_name }}</td>
                                            <td>{{ $key->modeling->name }}</td>
                                            <td>{{ $key->address }}</td>
                                            <td>{{ $key->city }}</td>
                                            <td>{{ $key->district }}</td>
                                            <td>{{ $key->province }}</td>
                                            <td>{{ $key->postal_code }}</td>
                                            <td>{{ $key->phone }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="9" class="text-danger text-center">Data Kosong!</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $orders->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
