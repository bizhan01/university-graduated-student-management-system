<!-- Sidebar -->
<div class="site-overlay"></div>
<div class="site-sidebar" style="background-color: #a9c83e;">
  <div class="custom-scroll custom-scroll-light" style="color: black">
    <ul class="sidebar-menu" >
      <li class="menu-title" >مینو ها</li>

      <li class="with-sub" >
        <a href="/" class="waves-effect  waves-light">
          <span class="s-icon"><i class="ti-anchor"></i></span>
          <span class="s-text">داشبورد</span>
        </a>
      </li>

      <!-- students -->
      <li class="with-sub <?php if (Auth::user()->isAdmin == '1'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="ti-id-badge"></i></span>
          <span class="s-text">محصلین</span>
        </a>
        <ul>
          <li><a href="{{ route('addStudent') }}">ثبت محصل جدید</a></li>
          <li><a href="{{ route('softStudentList') }}">لیست محصلین  انجنیری نرم افزار</a></li>
          <li><a href="{{ route('itStudentList') }}">لیست محصلین  تکنالوژی معلوماتی</a></li>
          <li><a href="{{ route('blockList') }}">محصلین  غیر برحال</a></li>
        </ul>
      </li>

      <!-- Jobs  -->
      <li class="with-sub">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="ti-id-badge"></i></span>
          <span class="s-text">فرصت های شغلی</span>
        </a>
        <ul>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '1'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{ route('jobs') }}">افزودن</a></li>
          <li><a href="{{ route('jobsList') }}">لیست  فرصت ها</a></li>
        </ul>
      </li>

      <li class="with-sub">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="ti-id-badge"></i></span>
          <span class="s-text">درخواست</span>
        </a>
        <ul>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '0'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{ route('applications') }}">درخواست های من</a></li>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '1'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{ route('applicationsList') }}">لیست در خواست ها</a></li>
        </ul>
      </li>

      <!-- Opinions -->
      <li class="with-sub">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="ti-id-badge"></i></span>
          <span class="s-text">نظرات محصلین</span>
        </a>
        <ul>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '0'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{ route('opinionList') }}"><a href="{{ route('opinions') }}">ثبت نظریه</a></li>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '1'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{ route('opinionList') }}">نظر سنجی ها</a></li>
        </ul>
      </li>


      <li class="with-sub <?php if (Auth::user()->isAdmin == '1'): ?>
            <?php echo 'hide' ?>
          <?php endif ?>">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-bullhorn"></i></span>
          <span class="s-text">تبلیغات</span>
        </a>
        <ul>
          <li><a href="{{route('advertisement')}}">افزودن</a></li>
        </ul>
      </li>

      <li class="with-sub">
        <a href="#" class="waves-effect  waves-light">
          <span class="s-caret"><i class="fa fa-angle-down"></i></span>
          <span class="s-icon"><i class="fa fa-bullhorn"></i></span>
          <span class="s-text">پیام ها</span>
        </a>
        <ul>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '0'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{route('messages')}}">ارسال</a></li>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '0'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{route('receivedMessages')}}">دریافت شده</a></li>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '1'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{route('inbox')}}">پیام های جدید</a></li>
          <li class="with-sub <?php if (Auth::user()->isAdmin == '1'): ?>
                <?php echo 'hide' ?>
              <?php endif ?>"><a href="{{route('sendbox')}}">پاسخ داده شده</a></li>
        </ul>
      </li>

    </ul>
  </div>
</div>

<!-- Aside End -->
