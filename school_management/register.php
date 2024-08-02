<?php include "connection.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-color: #53b6e1;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .container {
      background: #fff;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }

    .title {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      text-align: center;
      color: #333;
    }

    .form {
      display: flex;
      flex-direction: column;
    }

    .input_feild {
      margin-bottom: 15px;
    }

    .input_feild label {
      display: block;
      font-size: 14px;
      margin-bottom: 5px;
      color: #555;
    }

    .input, .selectbox, .textarea {
      width: 100%;
      padding: 10px;
      border: 1px solid #ddd;
      border-radius: 4px;
      box-sizing: border-box;
    }

    .input:focus, .selectbox:focus, .textarea:focus {
      border-color: #007BFF;
      outline: none;
    }

    .textarea {
      height: 100px;
      resize: vertical;
    }

    .terms {
      display: flex;
      align-items: center;
    }

    .check {
      margin-right: 10px;
    }

    .checkmark {
      width: 16px;
      height: 16px;
      border-radius: 3px;
      border: 1px solid #ddd;
      display: inline-block;
      position: relative;
      vertical-align: middle;
    }

    .check input[type="checkbox"] {
      opacity: 0;
      position: absolute;
      z-index: -1;
    }

    .check input[type="checkbox"]:checked + .checkmark {
      background-color: #007BFF;
      border-color: #007BFF;
    }

    .check input[type="checkbox"]:checked + .checkmark::after {
      content: '';
      position: absolute;
      top: 50%;
      left: 50%;
      width: 8px;
      height: 8px;
      border-radius: 2px;
      background: white;
      transform: translate(-50%, -50%);
    }

    .btn {
      background-color: #007BFF;
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 4px;
      cursor: pointer;
      font-size: 16px;
    }

    .btn:hover {
      background-color: #0056b3;
    }

  </style>
</head>
<body>
  <div class="container">
    <form action="#" method="post">
      <div class="title">Registration Form</div>
      <div class="form">
        <div class="input_feild">
          <label for="fname">First Name</label>
          <input type="text" class="input" name="fname" id="fname">
        </div>
        <div class="input_feild">
          <label for="lname">Last Name</label>
          <input type="text" class="input" name="lname" id="lname">
        </div>
        <div class="input_feild">
          <label for="password">Password</label>
          <input type="password" class="input" name="password" id="password">
        </div>
        <div class="input_feild">
          <label for="conpassword">Confirm Password</label>
          <input type="password" class="input" name="conpassword" id="conpassword">
        </div>
        <div class="input_feild">
          <label for="gender">Gender</label>
          <select class="selectbox" name="gender" id="gender">
            <option value="">Select</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
          </select>
        </div>
        <div class="input_feild">
          <label for="email">Email Address</label>
          <input type="email" class="input" name="email" id="email">
        </div>
        <div class="input_feild">
          <label for="phone">Phone Number</label>
          <input type="text" class="input" name="phone" id="phone">
        </div>
        <div class="input_feild">
          <label for="address">Address</label>
          <textarea class="textarea" name="address" id="address"></textarea>
        </div>
        <div class="input_feild terms">
          <label class="check">
            <input type="checkbox" name="terms">
            <span class="checkmark"></span>
          </label>
          <p>Agree to terms and conditions</p>
        </div>
        <div class="input_feild">
          <input type="submit" value="Register" class="btn" name="Register">
        </div>
      </div>
    </form>
  </div>
</body>
</html>
<?php
    if(isset($_POST['Register']))
    {
      $fname      =$_POST['fname'];
      $lname      =$_POST['lname'];
      $password   =$_POST['password'];
      $conpassword=$_POST['conpassword'];
      $gender     =$_POST['gender'];
      $email      =$_POST['email'];
      $phone      =$_POST['phone'];
      $address    =$_POST['address'];

      if ($fname != "" && $lname != "" && $password != "" && $conpassword != "" && $gender != "" && $email != "" && $phone != "" && $address != "") 
      {
       
    
      
       
          $query="INSERT INTO form (fname,lname,password,conpassword,gender,email,phone,address) VALUES('$fname','$lname','$password','$conpassword','$gender','$email','$phone','$address')";
          $data=mysqli_query($conn,$query);
          if($data)
           {
               echo "inserted ";
           }
            else
          {
            echo "failed";
          }
      }
       else{
        echo "please insert the details";
       }
      
      
        
      


    }
?>