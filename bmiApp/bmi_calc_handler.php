
<?php
if(isset(($_GET['btn_calc']))){
    $email = $_GET['email'];
    $password = $_GET['u_pass'];
    $weight = $_GET['u_weight'];
    $height = $_GET['u_height'];
    
    if($email == "abc@gmail.com" && $password == "123"){
        $bmi = $weight / pow($height, exponent: 2);

        echo " Hello your BMI is $bmi";
    }
    else{
        echo "You entered a wrong email or password";
    }
}
?>
