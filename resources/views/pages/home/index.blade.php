@extends('../layout.main')
@section('content')
    <div class="container-fluid dashboard-default-sec">
        <div class="row">
            <div class="col-xl-12 box-col-12 des-xl-100">
                <div class="row">
                    <div class="col-xl-12 col-md-12 box-col-12 des-xl-100">
                        <div class="card profile-greeting">
                            <div class="card-header">
                                <div class="header-top">
                                <div class="setting-list bg-primary position-unset">
                                        <ul class="list-unstyled setting-option">
                                            <li><i class="view-html fa fa-code font-white"></i></li>
                                            <li><i class="icofont icofont-maximize full-card font-white"></i></li>
                                            <li><i class="icofont icofont-minus minimize-card font-white"></i></li>
                                            <li><i class="icofont icofont-refresh reload-card font-white"></i></li>
                                            <li><i class="icofont icofont-error close-card font-white"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body text-center p-t-0">
                                <h3 class="font-light">Welcome Back, {{ $user->name }} !!</h3>
                                <p>Welcome to the viho Family! we are glad that you are visite this dashboard. we will be
                                    happy to help you grow your business.</p>
                                <button class="btn btn-light">Update</button>
                            </div>
                            <div class="confetti">
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="confetti-piece"></div>
                                <div class="code-box-copy">
                                    <button class="code-box-copy__btn btn-clipboard"
                                        data-clipboard-target="#profile-greeting" title="Copy">
                                        <i class="icofont icofont-copy-alt"></i></button>

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
@endsection