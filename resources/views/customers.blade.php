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
    <h4 class="text-center mt-3">Registration</h4>
    <div class="container">
        <a href="{{url('/customers/view')}}">
            <button class="btn btn-primary">Check Customers</button>
        </a>
    </div>
    <form action="" method="post">
        @csrf
        <div class="container">
      <div class="form-group mt-3">
        <label for="">Name</label>
        <input type="text" name="name" id="" value="" class="form-control" placeholder="" aria-describedby="helpId">     
        <span class="text-danger">
            @error('name')
            {{$message}}
            @enderror
        </span>
    </div>

      <div class="form-group">
        <label for="">Email</label>
        <input type="text" name="email" id="" value="" class="form-control" placeholder="" aria-describedby="helpId">     
        <span class="text-danger">
            @error('email')
            {{$message}}
            @enderror
        </span>
    </div>

      <div class="form-group">
        <label for="">Address</label>
        <input type="text" name="address" id=""  value="" class="form-control" placeholder="" aria-describedby="helpId">     
      </div>

      <div class="form-group">
        <label for="">Password</label>
        <input type="password" name="password" id="" value="{{old('password')}}" class="form-control" placeholder="" aria-describedby="helpId">     
        <span class="text-danger">
            @error('password')
            {{$message}}
            @enderror
        </span>
    </div>
      <div>
        <a href="">
            <button class="btn btn-primary">Submit</button>
        </a>
      </div>
    </div>
    </form>
  </body>
</html>