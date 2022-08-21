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
                        <div class="card-header pb-0">
                            <h5>Tambah Data Guru</h5>
                        </div>
                        <div class="card-body">
                            <form class="theme-form" action="{{ route('guru.store') }}" id="form-guru" method="POST">
                                @csrf
                                {{-- @method('POST') --}}
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">NIP</label>
                                    <input class="form-control" id="exampleInputEmail1" type="text" name="nip" aria-describedby="emailHelp" placeholder="Masukkan NIP anda" />
                                    <input type="hidden" id="id">
                                    <span class="text-danger" id=error-email></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Nama</label>
                                    <input class="form-control" id="exampleInputPassword1" name="name" type="text" placeholder="Masukkan nama anda" />
                                    <span class="text-danger" id=error-name></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Email</label>
                                    <input class="form-control" id="exampleInputPassword1" name="email" type="email" placeholder="Masukkan email anda" />
                                    <span class="text-danger" id=error-email></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">password</label>
                                    <input class="form-control" id="exampleInputPassword1" name="password" type="password" placeholder="**********"/>
                                    <span class="text-danger" id=error-password></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Tempat Lahir</label>
                                    <input class="form-control" id="exampleInputPassword1" name="tempat_lahir" type="text" placeholder="-- Tempat Lahir --"/>
                                    <span class="text-danger" id=error-password></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Tanggal Lahir</label>
                                    <input class="form-control" id="exampleInputPassword1" name="tanggal_lahir" type="date" placeholder="Tanggal Lahir anda"/>
                                    <span class="text-danger" id=error-tanggal_lahir></span>
                                </div>
                                <label class="col-form-label pt-0" >Peran</label>
                                <select class="form-select"  aria-label="select example">
									<option value="">-- Pilih Peran --</option>
									@foreach ($role as $roles )
									<option value="{{ $roles->id }}">{{ $roles->role }}</option>
                                    @endforeach
								</select>
                                <div class="mb-3 mt-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Alamat</label>
                                    <input class="form-control" id="exampleInputPassword1" name="alamat" type="text" placeholder="alamat anda"/>
                                    <span class="text-danger" id=error-alamat></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0">No Telp</label>
                                    <input class="form-control" id="phone" name="no_telp" type="tel" placeholder="Masukkan No Telphone"  pattern="[0-9]{12}"/>
                                    <span class="text-danger" id=error-no_telp></span>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary submit">Submit</button>
                            <a href="{{ route('guru.index') }}"><button class="btn btn-secondary" >Cancel</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


    <script>
        $(document).ready(function() {

$('#form-guru').on('submit', function(event) {
    event.preventDefault();
    var formData = new FormData(this);
    $('#nama-error').text('');
    $('#alamat-error').text('');
    $('#singkatan').text('');
    $('#no-telepon-error').text('');
    $('#email-error').text('');
    $('#tagline-error').text('');
    $('#nama-facebook-error').text('');
    $('#nama-instagram-error').text('');
    $('#nama-youtube-error').text('');
    $('#link-facebook-error').text('');
    $('#link-instagram-error').text('');
    $('#link-youtube-error').text('');
    $('#no-telepon-error').text('');
    $('#deskripsi-error').text('');
    $('#gambar-error').text('');

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
            $('#nama-error').text(response.responseJSON.errors.nama);
            $('#singkatan-error').text(response.responseJSON.errors.singkatan);
            $('#alamat-error').text(response.responseJSON.errors.alamat);
            $('#tagline-error').text(response.responseJSON.errors.tagline);
            $('#no-telepon-error').text(response.responseJSON.errors.no_telepon);
            $('#email-error').text(response.responseJSON.errors.email);
            $('#nama-facebook-error').text(response.responseJSON.errors.nama_facebook);
            $('#nama-instagram-error').text(response.responseJSON.errors.nama_instagram);
            $('#nama-youtube-error').text(response.responseJSON.errors.nama_youtube);
            $('#link-facebook-error').text(response.responseJSON.errors.link_facebook);
            $('#link-instagram-error').text(response.responseJSON.errors.link_instagram);
            $('#link-youtube-error').text(response.responseJSON.errors.link_youtube);
            $('#deskripsi-error').text(response.responseJSON.errors.deskripsi);
            $('#gambar-error').text(response.responseJSON.errors.gambar);
        }
    });
});



 });

    </script>

@endsection
