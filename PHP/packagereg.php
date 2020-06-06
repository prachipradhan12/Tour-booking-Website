<!DOCTYPE html>
<html>
   <head>
      <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed|Ubuntu&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="../CSS/style.css">
      <!--        <link rel="stylesheet" href="script.js">-->
      <script src="../JAVASCRIPT/script.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
   </head>
   
   
   
   <body>
      <h1 style="color:white" align="center">Package Registration</h1>
      <center>
         <form action="payment.php" method="POST">
            <div class="container" id="label">
               <h1>Book the package</h1>
               <p>By entering the following Details.</p>
               <hr>
               <label for="firstname"><b>First Name</b></label>
               <input type="text" placeholder="Enter Name" name="firstname" required>
               <label for="lastname"><b>Last Name</b></label>
               <input type="text" placeholder="Enter Name" name="lastname" required>
               <label for="Age"><b>Age</b></label>
               <input type="text" placeholder="Enter Age" name="age" required><br>
			   
			   
			   
               <div class="members_container" id="members_container">
                  
				  <div class="container">
                   <div class="row">
                  	<div class="col-sm-4" id="name_container">

				  
				  <label for="memeber name"><b>Enter Members Details</b></label>
                  <input type="text" class="members" id="member1" placeholder="Enter Member 1" name="n1" required><br>
                  <input type="text" class="members" id="member2" placeholder="Enter Member 2" name="n2" required><br>

				  </div>  
				  
               </div></div></div>
			   
               <button type="button" class="add_members" id="add_members">ADD MEMBERS</button>
               <label for="email"><b>Enter Email</b></label>
               <input type="email" placeholder="Enter Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
               <br><label for="add"><b>Address</b></label>
               <input type="text" placeholder="Enter Address" name="add" required>
               <label for="phone"><b>Phone no</b></label>
               <input type="number" placeholder="Enter phone number" name="phone" pattern="[7-9]{1}[0-9]{9}"  required>
               <br>
               <label for="package"><b>Package/City</b></label>
               <br>
               <select name="package"   style="width: 570px;">
                  <option value="london">London </option>
                  <option value="singapor">Singapor</option>
                  <option value="dubai">Dubai</option>
                  <option value="bali">Bali</option>
                    <option value="Capetown">Capetown</option>
                    <option value="Australia">Australia</option>
                    <option value="Europe">Europe</option>
                    <option value="France">France</option>
                   <option value="Singapore">Singapore</option>
                    <option value="Germany">Germany</option>
                    <option value="Malaysia">Malaysia</option>
               </select>
               <br><br>
               <label for="recipt"><b>Your recipt online or offline?</b></label>
               <input type="radio" name="recipt" value="Online">Online
               <input type="radio" name="recipt" value="Offline">Offline
               <br>  <br>
               <button type="button" class="cancelbtn">Cancel</button>
              <a  href="../PHP/payment.php"><button type="submit" class="signupbtn">Procced for payment</button></a> 
            </div>
         </form>
      </center>
   </body>
   <script>
      $("#add_members").click(function(){
      	total_elements = document.getElementsByClassName("members").length
	

      	new_member = document.createElement("input")
		new_age = document.createElement("input")
      	new_file = document.createElement("input")

		
      	new_member.id = "members" + (total_elements + 1)
		new_member.className = "members"
      	new_member.type = "text"
      	new_member.name = "n"+(total_elements + 1)
      	new_member.placeholder = "Enter Member " + (total_elements + 1)
		$("#name_container").append(new_member)
		
		debugger
		new_age.id = "age" + (total_elements1 + 1)
	    new_age.className = "age"
      	new_age.type = "number"
      	new_age.name = "a"+(total_elements1 + 1)
      	new_age.placeholder = "Enter Age " + (total_elements1 + 1)
		$("#age_container").append(new_age)
		
		
		new_file.id = "file" + (total_elements + 1)
		new_file.className = "files"
      	new_file.type = "file"
      	new_file.name = "n"+(total_elements + 1)
		
      	new_file.placeholder = "Enter Member " + (total_elements + 1)
		$("#file_container").append(new_file)
		
				
		
		
      })
   </script>
</html>