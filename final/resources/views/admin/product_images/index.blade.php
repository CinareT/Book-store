@extends('admin.layout.master')
@section('title', 'Home')

@section('content')
  <style>
    img.active {
        display: block; 
        border: 4px solid red;
    }
  </style>

  @include('admin.layout.includes.alert')


<div class="content-wrapper">
  
  <div class="card-body">
                <a href="{{route('store.products_add_image', ['id' => $id])}}" class="btn btn-success mb-3">Create</a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                     
                      <th>Img</th>


                      <th>Images</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($images as $image)
                     <tr>
                      <td>
                        <a  href="{{route('store.add_main_image', ['id' => $image->id, 'product_id'  => $id])}}">         
                           <img class = "{{$image->is_main == 1 ? 'active': '' }}" style="width: 150px; height: 100px" src="{{asset($image->img)}}" alt="">
                        </a>
                      </td>
                      

                     </tr>
                    @endforeach


                  </tbody>
                </table>
  </div>
</div>
@endsection
