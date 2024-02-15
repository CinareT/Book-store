@extends('admin.layout.master')
@section('title', 'Create')

@section('content')

<div class="content-wrapper ">
   
<div   class="card card-primary ml-2 mt-3">
    <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
             <!--  /.card-header -->
              <!-- form start -->
               <form enctype="multipart/form-data" method="post" action="{{route('store.products_store_image', ['id' => $id])}}">
                @csrf
                

                  <div class="form-group">
                    <label for="exampleInputEmail1">Image </label>
                    <input name="img" value="" type="file" class="form-control" id=""  >
                  </div>

                <!--  /.card-body -->

               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
    </div>


</div>


@endsection 
