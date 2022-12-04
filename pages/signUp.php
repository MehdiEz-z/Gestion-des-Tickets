<?php 
include('../components/head.php');
include('../components/footer.php');
?>

<body class="userBody d-flex justify-content-center align-items-center">
    
    <section style="box-shadow: 0px 5px 10px black;" class="px-5 rounded-3 bg-white">
     <h1 class="my-2">SIGN UP</h1>
     <form action="../controller/User_controller.php" class="my-3" method="POST" data-parsley-validate>
          <a class="text-center" href=""><img style="width:7rem; height:7rem;" class="rounded-circle" src="../assets/images/user.png" alt="user profile picture"></a>
          <div class="my-3">
            <label class="form-label" for="firstName">First name</label>
            <input class="form-control" type="text" name="SfirstName" data-parsley-trigger="keyup"  data-parsley-minlength="3" data-parsley-maxlength="20"  required>
		  </div>  
          </div>   
          <div class="my-3">
            <label class="form-label" for="lastName">Last name</label>
            <input class="form-control" type="text" name="SlastName" data-parsley-trigger="keyup"  data-parsley-minlength="3" data-parsley-maxlength="20"  required>
          </div>   
          <div class="my-3">
            <label class="form-label" for="email">email address</label>
            <input class="form-control" type="email" name="Semail" data-parsley-trigger="keyup"  data-parsley-type="email"  required>
          </div>   
          <div class="my-3">
            <label class="form-label" for="password">password</label>
            <input class="form-control" type="password" name="Spassword" data-parsley-trigger="keyup"  data-parsley-minlength="8" required>
          </div>      
          <button style="width: 100%;" type="submit" id="save-acc" name="signup" class="buttonAcc my-4 btn btn-primary border-0" > S I G N U P </button>
     </form>
    </section>


</body>