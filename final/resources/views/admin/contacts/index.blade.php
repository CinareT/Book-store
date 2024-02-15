
@extends('admin.layout.master')

@section('content')
<div class="content-wrapper">
<div class="card-body">
<a href="{{route('store.contacts.create')}}" class="btn btn-success mb-3">create</a>
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>Address</th>
                      <th>Phone</th>
                      <th style="width: 40px">Email</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($contacts as $contact)
                    <tr>
                        <td>{{ $contact->address }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->email }}</td>
                        <td style="display: flex; justify-content: space-evenly; align-items: center; ">

    <a href="{{ route('store.contacts.edit', ['id' => $contact->id]) }}" class="btn btn-success">Edit</a>

    <form onsubmit="return confirm('Are you sure bro?')" method="post" action="{{ route('store.contacts.destroy', ['contact' => $contact->id]) }}">

        @method('delete')
        @csrf

        <input type="submit" style="width: 150px; " class="btn btn-outline-danger m1" value="Delete">

    </form>

</td>

                    </tr>
                @endforeach
      
                    </tr>
                    </td>
                      
                    
                  
                  </tbody>
                </table>
              </div>
</div>
@endsection
