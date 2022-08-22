@extends('../layout.main')
@section('content')
    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-lg-6">
                    <h3>Data Guru</h3>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ '/' }}">Home</a></li>
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
            <div class="col-sm-12 col-xl-12">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header pb-0 d-flex justify-content-between">
                                <h5>Tambah Data Guru</h5>
                                <a href="/guru"><button class="btn btn-secondary">Cancel</button></a>
                            </div>
                            <div class="card-body">
                                <form class="theme-form" id="form-guru">
                                    @csrf
                                    @method('POST')
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0" for="exampleInputEmail1">NIP</label>
                                        <input class="form-control" id="exampleInputEmail1" type="text" value="{{ old('nip') }}" name="nip"
                                            aria-describedby="emailHelp" placeholder="Masukkan NIP anda" />
                                        <input type="hidden" id="id">
                                        <span class="text-danger" id="error-nip"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Nama</label>
                                        <input class="form-control" id="exampleInputPassword1" value="{{ old('name') }}" name="name" type="text"
                                            placeholder="Masukkan nama anda" />
                                        <span class="text-danger" id="error-name"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Email</label>
                                        <input class="form-control" id="exampleInputPassword1" value="{{ old('email') }}"name="email" type="email"
                                            placeholder="Masukkan email anda" />
                                        <span class="text-danger" id="error-email"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">password</label>
                                        <input class="form-control" id="exampleInputPassword1" name="password" value="{{ old('password') }}"
                                            type="password" placeholder="**********" required autocomplete="new-password" />
                                        <span class="text-danger" id="error-password"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">confirm
                                            password</label>
                                        <input class="form-control" id="password-confirm" name="password_confirmation" value="{{ old('password') }}"
                                            type="password" placeholder="**********" required autocomplete="new-password" />
                                        <span class="text-danger" id="error-password"></span>
                                    </div>

                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Tempat Lahir</label>
                                        <input class="form-control" value="{{ old('tempat_lahir') }}" name="tempat_lahir"
                                            type="text" placeholder="-- Tempat Lahir --" />
                                        <span class="text-danger" id="error-tempat-lahir"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Tanggal Lahir</label>
                                        <input class="form-control" name="tanggal_lahir" value="{{ old('tanggal_lahir') }}"
                                            type="date" placeholder="Tanggal Lahir anda" />
                                        <span class="text-danger" id="error-tanggal_lahir"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">Jenis Kelamin</label>
                                        <select class="form-select" aria-label="select example" name="gender_id">
                                            <option value="">-- Pilih...--</option>
                                            @foreach ($jenis_kelamin as $gender)
                                                <option  value="{{ $gender->id}}">{{ $gender->gender }}</option>
                                                {{-- <option name="jenis_kelamin" value="{{ $gender->id }}">{{ $gender->gender }}</option> --}}
                                            @endforeach
                                        </select>
                                        <span class="text-danger" id="error-jenis-kelamin"></span>
                                    </div>
                                    <div class="mb-3 mt-3">
                                        <label class="col-form-label pt-0" for="exampleInputPassword1">Alamat</label>
                                        <input class="form-control" id="exampleInputPassword1" name="alamat" value="{{ old('alamat') }}" type="text"
                                            placeholder="alamat anda" />
                                        <span class="text-danger" id="error-alamat"></span>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label pt-0">No Telp</label>
                                        <input class="form-control" id="phone" name="no_telp" type="tel"
                                            placeholder="Masukkan No Telphone" pattern="[0-9]{12}" value="{{ old('no_telp') }}"/>
                                        <span class="text-danger" id="error-no_telp"></span>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary submit">Submit</button>
                                    </div>
                                </form>
                            </div>
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

    <script>
        $(document).ready(function() {
            $('#selectgender').select2();
            $('#form-guru').on('submit', function(event) {
                event.preventDefault();
                var formData = new FormData(this);
                $('#error-nip').text('');
                $('#error-name').text('');
                $('#error-email').text('');
                $('#error-password').text('');
                $('#error-alamat').text('');
                $('#error-no_telpon').text('');
                $('#error-jenis-kelamin').text('');



                $.ajax({
                    url: "{{ route('guru.store') }}",
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
                        $('#error-name').text(response.responseJSON.errors.name);
                        $('#error-alamat').text(response.responseJSON.errors.alamat);
                        $('#error-nip').text(response.responseJSON.errors.nip);
                        $('#error-jenis-kelamin').text(response.responseJSON.errors.jenis_kelamin);
                        $('#error-no_telpon').text(response.responseJSON.errors.no_telpon);
                        $('#error-emial').text(response.responseJSON.errors.emial);
                        $('#error-peassword').text(response.responseJSON.errors.peassword);
                    }
                });
            });
            $('#select2_rooms').select2({
            placeholder: "Pilih Gender",
            allowClear: true,
            ajax: {
                url: "{{ route('get-genders') }}",
                allowClear: true,
                type: 'POST',
                delay: 250,
                data: function(params) {
                    return {
                        "_token": "{{ csrf_token() }}",
                        search: params.term // search term
                    };
                },
                processResults: function(response) {
                    // console.log(response.room);
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });

        });
    </script>
@endsection
