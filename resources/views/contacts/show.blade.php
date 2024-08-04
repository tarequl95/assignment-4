@extends('welcome')
@section('contant')

<div class="container">
    <div class="row">
        
        <h3 class="text-center">Contact List</h3><hr>
       
        <div class="col-md-12">
            <table class="table">
                <thead>
                  <tr>
                   
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">address</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   
                    
                  <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->phone}}</td>
                    <td>{{$contact->address}}</td>
                    <td>
                      
                        <a href="{{url('/contacts'.'/'.$contact->id.'/edit')}}"><button type="button" class="btn btn-info">edit</button></a>
                        <form action="{{route('contacts.destroy',$contact->id)}}" method="delete">
                          <button type="button" class="btn btn-danger">delete</button>
                        </form>
                      
                    </td>
                  </tr>
                
                </tbody>
              </table>

        </div>
    </div>

</div>
@endsection
