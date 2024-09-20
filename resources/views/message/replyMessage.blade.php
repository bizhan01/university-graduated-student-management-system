@extends('layouts.master')
@section('content')
<!-- Content -->
  <div class="content-area py-1">
    <div class="container-fluid">

      <nav class="navbar navbar-light bg-white b-a mb-2">
        <table class="table table-hover mail-items mb-0">
          <tbody>
              <tr class="unread">
                <td class="mail-item-sender">
                  <a class="mail-item-important" href="#">
                    <i class="fa fa-bookmark fa-rotate-90"></i>
                  </a>
                  <a class="avatar box-32 mr-0-5" href="#">
                    <img class="b-a-radius-circle" src="../UploadedImages/<?php echo $message[0]->profileImage; ?>" alt="">
                  </a>
                  <a href="#"><?php echo $message[0]->name; ?></a>
                </td>
                <td>
                  <i class="fa fa-circle text-info mr-0-5"></i>
                  <a href="#"><?php echo $message[0]->subject; ?></a>
                </td>
                <td class="mail-item-time" colspan="3">
                  <?php echo $message[0]->created_at; ?>
                </td>
              </tr>
          </tbody>
        </table>

        <form action = "/updateMessage/<?php echo $message[0]->id; ?>" method = "post" enctype="multipart/form-data" >
          <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">

          <input type="hidden" name="sender_id" value="<?php echo $message[0]->sender_id; ?>">
          <input type="hidden" name="subject" value="<?php echo $message[0]->subject; ?>">
          <input type="hidden" name="message" value="<?php echo $message[0]->message; ?>">
          <p>
            <?php echo $message[0]->message; ?>
          </p>
           <div class="row form-group">
 					   <div class="col-md-12">
               <textarea name="reply" rows="8" cols="40" class="form-control" placeholder="پاسخ..."><?php echo $message[0]->reply; ?></textarea>
 				  	 </div>
 				   </div>

        <input type="hidden" name="replier_id" value="{{ Auth::user()->id}}">
        <input type="hidden" name="status" value="1">

				 <div class="row form-group">
					 <div class="col-md-6">
             <button type="submit" class="btn btn-outline-success mb-0-25 waves-effect waves-light">
              <i class="fa fa-mail-reply"></i>
              <span>پاسخ</span>
            </button>
					 </div>
				</div>
			 @include('layouts.errors')
        </form>
      </nav>
    </div>
  </div>
@endsection
