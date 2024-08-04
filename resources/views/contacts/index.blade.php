@extends('welcome')
@section('contant')
<div class="container">
    <div class="row">
        <div>
            <a href="{{url('/contacts/create')}}">
                <button type="button" class="btn btn-success">ADD new</button>
            </a>
        </div>
        <h3 class="text-center">Contact List</h3><hr>
           @if (session('message'))
              <div class="alert alert-success">
                  {{ session('message') }}
              </div>
          @endif
          @if (session('delete'))
          <div class="alert alert-danger">
              {{ session('delete') }}
          </div>
          @endif
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">number</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($contacts->all() as $contact)
                    
                  <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    
                    <td>
                       <a href="{{url('/contacts'.'/'.$contact->id)}}"><button type="button" class="btn btn-info">view</button></a>
                        <a href="{{url('/contacts'.'/'.$contact->id.'/edit')}}"><button type="button" class="btn btn-info">edit</button></a>
                        <form action=" {{route('contacts.destroy',$contact->id)}}" method="post">
                          @csrf
                          @method('DELETE')
                          <button type="submit" class="btn btn-danger">delete</button>
                        </form>
                        
                          
                      
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>

        </div>
    </div>

</div>
@endsection
