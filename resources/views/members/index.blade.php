@extends('layouts.main')

@section ('container')
<script></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-confirmation/1.0.5/bootstrap-confirmation.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.2/css/buttons.dataTables.min.css">
<meta name="csrf-token" content="{{ csrf_token() }}">


<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2 style="font-family: cursive ">Member</h2>
            </div>

            <div class="pull-left mb-2">



            </div>

            <div class="pull-left mb-2">
                <a class="btn btn-success animate_animated animate_fadeInDown " style="font-family: cursive" href="{{ route('members.create') }}"> Tambah Member</a>
                @csrf
                @method('DELETE')


                <button type="submit" class="btn btn-danger delete_all animate_animated animate_fadeInDown ms-2 " style="font-family: cursive">Hapus Semua Data</button>
                <form class="mt-2" action="{{ url('members/import') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="file" name="import_file" />
                    <button type="submit" class="btn btn-primary animate_animated animate_fadeInDown " style="font-family: cursive">Import</button>
                </form>
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
                <th>Nama Member</th>
                <th>View Kelas</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @php
            $no = 1;
            @endphp

            @if($member->count())
            @foreach ($member as $j)

            <tr id="tr_{{$j->id}}">


                <td>{{ $j->id}}</td>
                <td>{{ $j->nama }}</td>
                <td><a class="btn btn-warning fw-bold" href="{{ route('members.show', $j->id) }}">Lihat Kelasku</a></td>


                <td>
                    <form action="{{ route('members.destroy', $j->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('members.edit', $j->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
        </tbody>
    </table>

</div>



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
                            //     $('#validation-message').append('<div class="alert dark alert-success"></div>')
                            //     success(data['success']);
                            //    setTimeout(function()  {document.location.reload(true);}, 1000) ;

                            // $("#"+ data['tr']).slideUp("slow");
                            // window.location.reload(true     );


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

<footer class="text-muted py-5">
    <div class="container">

        <p class="mb-1 fw-bold"> &copy; GE | Global English Pare 2022</p>
        <p class="mb-0 fw-bold">Aplikasi Ini di Buat Oleh Mr.Rizal Dan Amik Taruna Team </p>
        <p><a href="https://globalenglish.co.id/">Go To Website</a> </p>
    </div>
</footer>

@endsection