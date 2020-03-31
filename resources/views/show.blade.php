<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTales.bootstrabp4.min.css">

</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark">

        <!-- Links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="form">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="show">Show</a>
          </li>
         
        </ul>
        
      
      </nav>

      <br><br>
      <div class="container">
        <a href="form"><button type="button" class="btn btn-danger" action="submit">Insert new details</button></a>
        <br><br>
       <h3>Details of each student</h3> 
<br>
      <table class="table table-light" id="datatabl"  style="width:100%">

        
        <thead>
          <tr>
            
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Phone-no</th>
            <th scope="col">Gender</th>
            <th scope="col">Country</th>
            <th scope="col">Hobbies</th>
            <th scope="col">Address</th>
            <th scope="col">Delete</th>
            <th scope="col">Update</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($result as $company)
       
      
          <tr>
            <td>{{$company->name}}</td>
            <td>{{$company->email}}</td>
            <td>{{$company->phone}}</td>
            <td>{{$company->gender}}</td>
            <td>{{$company->country}}</td>
            <td>{{$company->hobbies}}</td>
            <td>{{$company->address}}</td>
          <td><a href="delete/{{$company->id}}"><button type="button" class="btn btn-primary" action="submit" >Delete</button></a></td>
            <td><a href="edit/{{$company->id}}"><button type="button" class="btn btn-success" action="submit">Update</button></a></td>
          </tr>
          @endforeach 
          
        </tbody>
      </table>

      </div>
        
      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>

      <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
      <script>
        $(document).ready(function() {
    $('#datatabl').DataTable({
      "order": [[ 0, "asc" ]]
    });
} );
      </script>

    
</body>
</html>