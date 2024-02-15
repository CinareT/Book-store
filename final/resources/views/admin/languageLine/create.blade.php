<!-- @extends('admin.layout.master')
@section('title', 'Language Line Create')
@push('theme')
    <script src="{{asset('admin\plugins\js\editors\summernote\summernote.min.js')}}"></script>
    <script src="{{asset('admin\demo_pages\editor_summernote.js')}}"></script>
@endpush
@section('content')
@include('admin.layout.includes.alert')
<form style="margin-left:250px;" action="{{route('languageLine.store')}}" method="POST" class="row">
    @csrf
    <div class="col-md-8">
        <div class="card">
            <div class="card-body">
                <ul class="nav nav-tabs nav-tabs-solid border-0">
                    @foreach($langs as $key=>$lang)
                    <li class="nav-item"><a href="#{{$lang}}" class="nav-link {{$key === 0 ? 'active' : ''}}" data-toggle="tab">{{$lang}}</a></li>
                    @endforeach
                </ul>

                <div class="tab-content">
                    @foreach($langs as $key=>$lang)
                    <div class="tab-pane fade {{$key === 0 ? 'show active' : ''}}" id="{{$lang}}">
                        <div class="card">
                            <div class="card-body">
                                <fieldset>
                                    <div class="form-group">
                                        <label>Text:</label>
                                        <input type="text" class="form-control" name="text[{{$lang}}]" value="{{ old('text.' . $lang) }}">
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>



            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label>Group:</label>
                    <input type="text" name="group" class="form-control">
                </div>
                <div class="form-group">
                    <label>Key:</label>
                    <input type="text" name="key" class="form-control">
                </div>

            </div>
        </div>
        <div class="text-right">
            <button type="submit" class="btn btn-primary">Submit form <i class="icon-paperplane ml-2"></i></button>
        </div>
    </div>

</form>
@endsection -->
