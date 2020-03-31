<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>
    <!-- A grey horizontal navbar that becomes vertical on small screens -->
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
    <form method="POST" action="insert">
        @csrf
        <div class="container">
            <div class="form-group">
                <label for="exampleInputEmail1"><h4>Name</h4></label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
                
              </div>
            <div class="form-group">
              <label for="exampleInputEmail1"><h4>Email address</h4></label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required>
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1"><h4>Phone No:</h4></label>
              <input type="number" class="form-control" id="exampleInputPassword1" required name="phone">
            </div>
            <br>
            <h4>Gender</h4>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios" id="exampleRadios1" value="Male" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Male
                </label>
                
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="Radios" id="exampleRadios1" value="Femail" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Femail
                </label>
            </div>
            <br>
            <div class="form-row align-items-center">
                <div class="col-sm-2"><h4>Country</h4></div>
                <div class="col-auto my-1">
                  <label class="mr-sm-2 sr-only" for="inlineFormCustomSelect">Preference</label>
                  <select class="custom-select mr-sm-2" id="inlineFormCustomSelect" name="country" required>
                    <option selected>Choose Country</option>
                    <option value="India">India</option>
                    <option value="Australia">Australia</option>
                    <option value="USA">USA</option>
                    <option value="China">China</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Russia">Russia</option>
                    <option value="UK">UK</option>
                    <option value="Spain">Spain</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Srilanka">Srilanka</option>
                  </select>
                </div>
            </div>
            <br><br>
            <div class="form-group row">
                <div class="col-sm-2"><h4>Hobbies</h4></div>
                
                <div class="col-sm-2">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobbies[]" value="Music">
                    <label class="form-check-label" for="gridCheck1">
                      Music
                    </label>
                  </div>
                </div>
                <div class="col-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobbies[]" value="Cricket">
                      <label class="form-check-label" for="gridCheck1">
                        Cricket
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobbies[]" value="Swimming">
                      <label class="form-check-label" for="gridCheck1">
                        Swimming
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobbies[]" value="Dancing">
                      <label class="form-check-label" for="gridCheck1">
                        Dancing
                      </label>
                    </div>
                  </div>
                  <div class="col-sm-2">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck1" name="hobbies[]" value="Reading-book">
                      <label class="form-check-label" for="gridCheck1">
                        Reading Book
                      </label>
                    </div>
                  </div>
            </div>
            <br><br>

            <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationCustom03"><h4>Address</h4></label>
                  <input type="text" class="form-control" id="validationCustom03" required name="address">
                  <div class="invalid-feedback">
                    Please provide a valid address
                  </div>
                </div>
            </div>
            <br><br>
              
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>

        </div>
        
    
</body>
</html>
