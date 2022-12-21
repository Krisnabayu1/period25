@extends('layouts.main')

@section ('container')

<!DOCTYPE html>
<html>

<head>

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<body>

    <div class="container mt-2">
        <div class="row">
            <div class="col-lg-12 margin-tb">
                @csrf
                @method('DELETE')
                <div class="pull-left">
                    <h2 style="font-family: cursive">Kloter</h2>
                </div>
                <div style="font-family: cursive" class="pull-right mb-2">
                    <a style="font-family: cursive" class="btn btn-success" href="{{ route('kloters.create') }}"> Tambah Kloter</a>
                    <button type="submit" class="btn btn-danger delete_all animate_animated animate_fadeInDown ms-2 " style="font-family: cursive">Hapus Semua Data</button>

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
                <tr style="font-family: cursive" class="fw-bold text-light text-center">
                    <th>id</th>
                    <th>Nama Kloter</th>
                    <th>List Member</th>
                    <th>Jam</th>
                    <th>Ruangan</th>
                    <th>Total Member</th>
                    <th>Nama Tutor</th>
                    <th>Action</th>

                </tr>
            </thead>

            <tbody>
                @php
                $no = 01;
                @endphp
                @foreach ($kloter as $j)
                <tr class=" text-center">
                    <td>{{ $j->id }}</td>
                    <td>{{ $j->nama }}</td>
                    <td><a class="btn btn-warning text-dark fw-bold" href="{{ route('kloters.show', $j->id) }}">Lihat List</a></td>
                    <td>
                        {{ $j->sesijam->sesi_jam }}
                    </td>
                    <td>{{ $j->namaRuangan->nama_ruangan }}</td>
                    <td>
                        @php
                        $s = str_replace(['[', ']'], '', $j->list_member);
                        $mm = explode(',', $s);

                        // print_r($mm);

                        $lm = sizeof($mm);

                        // $ml = count($mm);
                        if ($lm < 23) { $ll='masih ada slot' ; } else { $ll='tidak ada slot' ; } $lp=23; @endphp {{ $lm }}/23 Member </td>

                    <td>{{$j->namaTutor->nama_tutor}}</td>
                    <td>
                        <form action="{{ route('kloters.destroy', $j->id) }}" method="Post">
                            @if ($lm < 23) <a class="btn btn-primary text-dark fw-bold" href="{{ route('kloters.edit', $j->id) }}">Tambah Member</a>
                                @else
                                <button type="button" class="btn btn-basic" disabled>Kuota Terpenuhi</button>
                                @endif
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger text-dark fw-bold">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>

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

            <script type="text/javascript">
                $(document).ready(function() {



                    $('.delete_all').on('click', function(e) {





                        var check = confirm("Yakin mau Hapus SEMUA DATA INI?");
                        if (check == true) {



                            $.ajax({
                                url: $(this).data('url'),
                                type: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                                },

                                success: function(data) {
                                    if (data['success']) {


                                        success(data['success']);
                                        location.reload();

                                    } else if (data['error']) {
                                        alert(data['error']);
                                    } else {
                                        alert('Whoops Something went wrong!!');
                                    }
                                },
                                error: function(data) {
                                    alert(data.responseText);
                                }
                            });


                        }

                    });

                    $('[data-toggle=confirmation]').confirmation({
                        rootSelector: '[data-toggle=confirmation]',
                        onConfirm: function(event, element) {
                            element.trigger('confirm');
                        }
                    });

                    $(document).on('confirm', function(e) {
                        var eele = e.target;
                        e.preventDefault();

                        return false;
                    });
                });
            </script>
</body>

</html>

</div>



@endsection