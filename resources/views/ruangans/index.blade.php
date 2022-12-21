@extends('master')
@section('title', 'Kloter - CDIS')

@extends('layouts.main')

@section ('container')



<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-family: cursive">Ruangan</h2>
            </div>
            <div class="pull-right mb-2">
                <a style="font-family: cursive" class="btn btn-success fw-bold" href="{{ route('ruangans.create') }}"> Tambah Ruangan</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table style="font-family: cursive" id="example" class="table table-striped table-bordered fw-bold" style="width:100%">

        <thead>
            <tr>
                <th>No</th>
                <th>Nama Ruangan</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ruangan as $j)
            <tr>
                <td>{{ $j->id }}</td>
                <td>{{ $j->nama_ruangan }}</td>
                <td>
                    <form action="{{ route('ruangans.destroy', $j->id) }}" method="Post">
                        <a class="btn btn-primary text-dark fw-bold" href="{{ route('ruangans.edit', $j->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger text-dark fw-bold">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
<footer class="text-muted py-5">
    <div class="container">

        <p class="mb-1 fw-bold"> &copy; GE | Global English Pare 2022</p>
        <p class="mb-0 fw-bold">Aplikasi Ini di Buat Oleh Mr.Rizal Dan Amik Taruna Team </p>
        <p><a href="https://globalenglish.co.id/">Go To Website</a> </p>
    </div>
</footer>
@endsection