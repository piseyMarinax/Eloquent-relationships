<div class="mrg20"></div>
@if(session('success'))
<div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert">&times;</a> {{ session('success')}}
</div>
@endif @if(session('fail'))
<div class="alert alert-danger alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="閉じる">&times;</a> {{ session('fail')}}
</div>
@endif