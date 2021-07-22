<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MULTIPLICATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

</head>
<body class="pic">
    <nav class="navbar navbar-expand-sm bg-danger navbar-light">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Addition</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="sub.php">Subtraction</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="mul.php">Multiplication</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="div.php">Division</a>
          </li>
          
          
        </ul>
      </nav>
      <div class="container">
          <div class="row">
              <div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>
              <div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
                  <table class="table table-borderless">
                      <tr>
                          <td class="text">NUM1</td>
                          <td><input type="text" id="num1" class="form-control"></td>
                      </tr>
                      <tr>
                          <td class="text">NUM2</td>
                          <td><input type="text" id="num2" class="form-control"></td>
                      </tr>
                      <tr>
                          <td></td>
                          <td><button onclick="multiplication()" class="btn btn-danger">MUL</button></td>
                      </tr>
                      <tr>
                          <td class="text">RESULT</td>
                          <td><input type="text" id="res" class="form-control"></td>
                      </tr>




                  </table>




              </div>
              <div class="col col-12 col-sm-12 col-md-4 col-lg-4 col-xl-4"></div>


          </div>




      </div>
      <script>
          function multiplication()
          {
              var getnum1=parseInt(document.getElementById("num1").value)
              var getnum2=parseInt(document.getElementById("num2").value)
              var result=getnum1*getnum2

              document.getElementById("res").value=result



          }

      </script>
    
</body>
</html>