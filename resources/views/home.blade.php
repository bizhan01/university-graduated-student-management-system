@if(auth()->user()->isAdmin == 0 && auth()->user()->status == 1)
	@include('adminDashborad')
@elseif(auth()->user()->isAdmin == 1 && auth()->user()->status == 1)
	@include('studentDashborad')
	@else
	  @include('blocked')
	@endif
