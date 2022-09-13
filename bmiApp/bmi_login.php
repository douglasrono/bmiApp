
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI Calculator</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>
<body>
   <div class="container col-4">
        <h1>Welcome to our BMI Calculator</h1>
        <p> Login to continue</p>
       <div class="justify-content-center align-items-center">
           
    <p>please use email abc@gmail.com and password 123 to login</p>
    <form action="bmi_calc_handler.php" method="GET">
        <input class="form-control" name="email" placeholder="enter email" type="email"> <br> <br>
        <input class="form-control" name="u_pass" placeholder="password" type="password"> <br> <br>
        <input class="form-control" name="u_weight" step="0.1" placeholder="enter your weight in kgs" type="text"> <br> <br>
        <input class="form-control" name="u_height" step="0.1" placeholder="enter your height in metres" type="text"> <br> <br>
        <input class="btn btn-primary" name="btn_calc" value="calculate" type="submit">
    </form>
       </div>
   </div>
</body>
</html>
