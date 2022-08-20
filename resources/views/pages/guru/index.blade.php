@extends('../layout.main')
@section('content')
{{-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> --}}
<body>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->

            <!-- Page Sidebar Ends-->

                <!-- Container-fluid starts-->
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-lg-6">
                                <h3>Data Guru</h3>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a
                                            href="{{ ('/') }}">Home</a></li>
                                    <li class="breadcrumb-item active"><a href="{{ url('guru') }}">Guru</a></li>
                                </ol>
                            </div>
                            <div class="col-lg-6">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">

                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="display guru_table" id="basic-2">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Feature Unable /Disable Ends-->
                        <!-- Default ordering (sorting) Starts-->

                        <!-- Default ordering (sorting) Ends-->
                        <!-- Multi-Column Starts-->
                    </div>
                </div>


            {{-- </div> --}}
                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->

        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/61941c798d.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
         $(document).ready(function () {

        $('#basic-2').DataTable({
            processing: true,
            serverSide: true,
            ajax: {
                url: "{{ route('guru.index') }}",
                type: 'GET',
            },
            "responsive": true,
            "language": {
                "oPaginate": {
                    "sNext": "<i class='fas fa-angle-right'>",
                    "sPrevious": "<i class='fas fa-angle-left'>",
                },
            },
            columns: [{
                    data: 'DT_RowIndex',
                },
                {
                    data: 'nip',
                },
                {
                    data: 'name',
                },
                {
                    data: 'action'
                },
            ],
        });
    });
    </script>
    {{-- <script src="https://laravel.pixelstrap.com/viho/assets/js/jquery-3.5.1.min.js"></script>

    <script src="https://laravel.pixelstrap.com/viho/assets/js/datatable/datatables/datatable.custom.js"></script> --}}

</body>

</html>
@endsection
