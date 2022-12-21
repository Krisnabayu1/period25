@extends('layouts.main')
@section ('container')
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

</head>

<body>



    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                <div class="pull-left">
                    <h2 style="font-family: cursive">Subject</h2>
                </div>
                <div class="pull-right mb-2">
                    <a style="font-family: cursive" class="btn btn-success fw-bold" href="{{ route('subjects.create') }}"> Tambah Subject</a>
                </div>
            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table id="example" class="table table-striped table-bordered fw-bold bg-primary" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Subject</th>
                    <th width="280px">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($subject as $j)
                <tr>
                    <td>{{ $j->id }}</td>
                    <td>{{ $j->nama_subject }}</td>
                    <td>
                        <form action="{{ route('subjects.destroy', $j->id) }}" method="Post">
                            <a class="btn btn-primary text-dark fw-bold" href="{{ route('subjects.edit', $j->id) }}">Edit</a>
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

            <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/dataTables.buttons.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.flash.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
            <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.html5.min.js"></script>
            <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.2/js/buttons.print.min.js"></script>

            <script type="text/javascript">
                $(document).ready(function() {
                    $('#example').DataTable({
                        dom: 'Bfrtip',
                        buttons: [
                            'copy', 'csv', 'excel', 'pdf', 'print'
                        ]
                    });
                });
            </script>
        </div>
</body>

</html>

@endsection