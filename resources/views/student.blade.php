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
      <div class="container mt-5">
        <form action="" method="post" enctype="multipart/form-data">
            @csrf
            @if (session('message'))
        <h4>{{session('message')}}</h4>
             @endif
        <div class="form-group">
          <label for="">Upload File</label>
          <input type="file" name="excel_file" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="container">
            <button class="btn btn-primary">Submit</button>
        </div>
    </form>
      </div>
  </body>
</html>