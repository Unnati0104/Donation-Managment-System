<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Icon css link -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  css file --> 
    <link rel="stylesheet" type="text/css" href="form.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>
<body>
    <div class="row">
        <div class="column" >
        
            <img src="http://shots.jotform.com/elton/logo_thanksgiving.png" alt />
            <div id="donation"><strong>Donation form</strong></div>
            <div id="make"><strong>Make a donation to support us</strong></div>
        </div>
       <div class="column1" >
            <p style="text-align: center;font-family: Brush Script MT;font-weight: bold;margin-bottom: 0px;color: black;"><span style="font-size: 55px;">Individual Form</span></p>
            <p><span style="font-size: 14pt;">Please fill this form for required details.</span></p>
        
    
            <div class="container">
                <form method="POST">
                    <div class="row">
                        <div class="col-25">
                        <label for="fname">Full Name</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="fname" name="fname" placeholder="Your name.." required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="email">Email</label>
                        </div>
                        <div class="col-75">
                        <input type="email" id="email" name="email" placeholder="john@example.com" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="Mobile">Mobile no</label>
                        </div>
                        <div class="col-75">
                        <input type="number" id="mobile" name="mobileno" placeholder="Your mobile no" size="10" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="address">Full Address</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="address" name="address" placeholder="Your address" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                            <label for="city"> City</label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="city" name="city" placeholder="New York">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                            <label for="state">State</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="state" name="state" placeholder="UP">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                        <label for="donation">Donate Thing</label> 
                        </div>
                        <div class="col-75">
                            <select name="Donatething">
                                <option value="Items">Items</option>
                                <option value="Cloths">Cloths</option>
                                <option value="books">Books</option>
                                <option value="money">Money</option>
                                <option value="shoes">Shoes</option>
                                <option value="other">Other thing</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                            <label for="city">Please specify the things</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="thing1" name="thing1" placeholder="shirt" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">          
                            <label for="city">Others,Please specify</label>
                        </div>
                        <div class="col-75">
                        <input type="text" id="thing2" name="thing2" placeholder="any thing">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                        <label for="amount">Any Amount</label>
                        </div>
                        <div class="col-75">
                            <input type="number" id="amount" name="amount" placeholder="donate amount" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="date">Pickup date</label>
                        </div>
                        <div class="col-75">
                            <input type="date" id="date" name="date" required>
                        </div>
                    </div>
                    <div class="row">
                        <input type="submit" value="Register" name="submit">
                    </div>
                </form>
            </div>
        </div>
    
    </div>
</div>
</body>
</html>


<?php 

include 'connection.php'; 

if(isset($_POST['submit'])){
    $name=$_POST['fname'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $Donatething=$_POST['Donatething'];
    $thing1=$_POST['thing1'];
    $thing2=$_POST['thing2'];
    $amount=$_POST['amount'];
    $date=$_POST['date'];


    $insertquery =" insert into ind(name,email,mobileno,address,city,state,Donatething,thing1,thing2,amount,date) values ('$name','$email','$mobileno','$address','$city','$state','$Donatething','$thing1','$thing2','$amount','$date')";

    $res = mysqli_query($con,$insertquery);

    if($res && $res!=null){
        ?>
        <script>
           swal("Good job!", "You registered succefully!", "success");
        </script>
        <?php
    }else{
        ?>
        <script>
           sweetAlert("Oops...","Not registered succefully! Try again","error");
        </script>
        <?php

    }


}





?>