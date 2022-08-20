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
                                    <input class="form-control" id="exampleInputEmail1" value="{{ $data->email }}" type="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" />
                                    <input type="hidden" id="id">
                                    <span class="text-danger" id=ërror-email></span>
                                </div>
                                <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputPassword1">Nama</label>
                                    <input class="form-control" id="exampleInputPassword1" value="{{ $data->name }}" name="name" type="text" placeholder="Name" />
                                    <span class="text-danger" id=ërror-name></span>
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

@endsection
