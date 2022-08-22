
@extends('../layout.main')
@section('content')



        <!-- Page Sidebar Ends-->

          <!-- Container-fluid starts-->
          	<div class="container-fluid">
    <div class="page-header">
      <div class="row">
        <div class="col-lg-6">
          <h3>Page</h3>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
		<li class="breadcrumb-item active">Page</li>
          </ol>
        </div>
        <div class="col-lg-6">
        </div>
      </div>
    </div>
</div>
	<div class="container-fluid">
	    <div class="email-wrap bookmark-wrap">
	        <div class="row">
	            <div class="col-xl-3">
	                <div class="email-sidebar">
	                    <a class="btn btn-primary email-aside-toggle" href="javascript:void(0)">contact filter </a>
	                    <div class="email-left-aside">
	                        <div class="card">
	                            <div class="card-body">
	                                <div class="email-app-sidebar left-bookmark">
	                                    <div class="media">
	                                        <div class="media-size-email"><img class="me-3 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/user/user.png" alt="" /></div>
	                                        <div class="media-body">
	                                            <a href="#"> <h6 class="f-w-700">{{ Auth::user()->name }}</h6></a>
	                                            <p>M{{ Auth::user()->email }}</p>
	                                        </div>
	                                    </div>
	                                    <ul class="nav main-menu contact-options" role="tablist">
	                                        <li class="nav-item"><span class="main-title mt-3"> Views</span></li>
	                                        <li>
	                                            <a id="pills-personal-tab" data-bs-toggle="pill" href="#pills-personal" role="tab" aria-controls="pills-personal" aria-selected="true"><span class="title">Guru</span></a>
	                                        </li>
	                                        <li>
	                                            <a class="show" id="pills-organization-tab" data-bs-toggle="pill" href="#pills-organization" role="tab" aria-controls="pills-organization" aria-selected="false">
	                                                <span class="title"> Siswa</span>
	                                            </a>
	                                        </li>
	                                    </ul>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	            <div class="col-xl-9 col-md-12 box-col-8">
	                <div class="email-right-aside bookmark-tabcontent contacts-tabs">
	                    <div class="card email-body radius-left">
	                        <div class="ps-0">
	                            <div class="tab-content">
	                                <div class="tab-pane fade active show" id="pills-personal" role="tabpanel" aria-labelledby="pills-personal-tab">
	                                    <div class="card mb-0">

                                            <div class="card-header d-flex">
                                                <h5>Guru</h5>

	                                            <span class="f-14 pull-right mt-0">{{ $data->count() }}Guru</span>


	                                        </div>
	                                        <div class="card-body p-0">
                                                <div class="row list-persons" id="addcon">
                                                    <div class="col-xl-4 xl-50 col-md-5 box-col-6">
                                                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                            @csrf
	                                                        <a
                                                            class="contact-tab-0 nav-link active"
                                                            id="v-pills-user-tab"
                                                            data-bs-toggle="pill"
                                                            onclick="activeDiv(0)"
                                                            href="#v-pills-user"
                                                            role="tab"
                                                            aria-controls="v-pills-user"
                                                            aria-selected="true"
	                                                        >
                                                            @foreach ($data as $guru)
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle update_img_0" src="https://laravel.pixelstrap.com/viho/assets/images/user/2.png" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6><span class="first_name_0">{{ $guru->name }}</span></h6>
	                                                                    <p class="email_add_0">{{ $guru->email }}</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
                                                            @endforeach
                                                            <a
                                                            class="contact-tab-0 nav-link active"
                                                            id="v-pills-user-tab"
                                                            data-bs-toggle="pill"
                                                            onclick="activeDiv(1)"
                                                            href="#v-pills-user"
                                                            role="tab"
                                                            aria-controls="v-pills-user"
                                                            aria-selected="false"
	                                                        >
                                                            </a>
	                                                    </div>
	                                                </div>
	                                                <div class="col-xl-8 xl-50 col-md-7 box-col-6">
	                                                    <div class="tab-content" id="v-pills-tabContent">
	                                                        <div class="tab-pane contact-tab-0 tab-content-child fade show active" id="v-pills-user" role="tabpanel" aria-labelledby="v-pills-user-tab">
	                                                            <div class="profile-mail">
	                                                                <div class="media align-items-center">
                                                                        <img class="img-100 img-fluid m-r-20 rounded-circle update_img_0" src="https://laravel.pixelstrap.com/viho/assets/images/user/2.png" alt="" />
	                                                                    <div class="media-body mt-0">
	                                                                        <h5><span class="first_name_0">{{ $guru->name }}</span></h5>
	                                                                        <p class="email_add_0">{{ $guru->email }}</p>
	                                                                    </div>
	                                                                </div>
	                                                                <div class="email-general">
	                                                                    <h6 class="mb-3">General</h6>
	                                                                    <ul>
	                                                                        <li>Name <span class="font-primary first_name_0">{{ $guru->name }}</span></li>


                                                                           <li>Gender <span class="font-primary">{{ $guru->gender->gender}}</span></li>

	                                                                        <li>
	                                                                            Tanggal Lahir<span class="font-primary"> <span class="birth_day_0">1{{ $guru->tanggal_lahir }}</span>
	                                                                        </li>
	                                                                        <li>Tempat Lahir<span class="font-primary personality_0">{{ $guru->tempat_lahir }}</span></li>
	                                                                        <li>Alamat<span class="font-primary city_0">{{ $guru->alamat }}</span></li>
	                                                                        <li>Email Address <span class="font-primary email_add_0">{{ $guru->email }}</span></li> </span></li>
	                                                                        <li>Website<span class="font-primary url_add_0">{{ $guru->no_telp }}</span></li>

	                                                                        <li>role<span class="font-primary interest_0">{{$guru->role->role == 'guru' }}</span></li>


	                                                                    </ul>
	                                                                </div>
	                                                            </div>
	                                                        </div>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <div class="fade tab-pane" id="pills-organization" role="tabpanel" aria-labelledby="pills-organization">
	                                    <div class="card mb-0">
	                                        <div class="card-header d-flex">
	                                            <h5>Organization</h5>
	                                            <span class="f-14 pull-right mt-0">10 Contacts</span>
	                                        </div>
	                                        <div class="card-body p-0">
	                                            <div class="row list-persons">
	                                                <div class="col-xl-4 xl-50 col-md-5 box-col-6">
	                                                    <div class="nav flex-column nav-pills" id="v-pills-tab1" role="tablist" aria-orientation="vertical">
	                                                        <a class="nav-link active" id="v-pills-iduser-tab" data-bs-toggle="pill" href="#v-pills-iduser" role="tab" aria-controls="v-pills-iduser" aria-selected="true">
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/user/user.png" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6>Mark jecno</h6>
	                                                                    <p>markjecno@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a class="nav-link" id="v-pills-iduser1-tab" data-bs-toggle="pill" href="#v-pills-iduser1" role="tab" aria-controls="v-pills-iduser1" aria-selected="false">
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/user/3.jpg" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6>Jason Borne</h6>
	                                                                    <p>jasonb@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a class="nav-link" id="v-pills-iduser2-tab" data-bs-toggle="pill" href="#v-pills-iduser2" role="tab" aria-controls="v-pills-iduser2" aria-selected="false">
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/user/4.jpg" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6>Sarah Loren</h6>
	                                                                    <p>barnes@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                        <a class="nav-link" id="v-pills-iduser3-tab" data-bs-toggle="pill" href="#v-pills-iduser3" role="tab" aria-controls="v-pills-iduser3" aria-selected="false">
	                                                            <div class="media">
	                                                                <img class="img-50 img-fluid m-r-20 rounded-circle" src="https://laravel.pixelstrap.com/viho/assets/images/user/10.jpg" alt="" />
	                                                                <div class="media-body">
	                                                                    <h6>Andew Jon</h6>
	                                                                    <p>andrewj@gmail.com</p>
	                                                                </div>
	                                                            </div>
	                                                        </a>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	    </div>
	</div>


          <!-- Container-fluid Ends-->
        </div>
      </div>
    </div>
@endsection
