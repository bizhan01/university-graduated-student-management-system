@extends('layouts.master')
@section('content')
<!-- Content -->
<b></br>
<div class="">
  <div class="container-fluid">
    <div class="row row-md">
      <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
        <div class="box bg-white user-3 img-cover" style="background-image: url(img/photos-1/6.jpg);">
          <center class="avatar box-64 mb-2" style="margin-right: 40%; margin-bottom: -20px">
            <img class="b-a-radius-circle shadow-success" src="/UploadedImages/{{Auth::user()->profileImage}}" alt="">
          </center>
          <div class="u-content">
            <h5><a class="text-white" href="#">  {{ Auth::user()->name }}</a></h5>
            <div class="text-xs-center">
              <a  href="{{ route('logout') }}"
                 onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">
                <button type="submit" class="btn btn-danger btn-rounded mx-0-5">خروج<i class="ti-close ml-0-5"></i></button>
             </a>

              <a href="{{ route('profile') }}"><button type="submit" class="btn btn-success btn-rounded mx-0-5">پروفایل<i class="ti-check ml-0-5"></i></button></a>
            </div>
          </div>

        </div>
      </div>

      <div class="col-lg-8 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block bg-white">
          <div class="box box-block bg-white">
            <h5 class="mb-2">آمار کلی رضایت مندی محصلین</h5>
            <p class="mb-0-5">ریاست <span class="float-xs-right">@if($y1 !=0){{$x1 / $y1}}%@endif</span></p>
            <progress class="progress progress-success progress-sm" value="@if($y1 !=0){{$x1 / $y1}}@endif" max="100">100%</progress>
            <p class="mb-0-5">برنامه درسی<span class="float-xs-right">@if($y2 !=0){{$x2 / $y2}}%@endif</span></p>
            <progress class="progress progress-danger progress-sm" value="@if($y2 !=0){{$x2 / $y2}}@endif" max="100">100%</progress>
            <p class="mb-0-5">محیط درسی<span class="float-xs-right">@if($y3 !=0){{$x3 / $y3}}%@endif</span></p>
            <progress class="progress progress-info progress-sm" value="@if($y3 !=0){{$x3 / $y3}}@endif" max="100">100%</progress>
            <p class="mb-0-5">کارمندان اداری<span class="float-xs-right">@if($y4 !=0){{$x4 / $y4}}%@endif</span></p>
            <progress class="progress progress-primary progress-sm" value="@if($y4 !=0){{$x4 / $y4}}@endif" max="100">100%</progress>
            <p class="mb-0-5">فیس و مالی<span class="float-xs-right">@if($y5 !=0){{$x5 / $y5}}%@endif</span></p>
            <progress class="progress progress-success progress-sm" value="@if($y5 !=0){{$x5 / $y5}}@endif" max="100">100%</progress>
            <p class="mb-0-5">سایر موارید<span class="float-xs-right">@if($y6 !=0){{$x6 / $y6}}%@endif</span></p>
            <progress class="progress progress-primary progress-sm mb-0" value="@if($y6 !=0){{$x6 / $y6}}@endif" max="100">100%</progress>
          </div>
        </div>
      </div>

    </div>

    <div class="row row-md">
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-info mb-2" style="border-radius: 30px 0px;">
          <div class="t-icon right"><i class="ti-shopping-cart-full"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$studentCount}}</h1>
            <h6 class="text-uppercase">محصلین</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-success mb-2" style="border-radius: 30px 0px;">
          <div class="t-icon right"><i class="ti-bar-chart"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$jobCount}}</h1>
            <h6 class="text-uppercase">فرصت ها</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-primary mb-2" style="border-radius: 30px 0px;">
          <div class="t-icon right"><i class="ti-package"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$opinionCount}}</h1>
            <h6 class="text-uppercase">نظریات</h6>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
        <div class="box box-block tile tile-2 bg-warning mb-2" style="border-radius: 30px 0px;">
          <div class="t-icon right"><i class="ti-receipt"></i></div>
          <div class="t-content">
            <h1 class="mb-1">{{$advertisementCount}}</h1>
            <h6 class="text-uppercase">آگاهی ها</h6>
          </div>
        </div>
      </div>
    </div>


  </div>
</div>



@endsection
