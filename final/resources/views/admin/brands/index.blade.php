@extends('admin.layout.master')
@section('title', 'Home')

@section('content')

  @include('admin.layout.includes.alert')
<div class="content-wrapper">
  
  <div class="card-body">
                <a href="{{route('store.brands.create')}}" class="btn btn-success mb-3">Create</a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Title</th>
                      <th>Slug</th>
                      <th style="width: 40px">Status</th>
                      <th>Controlls</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($brands as $brand)
                    <tr>
                      <td>{{$brand->id}}</td>
                      <td>{{$brand->title}}</td>
                      <td>{{$brand->slug}}</td>
                      
                      <td>{{$brand->status}}</td>

                      <td><a href="{{route('store.brands.edit', $brand->id)}}" style=" width: 61px; margin-left: 5px; padding:13 20px;" class="btn btn-success">Edit</a>
                      <form onsubmit ="return confirm('are you sure?')" method="post" action="{{route('store.brands.destroy', $brand->id)}}">
                         @method('delete')
                         @csrf 
                         <input type="submit" style="width: 63px;" class="btn btn-outline-danger m-1" value="Delete">
                    </form>
                    </td>
                    </tr>
                    @endforeach


                  </tbody>
                </table>
  </div>
</div>
@endsection