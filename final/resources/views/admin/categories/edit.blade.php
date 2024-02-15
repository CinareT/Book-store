@extends('admin.layout.master')
@section('title', 'Edit')

@section('content')

<div class="content-wrapper ">
   
<div   class="card card-primary ml-2 mt-3">
    <div class="card-header">
                <h3 class="card-title">Quick Example</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{route('store.categories.update', $category->id)}}">
                @csrf
                @method('PATCH')
                @foreach(LaravelLocalization::getSupportedLanguagesKeys() as $lang)
                <div class="form-group">
                    <label for="exampleInputEmail1">Title {{$lang}}</label>
                    <input name="title[{{$lang}}]" value="{{old('title.' .$lang, $category->getTranslation('title', $lang))}}" type="text" class="form-control" id="exampleInputEmail1" value="{{$category->getTranslation('title',$lang)}}" placeholder="Enter title">
                  </div>
                  @if($errors->has('title.' .$lang))
                      <div class="alert alert-danger mt-2" role="alert">
                           {{$errors->first('title.' .$lang)}}
                      </div>
                  @endif
                @endforeach

                <div class="card-body">

                  <div class="form-group">
                  <label for="exampleSelectBorderWidth2">Select related category</label>
                  <select name="category_id" class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
                    <option value="0">Main category</option>
                    @foreach($categories as $relatedCategory)
                    <option value="{{$relatedCategory->id}}" {{$category->category_id == $relatedCategory->id ? 'selected' : '' }}>{{$relatedCategory->title}}</option>
                    @endforeach

                  </select>
                </div>

                  <div class="form-check">
                    <input name="status" type="checkbox" class="form-check-input" id="exampleCheck1" {{ $category->status ? 'checked' : ''}}>
                    <label class="form-check-label" for="exampleCheck1">Status</label>
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