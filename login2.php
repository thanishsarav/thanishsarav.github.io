<?php  
$user = '';
$password = "";
$error = "";
$success = false;


if (isset($_POST['submit'])) {
  $success = false;
  $user = $_POST['email'];
  $password = $_POST['password'];
  
  include "db.php";
  //writing query for the user record
  $sql = "SELECT * FROM users WHERE username = '$user'";
  //sql query data storing
  

  $result = mysqli_query($dbconn, $sql);
  //record's count are storing
  $count = mysqli_num_rows($result);
  //if the count are greter than 0
  // in the result there are so much of records select one record and storing 
  if ($count > 0) {
    $row = mysqli_fetch_assoc($result);
   
    //checking password if avaliable in the record
    if ($row['password'] == $password) {
      $success = true;
      $_SESSION['login'] = $user;
    } else {
      $error = "Invalid Password";
    }
  } else {
    echo "Error deleting record: " . mysqli_error($conn);
  } 
  mysqli_close($dbconn);
  if ($success) {
    header("Location:register2.html"); 
  }
}


// sql to delete a record

?><html>
<style>
    input[type=email],
    input[type=password] {
        width: 90%;
        padding: 12px 20px;
        margin: 8px 0;
        display: inline-block;
        border: 1px inset #c2b556;
        border-radius: 7px;
        box-sizing: border-box;
        border-style: groove;
        color: #28acf8;
        background-color: rgb(253, 250, 250);
        margin-left:30px;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;

    }

    input[type=submit] {
        width: 90%;
        background-color: #28acf8;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        margin-top: 40px;
        border: 0px solid #25ff03;
        border-radius: 7px;
        cursor: pointer;
        margin-left:30px;
        border-style: groove;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .container {
        border-radius: 7px;
        background-color: #fffdfd;
        border: 0px groove #25ff03;
        width: 69%;
        height: 94%;
        margin-left:130px ;
        /* background-color: #FF4766; */
        margin-top:130px;
       
    }

   

    h3 {
        color: #28acf8;
        text-align: left;
        margin-left:30px;
       text-decoration: underline;
       font-size: x-large;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        
    }
    h2 {
        color: #28acf8;
        text-align:left;
        font-size: x-large;
        margin-top:  80px;
        margin-right:70px;
        margin-left:30px;
       
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        
    }
   
  
    .left {
        border-radius: 2px;
        text-align: left;
        width: 45%;
        background-color: #fffdfd;
        padding: 20px;
       
        height: 92%;
        margin-left: 1px;
       float: left;
    }

    .right {
       
        display:inline-block;
        width: 47%;
        height: 100%;
        background-color: #fffdfd ;
        text-align: center;

    }

    input[type=checkbox] {
        background-color: #28acf8;
    }
    body{
        color: #28acf8;
        background-color: #e6e8e6;
        font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      
    }
    .div2{
        border-radius: 7px;
        border: 2px inset #28acf8;
        height: 80%;
        width: 75%;
        margin-top: 70px;
        margin-left: 60px;
        background-image: url("images/pineapple.jpg");
      
    }
    input[type=button]{
        margin-top: 35px;
        margin-right:30px ;
        padding: 20px;
        border:1px outset #28acf8;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
        background-color: #fffdfd ;
        color: #28acf8;
         border-radius: 7px;
        
    }
    p{
        text-align: center;
        color: #28acf8;
        text-decoration: underline;
       
    }

   
</style>

<body>
<?php if ($error) { ?>
<div> <!-- Error box -->
   <?php echo $error ?>
</div>
        <!-- /.info-box-content -->
      </div>
    </div>
    <!-- Error box -->
  <?php }; ?>  

    <div class="container">
        <!-- Left section-->
        <div  class="left">
            <h3>Your LOGO</h3>

            <h2>Login</h2>
            <form action=" " method="post">
                <label for="fname" style="  margin-left:30px;"> Enter user Email</label>
                <br>
                <input type="email" id="fname" name="firstname" placeholder="Email" name="email">
                <br>
                <label for="lname" style="  margin-left:30px;">Enter user Password</label>
                <br>  
                <input type="password" id="lname" name="lastname" placeholder="Password" name="password">
                <br>
                <input type="checkbox" value="forgot password" style=" margin-left:30px;">Verified
               <br>
                <input type="submit" value="login" name="submit" >
                <br>
                <p>Check if the data are correct</p>

                <input type="button" name="remember me" style="  margin-left:30px;" value="Google">
                <input type="button" name="remember me" style="  margin-left:30px;" value="Facebook">
                <input type="button" name="remember me" style="  margin-left:30px;" value="Appal">
                
                
            </form>
            
        </div>
    <!-- Right section-->
        <div class="right">
            <div class="div2"></div>
        </div>
    </div>

</body>

</html>