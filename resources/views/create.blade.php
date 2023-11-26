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
    <div class="bg-dark py-3">
        <div class="container">
             <h4 class="text-white">CRUD IN LARAVEL</h4>
          </div>
        </div>
  
       <div class="container py-4 px-4">
          <div class="d-flex justify-content-between">
          <h4>
              Employee
          </h4>
          <div> 
              <a href="{{route('employees.index1')}}" class="btn btn-primary">Back
              </a>
          </div>
          </div>


          <form action="{{route('employees.store')}}" method="post" class="" enctype="multipart/form-data">
            @csrf
          <div class="form-group">
            <label for="">Name</label>
            <input type="text" name="name" id="" class="form-control"  value="{{old('name')}}" placeholder="Enter Your Name" aria-describedby="helpId">
            <span class="text-danger">
                @error('name')
                {{$message}} 
                @enderror
              </span>
        </div>

          <div class="form-group">
            <label for="">Email</label>
            <input type="text" name="email" id="" class="form-control" value="{{old('email')}}" placeholder="Enter Your Email" aria-describedby="helpId">
            <span class="text-danger">
                @error('email')
                {{$message}} 
                @enderror
              </span>
        </div>

          <div class="form-group">
            <label for="">Address</label>
            <input type="text" name="address" id="" class="form-control" value="{{old('address')}}"  placeholder="Enter Your Address" aria-describedby="helpId">
        </div>

          <div class="form-group">
            <label for="">Image</label>
            <input type="file" name="image" id="" class="form-control" placeholder="" aria-describedby="helpId">
            <span class="text-danger">
                @error('image')
                {{$message}} 
                @enderror
              </span>
        
        </div>

          <div>
            <a href="">
                <button class="btn btn-primary mt-4">Submit</button>
            </a>
          </div>

          </form>


       </div>
  

   
  </body>
</html>