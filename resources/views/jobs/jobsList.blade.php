@extends('layouts.master')
@section('content')
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">

        <!-- Jobs -->
     <div class="col-md-8">
       <div class="">
   			  @include('layouts.errors')
        </div>
       @foreach($jobs as $job)
        <div class="box box-block bg-white">
          <div class="box bg-white post post-1">
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
               <tbody>
                 <tr>
                   <td>
                       <h1 style="color: #24222f; font-size: 20px; font-weight: bold">{{$job->title}}</h1>
                       <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; border: 1px solid #eee;">
                           <tr style="background-color:  #a9c83e;">
                               <td style=" padding: 8px 12px;">
                                   <span style="font-weight: bold; text-transform: uppercase;">عنوان وظیفه</span>
                               </td>
                               <td style="width: 80%; text-align: right; padding: 8px 12px;">
                                   <span style="font-weight: bold; white-space: nowrap;">{{$job->title}}</span>
                               </td>
                           </tr>
                           <tr>
                               <td style="text-align: right; padding: 8px 12px;"style="padding: 0px;">
                                   <a href="#">محل وظیفه</a>
                               </td>
                               <td style="width: 20%; text-align:  right; padding: 8px 12px;">
                                   {{$job->branch}}
                               </td>
                           </tr>
                           <tr style="background-color: #eee;">
                               <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">تایم کاری</a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                   {{$job->shift}}
                               </td>
                           </tr>
                           <tr>
                               <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">جنسیت</a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                   {{$job->gender}}
                               </td>
                           </tr>
                           <tr style="background-color: #eee;">
                               <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">بخش/رشته </a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                   {{$job->field}}
                               </td>
                           </tr>
                           <tr>
                               <td style="text-align: right; padding: 8px 12px;">
                                  <a href="#"> تجربه کاری </a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                   {{$job->experience}} سال
                               </td>
                           </tr>
                           <tr style="background-color: #eee;">
                               <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">توضیحات بیشتر... </a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">

                               </td>
                           </tr>
                       </table>
                       <br>
                       <p>{{$job->description}}</p>
                     <div class="col-lg-4"></div>
                      <div class="<?php if (Auth::user()->isAdmin == '0'): ?>
                            <?php echo 'hide' ?>
                          <?php endif ?>">
                        <form method="POST" action="{{ route('addApplication') }}">
                         {{ csrf_field() }}
                         <input type="hidden" name="job_id" value="{{$job->id}}">
                           <div class="col-md-3">
                             <input type="submit" name="submit" value="ارسال درخواست" class="btn btn-primary form-control" >
                           </div>
                       </form>
                      </div>
                      <div class="<?php if (Auth::user()->isAdmin == '1'): ?>
                            <?php echo 'hide' ?>
                          <?php endif ?>">
                         <div class="col-md-5">
                           <a href="applicantList/{{$job->id}}"><button type="button" name="button" class="btn  btn-rounded btn-success" >درخواست های ارسال شده</button></a>
                         </div>
                      </div>
                      <br></br>
                   </td>
               </tr>
             </tbody>
           </table>
          </div>
        </div>
        @endforeach
      </div>




      <div class="col-md-4">
        <!-- Advertisement -->
        @foreach($advertisements as $adv)
          <div class="box  post post-5 img-cover" style="background-image: url(/UploadedImages/adv/{{$adv->image}});">
            <div class="p-content">
              <a href="/UploadedImages/adv/{{$adv->image}}"><span class="tag" style="background-color: #7f9d18">نمایش آگاهی</span></a>
              <div class="p-info clearfix">
                <div class="float-xs-left">
                  <a class="text-white" href="#"><i class="fa  fa-thumbs-up"></i>57</a>
                </div>
                <div class="float-xs-right">
                  <a class="text-white" href="#"><i class="fa fa-thumbs-down"></i>8</a>
                </div>
              </div>
            </div>
          </div>
        @endforeach
         </div>
      </div>
    </div>
  </div>
@endsection
