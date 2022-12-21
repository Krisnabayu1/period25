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
                    <h3>Data Member</h3>
                </div>

            </div>
        </div>
        @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
        @endif
        <table style="font-family: cursive" class="table table-bordered">
            <thead>
                <tr class="text-center fw-bold bg-primary text-light">
                    <th>No</th>
                    <th>Nama Member</th>
                </tr>
            </thead>
            <tbody>

                <tr class="text-center fw-bold">
                    <td>{{ $member->id }}</td>
                    <td>{{ $member->nama }}</td>

                </tr>
            </tbody>
        </table>
        <table style="font-family: cursive" class="table table-bordered">
            <div class="mt-5">
                <h3 class="text-left fw-bold "> Jadwal Kelas : {{$member->nama}}</h3>
            </div>
            <div class="container mt-2">
                <div class="row">
                    <div class="col-lg-12 margin-tb">
                        <div class="pull-left">
                        </div>
                        <div class="pull-right mb-2">
                        </div>
                    </div>
                </div>
                @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
                @endif
                <table id="example" class="table table-striped table-bordered fw-bold bg-primary " style="width:100%">
                    <thead>
                        <tr style="font-family: cursive" class="fw-bold text-light text-center">
                            <th>ID Member</th>
                            <th>Nama Member</th>
                            <th>ID Kloter</th>
                            <th>Nama Kloter</th>

                            <th>Jam</th>
                            <th>Ruangan</th>
                            <th> Tutor</th>

                            <th>Kapasitas Member</th>

                        </tr>
                    </thead>
                    <tbody>
                        @php
                        $no = 1;
                        @endphp
                        @foreach ($kloter as $j)
                        <tr style="font-family: cursive" class="text-center">

                            <td>{{ $member->id }}</td>
                            <td>{{ $member->nama }}</td>
                            <td>{{ $no++ }}</td>
                            <td>{{ $j->nama }}</td>

                            <td>
                                {{ $j->sesijam->sesi_jam }}
                            </td>
                            <td>{{ $j->namaRuangan->nama_ruangan }}</td>
                            <td>{{ $j->namaTutor->nama_tutor }}</td>

                            <td>
                                @php
                                $s = str_replace(['[', ']'], '', $j->list_member);
                                $mm = explode(',', $s);

                                // print_r($mm);

                                $lm = sizeof($mm);

                                // $ml = count($mm);
                                if ($lm < 20) { $ll='masih ada slot' ; } else { $ll='tidak ada slot' ; } $lp=20; @endphp {{ $lm }}/20 Member </td>


                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{-- {!! $kloter->links() !!} --}}
            </div>

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
</body>

</html>


@endsection