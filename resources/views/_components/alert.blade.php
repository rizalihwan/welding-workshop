{{-- alert success --}}
@if (session()->has('success'))
    <div class="my-2">
        <div class="alert alert-success alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                    aria-hidden="true">&times;</span></button>
            <ul>
                <b>{{ session()->get('success') }}</b>
            </ul>
        </div>
    </div>
@endif

{{-- alert error --}}
@if ($errors->any())
    <div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span
                aria-hidden="true">&times;</span></button>
        <ul>
            @foreach ($errors->all() as $err)
                <li>{{ $err . '!' }}</li>
            @endforeach
        </ul>
    </div>
@endif
