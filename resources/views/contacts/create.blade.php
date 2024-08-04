@extends('welcome')
@section('contant')
<div class="container">
    <div class="row">
        <h3 class="text-center">ADD Contact</h3><hr>
        <div class="col-md-9">
            <form enctype="multipart/form-data" action="/contacts" method="post">
                @csrf
                <div class="form-group">
                  <label for="formGroupExampleInput">Name</label>
                  <input type="text" name="name" class="form-control" id="formGroupExampleInput" value="{{old('name')}}" placeholder="Name">
                </div>
                <br>
                <div class="form-group">
                    <label for="formGroupExampleInput2">Email</label>
                    <input type="email" name="email" class="form-control" id="formGroupExampleInput2" value="{{old('email')}}" placeholder="email">
                </div>
                <div class="form-group">
                    <label for="formGroupExampleInput">phNumber</label>
                    <input type="number" name="phone" class="form-control" id="formGroupExampleInput" value="{{old('phone')}}" placeholder="phone">
                </div>

                <div class="form-group">
                    <label for="formGroupExampleInput2">Address</label>
                    <input type="text" name="address" class="form-control" id="formGroupExampleInput2" value="{{old('address')}}" placeholder="address">
                </div>
                
                    @if (session('message'))
                      <div class="alert alert-success">
                        {{ session('message') }}
                      </div>
                     @endif
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