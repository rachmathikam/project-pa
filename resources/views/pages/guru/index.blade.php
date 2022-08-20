@extends('../layout.main')
@section('content')


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
                                        <table class="display" id="basic-2">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>NIP</th>
                                                    <th>Nama</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th>Alamat</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>No Telphone</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($data as $item )

                                                <tr>
                                                    <th scope="row">{{$loop->iteration}}</th>
                                                    <td>{{ $item->nip }}</td>
                                                    <td>{{ $item->name }}</td>
                                                    <td>{{ $item->tempat_lahir }}</td>
                                                    <td>{{ $item->tanggal_lahir }}</td>
                                                    <td>{{ $item->alamat }}</td>
                                                    <td>{{ $item->jenis_kelamin }}</td>
                                                    <td>{{ $item->no_telp }}</td>

                                                </tr>
                                                @endforeach
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



                <!-- Container-fluid Ends-->
            </div>
            <!-- footer start-->

        </div>
    </div>

    <script src="https://laravel.pixelstrap.com/viho/assets/js/jquery-3.5.1.min.js"></script>

    <script src="https://laravel.pixelstrap.com/viho/assets/js/datatable/datatables/datatable.custom.js"></script>

</body>

</html>
@endsection
