<!doctype html>
<html lang="en">
  <head>
    <title>CRUD OPERATION</title>
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
            <a href="{{route('employees.create')}}" class="btn btn-primary">Create
            </a>
        </div>
        </div>
     </div>

     <div class="container">
        <table class="table py-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td scope="row"></td>
                    <td>{{$employee->name}}</td>
                    <td>{{$employee->email}}</td>
                    <td>{{$employee->address}}</td>
                    
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="" class="btn btn-danger">Delete</a>
                    </td>
                </tr>
                <tr>
                    <td scope="row"></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
     </div>
     
     
    
    
  </body>
</html>