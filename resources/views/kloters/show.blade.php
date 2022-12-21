@extends('layouts.main')
@section ('container')

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">

</head>
<div>

    <body>
        <div class="container mt-2">
            <div class="row">
                <div class="col-lg-12 margin-tb">
                    <div class="pull-left">
                        <h3>Subject Dan Kloter</h3>
                    </div>

                </div>
            </div>
            @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
            @endif
            <table style="font-family: cursive" class="table table-bordered text-center fw-bold">
                <thead>
                    <tr class="bg-primary text-light">
                        <th>No</th>
                        <th>Nama Subject</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($sl as $s)
                    <tr>

                        <td>{{ $s->id }}</td>
                        <td>{{ $s->nama_subject }}</td>

                    </tr>
                    @endforeach
                    <table id="example1" class="table table-striped table-bordered fw-bold " style="width:100%">
                        <thead>
                            <tr class="bg-primary text-light">
                                <th>No</th>
                                <th>Nama Kloter</th>
                                <th>Jam</th>
                                <th>Ruangan</th>
                                <th>Tutor</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ $kloter->id }}</td>
                                <td>{{ $kloter->nama }}</td>
                                <td> {{ $kloter->sesijam->sesi_jam }} </td>
                                <td>{{ $kloter->namaRuangan->nama_ruangan }}</td>
                                <td>{{ $kloter->namaTutor->nama_tutor }}</td>
                            </tr>
                        </tbody>
                    </table>
                    <hr>
                </tbody>
            </table>
            <div class="pull-left">
                <h2>List Member {{ $kloter->nama }}</h2>
                @php
                $s = str_replace(['[', ']'], '', $kloter->list_member);
                $mm = explode(',', $s);

                // print_r($mm);

                $lm = sizeof($mm);

                // $ml = count($mm);
                if ($lm < 20) { $ll='masih ada slot' ; } else { $ll='tidak ada slot' ; } $lp=20; @endphp @if ($lm < 20) <a class="btn btn-primary" href="{{ route('kloters.edit', $kloter->id) }}">Tambah Member</a>
                    @else
                    <button type="button" class="btn btn-basic" disabled>Kuota Terpenuhi</button>
                    @endif
            </div>
            <div class="pull-right mb-2">
            </div>
            <table id="example" class="table table-striped table-bordered fw-bold " style="width:100%">
                <thead>
                    <tr class="bg-primary text-light text-center fw-bold ">
                        <th class="text-center fw-bold ">No Id</th>
                        <th class="text-center fw-bold ">Nama Member</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ml as $m)
                    <tr>
                        <td class="text-center fw-bold">{{ $m->id }}</td>
                        <td class="text-center fw-bold">{{ $m->nama }}</td>


                        @endforeach
                </tbody>
            </table>

        </div>

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
                $('#example1').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                        'copy', 'csv', 'excel', 'pdf', 'print'
                    ]
                });
            });
        </script>
    </body>
</div>

</html>



@endsection