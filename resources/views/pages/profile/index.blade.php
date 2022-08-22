@extends('../layout.main')
@section('content')
    <div class="container-fluid dashboard-default-sec">

        <div class="row">
            <div class="col-xl-8 col-md-12 box-col-8 6-xl-100">
                <div class="col-md-8">
                    <div class="card custom-card mt-5">
                        <div class="card-header"><img class="img-fluid"
                                src="https://laravel.pixelstrap.com/viho/assets/images/user-card/3.jpg" alt=""></div>
                        <div class="card-profile"><img class="rounded-circle"
                                src="https://laravel.pixelstrap.com/viho/assets/images/avtar/11.jpg" alt=""></div>
                        <ul class="card-social">
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-google-plus"></i></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-instagram"></i></a>
                            </li>
                        </ul>
                        <div class="text-center profile-details">
                            <a href="#">
                                <h4>{{ Auth::user()->name }}</h4>
                            </a>
                            <h6>{{ Auth::user()->role }}</h6>
                        </div>
                        <div class="container-fluid">
                            <div class="col-sm-8">
                                <div class="card">
                                    <div class="card-header pb-0">
                                        <h5>Sample Card</h5>
                                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                                    </div>
                                    <div class="card-body">
                                        <p>
                                            {{ Auth::user()->name }}
                                        </p>
                                        <p>
                                            {{ Auth::user()->email }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>


        </div>
    </div>



    <script></script>
@endsection
