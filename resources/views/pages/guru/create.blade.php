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
                            <form class="theme-form" id="form-guru">
                                @csrf
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">Email</label>
                                    <input class="form-control" id="exampleInputEmail1" value="{{ $data->nip }}" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" />
                                    <input type="hidden" id="id">
                                    <span class="text-danger" id=error-email></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Nama</label>
                                    <input class="form-control" id="exampleInputPassword1" value="{{ $data->name }}" name="name" type="text" placeholder="Name" />
                                    <span class="text-danger" id=error-name></span>
                                </div>
                                <div class="checkbox p-0">
                                    <input id="dafault-checkbox" type="checkbox" />
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
