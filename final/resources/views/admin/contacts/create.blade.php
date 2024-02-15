@extends('admin.layout.master')

@section('content')
<div class="content-wrapper" >
    <div class="card card-primary" style="margin-left:10px">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{route('store.contacts.store')}}">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input name="address" value="{{old('address.')}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Phone number</label>
                    <input name="phone_number" value="{{old('phone_number.')}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter phone number">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email</label>
                    <input name="email" value="{{old('email.')}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  </div>
             
                <div class="card-body">
                  
                  <div class="form-group">
                
                </div>
       
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>
@endsection
