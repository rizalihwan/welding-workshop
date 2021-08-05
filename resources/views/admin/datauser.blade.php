@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Data User</div>

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-light table-hover">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Username</th>
                                        <th>Password</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($users as $key)
                                        <tr>
                                            <th>{{ $loop->iteration + $users->firstItem() - 1 . '.' }}</th>
                                            <td>{{ $key->name }}</td>
                                            <td>{{ $key->username }}</td>
                                            <td><span class="badge badge-danger">DILINDUNGI</span></td>
                                            <td>
                                                <form action="{{ route('admin.user.destroy', $key->id) }}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" onclick="return confirm('Yakin?')"
                                                        class="btn btn-sm btn-danger">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="5" class="text-danger text-center">Data Kosong!</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            {{ $users->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
