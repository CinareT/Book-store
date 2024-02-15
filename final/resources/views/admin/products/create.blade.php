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
               <form enctype="multipart/form-data" method="post" action="{{route('store.products.store')}}">
                @csrf
                
                  <div class="form-group">
                    <label for="exampleInputEmail1">Author </label>
                    <input name="author" value="" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter author">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Title </label>
                    <input name="title" value="" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter title">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Price </label>
                    <input name="price" value="" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter price">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Percent </label>
                    <input name="percent" value="" type="text" class="form-control" id="exampleInputEmail1"  placeholder="Enter percent">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Image </label>
                    <input name="main_image" value="" type="file" class="form-control" id="exampleInputEmail1"  >
                  </div>

                  <div class="form-group">

<label for="exampleSelectBorderWidth2">Select related category</label>
<select name="category_id" class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
  <option value="0">Main category</option>
  @foreach($categories as $category)
  <option value="{{$category->id}}">{{$category->title}}</option>
  @endforeach

</select>
</div>

                <!--  /.card-body -->

               <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
    </div>


</div>


@endsection 
