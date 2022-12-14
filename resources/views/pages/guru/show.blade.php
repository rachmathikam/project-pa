@extends('../layout.main')
@section('content')
<div class="container-fluid">
    <div class="page-header">
        <div class="row">
            <div class="col-lg-6">
                <h3>Data Guru</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a
                            href="{{ ('/') }}">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ url('guru') }}">Guru</a></li>
                    <li class="breadcrumb-item active">Show</a></li>

                </ol>
            </div>
            <div class="col-lg-6">
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-6 col-xl-12">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header pb-0">
                            <h5>Lihat Data Guru</h5>
                        </div>
                        <div class="card-header pb-0">
                            <a href="{{ route('guru.edit',$data->id) }}"><button class="btn btn-scuare btn-warning"  style="float: right;"><span class="material-symbols-outlined" style="font-size: 25px; ">
                                edit
                                </span></button></a>
                            <a href="{{ route('guru.index') }}"><button class="btn btn-secondary" style="float: right; margin-right:15px;"><span class="material-symbols-sharp">
                                reply
                                </span></button></a>
                        </div>
                        <div class="card-body">
                            <form class="theme-form" id="form-guru">
                                @csrf
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Nip</label>
                                    <input class="form-control" value="{{ $data->nip }}" name="name" type="text" placeholder="Name" disabled />
                                    <span class="text-danger" id=error-nip></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Nama</label>
                                    <input class="form-control" id="exampleInputPassword1" value="{{ $data->name }}" name="name" type="text" placeholder="Name" disabled/>
                                    <span class="text-danger" id=error-name></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">Email</label>
                                    <input class="form-control" id="exampleInputEmail1" value="{{ $data->email }}" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" disabled/>
                                    <input type="hidden" id="id">
                                    <span class="text-danger" id="error-email"></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Password</label>
                                    <input class="form-control" id="exampleInputPassword1" value="{{ $data->password }}" name="password" type="password" placeholder="Name" disabled />
                                    <span class="text-danger" id="error-password"></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Tempat Lahir</label>
                                    <input class="form-control" id="exampleInputPassword1" value="{{ $data->tempat_lahir }}" name="tempat_lahir" type="text" placeholder="Name" disabled />
                                    <span class="text-danger" id=error-tempat_lahir></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Tanggal Lahir</label>
                                    <input class="form-control" id="exampleInputPassword1" value="{{ $data->tanggal_lahir }}" name="tanggal_lahir" type="text" placeholder="Name"disabled />
                                    <span class="text-danger" id=error-tanggal_lahir></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Alamat</label>
                                    <input class="form-control" id="exampleInputPassword1" value="{{ $data->alamat }}" name="alamat" type="text" placeholder="Name" disabled/>
                                    <span class="text-danger" id=error-alamat></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">No Telpone</label>
                                    <input class="form-control" id="exampleInputPassword1" value="" name="no_telp" type="text" placeholder="Name" disabled/>
                                    <span class="text-danger" id=error-no_telp></span>
                                </div>

                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Role</label>
                                    <select name="role" id="role" disabled
                                    class="form-control @error('role') is-invalid @enderror">
                                    <option value="">-- Pilih Role --</option>
                                    @foreach ($role as $roles)
                                                            <option value="{{ $roles->id }}"
                                                                @selected($roles->id == $data->role_id)>{{ $roles->role }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>
                                <div class="checkbox p-0">
                                    <input id="dafault-checkbox" type="checkbox" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-table/1.20.2/bootstrap-table.min.js" integrity="sha512-9KY1w0S1bRPqvsNIxj3XovwFzZ7bOFG8u0K1LByeMVrzYhLu3v7sFRAlwfhBVFsHRiuMc6shv1lRLCTInwqxNg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <script type="text/javascript">
    // console.log('.submit');
    // $('.submit').on('click', function(e) {
    //     alert('sss')
    // });
    $(document).ready(function() {

        $('#form-guru').on('submit', function(event) {
            // alert('testing');
            event.preventDefault();
            id = $('#id').val();
            var formData = new FormData(this);
            $('#error-email').text('');
            $('#error-name').text('');
            var route = "{{route('guru.show',$data->id)}}";


            $.ajax({
                url: route,
                type: "POST",
                data: formData,
                cache: false,
                contentType: false,
                processData: false,
                success: function(response) {
                    if (response.success) {
                        window.location.href = "{{ route('guru.index') }}";
                        sessionStorage.setItem('success', response.message);
                    } else {
                        toastr.error('error', response.message);
                    }
                },
                error: function(response) {
                    $('#error-email').text(response.responseJSON.errors.email);
                    $('#error-name').text(response.responseJSON.errors.name);
                }
            });
        });

});
</script>
        @endsection





