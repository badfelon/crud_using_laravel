<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
      <a class="navbar-brand" href="{{url('/view')}}">Pawan</a>
      <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
          aria-expanded="false" aria-label="Toggle navigation"></button>
      <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
              <li class="nav-item active">
                  <a class="nav-link" href="{{url('/customer/view')}}">Customer<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                  <a class="nav-link" href="{{url('/customer')}}">Registration<span class="sr-only">(current)</span></a>
              </li>
          </ul>
         
      </div>
  </nav> 
    <form action="{{url('/')}}/customer" method="post"> 
        @csrf 
        {{-- <pre>
        @php
        print_r($errors->all());
        @endphp
        </pre> --}}
    <div class="container">
      {{-- <x-input type="text" label="Enter Your Name" name="name"/>
      <x-input type="email" label="Enter Your Email" name="email"/>
      <x-input type="password" label="Enter Your Password" name="password"/> --}}
     
        <h1 class="text-center">Registration</h1>
        <div class="form-group">
          <label for="">Name</label>
          <input type="text" name="name" id="" class="form-control" value="{{old('name')}}" placeholder="" aria-describedby="helpId">
          <span class="text-danger">
            @error('name')
            {{$message}} 
            @enderror
          </span>
          
        </div>
        <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" id="" class="form-control" placeholder="" aria-describedby="helpId">
            
            <span class="text-danger">
                @error('email')
                {{$message}} 
                @enderror
            </span>
          </div>
          <div class="form-group">
            <label for="">Password</label>
            <input type="password" name="password" id="" class="form-control" placeholder="" aria-describedby="helpId">   
            <span class="text-danger">
                @error('password')
                {{$message}} 
                @enderror
            </span>
          </div>
          <button class="btn-btn-primary">
            Submit
          </button>
          
    </div>
</form> 
  </body>
</html>