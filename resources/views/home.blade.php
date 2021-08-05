@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Dashboard</div>

                    <div class="card-body">
                        Total Akun Pembeli terdaftar : {{ \DB::table('users')->where('role', 'pembeli')->count() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
