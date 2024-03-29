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
    <div class="container mt-4">
        <a href="{{url('/customers')}}">
        {{-- <a href="{{route('customers.index')}}"> --}}
            <button class="btn btn-primary">Add Customer</button>
        </a>
    </div>
    <div class="container mt-5">
      <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
                
            </tr>
        </thead>
        <tbody> 
            @foreach ($customers as $customer)  
            <tr>
                <td scope="row">{{$customer->name}}</td>
                <td>{{$customer->email}}</td>
                <td>{{$customer->address}}</td>
                <td>
                    <a href="{{url('/customers/edit/')}}/{{$customer->id}}">
                        <button class="btn btn-primary">Edit</button>
                    </a>
                    <a href="{{url('customers/delete/')}}/{{$customer->id}}">
                        <button class="btn btn-danger">Delete</button>
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
      </table> 
      </div>
  </body>
</html>