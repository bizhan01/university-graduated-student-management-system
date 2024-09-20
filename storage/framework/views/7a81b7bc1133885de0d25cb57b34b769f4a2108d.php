<?php $__env->startSection('content'); ?>
<!-- Content -->
<div class="content-area py-1">
  <div class="container-fluid">
    <div class="row row-md mb-1">

        <!-- Jobs -->
     <div class="col-md-8">
       <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $job): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="box box-block bg-white">
          <div class="box bg-white post post-1">
            <center><h3>جدید ترین فرصت های شغلی </h3></center>
            <table border="0" cellpadding="0" cellspacing="0" style="width: 100%;">
               <tbody><tr>
                   <td>
                       <h1 style="color: #24222f; font-size: 20px; font-weight: bold"><?php echo e($job->title); ?></h1>
                       <table border="0" cellpadding="0" cellspacing="0" style="width: 100%; border: 1px solid #eee;">
                           <tr style="background-color:  #a9c83e;">
                               <td style=" padding: 8px 12px;">
                                   <span style="font-weight: bold; text-transform: uppercase;">عنوان وظیفه</span>
                               </td>
                               <td style="width: 80%; text-align: right; padding: 8px 12px;">
                                   <span style="font-weight: bold; white-space: nowrap;"><?php echo e($job->title); ?></span>
                               </td>
                           </tr>
                           <tr>
                               <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">محل وظیفه</a>
                               </td>
                               <td style="width: 20%; text-align:  right; padding: 8px 12px;">
                                   <?php echo e($job->branch); ?>

                               </td>
                           </tr>
                           <tr style="background-color: #eee;">
                               <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">تایم کاری</a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                   <?php echo e($job->shift); ?>

                               </td>
                           </tr>
                           <tr>
                               <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">جنسیت</a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                   <?php echo e($job->gender); ?>

                               </td>
                           </tr>
                           <tr style="background-color: #eee;">
                               <td style="text-align: right; padding: 8px 12px;">
                                   <a href="#">بخش/رشته </a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                   <?php echo e($job->field); ?>

                               </td>
                           </tr>
                           <tr>
                               <td style="text-align: right; padding: 8px 12px;">
                                  <a href="#"> تجربه کاری </a>
                               </td>
                               <td style="width: 20%; text-align: right; padding: 8px 12px;">
                                   <?php echo e($job->experience); ?> سال
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
                       <p><?php echo e($job->description); ?></p>
                   </td>
               </tr>
               </tbody>
           </table>
          </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>




      <div class="col-md-4">
        <!-- Advertisement -->
        <div class="box box-block bg-white">
          <div class="box box-block tile tile-2 bg-info mb-2">
            <div class="t-icon right"><i class="fa  fa-calendar"></i></div>
            <div class="t-content">
              <h1 class="text-uppercase" >
                <?php
                  echo  date("Y/m/d");
                ?>
              </h1>
            </div>
          </div>
        <?php $__currentLoopData = $advertisements; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $adv): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <div class="box  post post-5 img-cover" style="background-image: url(/UploadedImages/adv/<?php echo e($adv->image); ?>);">
            <div class="p-content">
              <a href="/UploadedImages/adv/<?php echo e($adv->image); ?>"><span class="tag" style="background-color: #7f9d18">نمایش آگاهی</span></a>
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
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </div>

      </div>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>