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
          <a href="{{url('/customer')}}"">
            <button type="button" class="btn btn-dark">Back To Registration</button>
          </a>
      </div>

  </nav>    
      <div class="container">
        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Country</th>
                    <th>Status</th>
                    <th colspan="">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ( $customers as $customer )
                <tr>                    
                    <td scope="row">{{$customer->name}}</td>
                    <td>{{$customer->email}}</td>
                    <td>{{$customer->address}}</td>
                    <td>{{$customer->country}}</td>
                    <td>
                       @if  ($customer->status=='1')
                       <a href="">
                          <span class="badge badge-success">Active</span>
                       </a>
                        @else 
                        <a href="">
                        <span class="badge badge-success">Inactive</span>
                        </a>
                        @endif

                    </td>
                    <td>
                     <a href="{{url('/customer/delete/')}}/{{$customer -> customer_id}}"><button class="btn btn-danger" >Delete</button></a>
                    <a href="{{url('/customer/edit/')}}/{{$customer -> customer_id}}">  <button class="btn btn-success">Edit</button> </a>
                    </td>
                    

                    
                </tr>
                @endforeach
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