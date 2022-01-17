<div id="alertbox">
  

@if (Session::get('success'))
          <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('success') }}</strong>
          </div>
@endif

@if (Session::get('fail'))
          <div class="alert alert-info alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ Session::get('fail') }}</strong>
          </div>
@endif

</div>