@section('title', 'Home')

@if($errors->any())
  <div class="row">
    @foreach($errors->all() as $error)
     <div class="col-lg-12">
        <div class="alert alert-danger border-0 alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span></span></button>
            {{$error}}
        </div>

     </div>

    @endforeach
  </div>
@endif

@if(session('message'))
  <div class="alert alert-{{session('type') }} border-0 alert-dismissible">
     <button type="button" class="close" data-dismiss="alert"><span></span></button>
      {{session('message')}}
  </div>
@endif

