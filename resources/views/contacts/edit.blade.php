@extends('welcome')
@section('contant')
<div class="container">
    <div class="row">
        <h3 class="text-center">ADD Students</h3><hr>
        <div class="col-md-9">
            <form enctype="multipart/form-data" action="{{route('contacts.update',$contacts->id)}}" method="post">
                @csrf
                @method('PUT')
                <div class="form-group">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{$contacts->name}}" placeholder="Name">
                </div>
                <br>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" value="{{$contacts->email}}" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">phNumber</label>
                    <input type="number" name="phone" class="form-control" id="formGroupExampleInput" value="{{$contacts->phone}}" placeholder="phone">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Address</label>
                    <input type="text" name="address" class="form-control" id="formGroupExampleInput2" value="{{$contacts->address}}" placeholder="address">
                </div>
                
                  <p class="text-primary"> {{session('message')}}</p>
                  @foreach ($errors->all() as $error)
                  <p class="text-danger"> {{$error}} <br></p>
                      
                  @endforeach
                  <br>
                <button type="submit" class="btn btn-primary">Sumit</button>
              </form>
        </div>
    </div>

</div>


@endsection