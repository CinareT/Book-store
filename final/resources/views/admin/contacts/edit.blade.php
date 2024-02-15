@extends('admin.layout.master')

@section('content')
<div class="content-wrapper" >
    <div class="card card-primary" style="margin-left:10px">
              <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="{{ route('store.contacts.update', $contact->id) }}">

                @csrf
                @method('PUT')
                <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input name="address" type="text" class="form-control" id="exampleInputEmail1" value="{{ old('address', $contact->address) }}" placeholder="Enter address">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input name="phone_number" type="text" class="form-control" id="exampleInputEmail1" value="{{ old('phone_number', $contact->phone_number) }}" placeholder="Enter phone number">
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input name="email" type="text" class="form-control" id="exampleInputEmail1" value="{{ old('email', $contact->email) }}" placeholder="Enter email">
</div>

               
                <div class="card-body">
                  
                  <div class="form-group">
                
                </div>
                  
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
</div>
@endsection
