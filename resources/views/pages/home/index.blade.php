@extends('../layout.main')
@section('content')

<div class="container-fluid dashboard-default-sec">
    <div class="row">
      <div class="col-xl-12 box-col-12 des-xl-100">
        <div class="row">
          <div class="col-xl-12 col-md-12 box-col-12 des-xl-100">
            <div class="card profile-greeting" style="margin-top: 20px;">
              <div class="card-header">
                <div class="header-top">
                  <div class="setting-list bg-primary position-unset">
                    <ul class="list-unstyled setting-option">
                      <li>
                        <div class="setting-primary"></div>
                      </li>
                    </ul>

                </div>
            </div>
        </div>
        <div class="card-body text-center p-t-5">
          <h3 class="font-light">Welcome Back, {{ Auth::user()->name }} !!</h3>
          <p id="demo"></p>
          <button class="btn btn-light mybtn1" onclick="myFunction()">Click Me </button>
        </div>

    </div>
    </div>
</div>
</div>
</div>
</div>



<script>
    function myFunction() {
      document.getElementById("demo").innerHTML = "Welcome to the viho Family! we are glad that you are visite this dashboard. we will be happy to help you grow your business.";
    }
    </script>








@endsection
