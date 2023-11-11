@extends('layouts.main')
@section('content')
<!-- isi konten -->
<div class="container">
    <div class="card mt-4">
        <div class="card-body">
            <p>Halo, anda berhasil login !.</p>
            <form action="{{Route('auth.logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-sm btn-danger">Logout</button>
            </form>
        </div>
    </div>
    </div>
    @endsection