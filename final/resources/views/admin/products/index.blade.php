@extends('admin.layout.master')

@section('content')
<div class="content-wrapper" style="min-height: 300.667px; width:100%;">
<div class="card-body">
<a href="{{route('store.products.create')}}" class="btn btn-success mb-3">create</a>
                <table class="table table-bordered">
                  <thead>
                    <tr>

                      <th>Author</th>
                      <th>Title</th>
                      <th style="width: 40px">Image</th>
                     <th>Price</th>
                     <th>Percent</th>
                     <th>images</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($products as $product)
                    <tr>
                      <td>{{$product->author}}</td>
                      <td>{{$product->title}}</td>
                      <td>
                        <a target="_blank" href="{{asset($product->main_image($product->images))}}">
                        <img style="width: 150px; object-fit:cover;" src="{{asset($product->main_image($product->images))}}" alt="">

                        </a>
                      </td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->percent}}</td>
                      <td>
                        <a class="btn btn-success" href="{{route('store.product_images',$product->id)}}">images</a>
                        <a class="btn btn-primary" href="{{route('store.products_add_image', $product->id)}}">add image</a>
                      </td>
                      <td style="display: flex; justify-content:space-evenly; align-items:center; ">
                        <a href="{{route('store.products.edit', $product->id)}}" class="btn btn-success">edit</a>
                        <form onsubmit="return confirm('are you sure bro?')" method="post" action="{{route('store.products.destroy',$product->id)}}">
                      @method('delete')
                      @csrf
                      <input type="submit" style="width:150px; " class="btn btn-outline-danger m1" value="delete" type="text">
                  
                  </form>
      
                    </tr>
                    </td>
                      
                    @endforeach
                  
                  </tbody>
                </table>
              </div>
</div>
@endsection