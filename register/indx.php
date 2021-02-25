
<!DOCTYPE html>
<html lang="en">
<head>
<title>Register | ALMA FIESTA'19</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Electrical Service Form Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design,width=device-width, initial-scale=1.0" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->

<!-- //custom-theme -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
<link href="img/alma-af-icon.jpg" rel="icon">
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>


</head>

<?php
if($_SERVER["REQUEST_METHOD"]== "POST")
{
$host = "localhost";
$username = "alma20";
$password = "stark2k20";
$dbname = "alma2k20";

include("function.php");


// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$stmt = $conn->prepare("INSERT INTO Aghaaz (Name, College, Email, Phone, Gender, Pay, Tid) VALUES (?, ?, ?, ?, ?, ?,? )");
$stmt->bind_param("sssssss", $a, $b, $c, $d, $e, $f, $g );

	$a=htmlentities($_POST['Name']);
	$b=htmlentities($_POST['College']);
	$c=htmlentities($_POST['Email']);
	$d=htmlentities($_POST['Phone']);
	$e=htmlentities($_POST['sex']);
	$f=htmlentities($_POST['Pay']);
	$g=htmlentities($_POST['Tid']);
	$t=$g;
	if($g=="") $t="Not Provided";


	if($stmt->execute()){
    $stmt->close();
    send_email($a,$b,$c,$d,$f,$t);
    echo  "<script type='text/javascript'>alert('You have successfully registered.');</script>";
	echo "<script>window.location = 'http://aghaaz.almafiesta.com'</script>";
	}
	else{
	echo  "<script type='text/javascript'>alert('ERROR: We are unable to Process the request. Please contact the Support to know the problem');</script>";   
	}

/*
	$reply = htmlentities($_POST['Email']);
    $replysubject = "ALMA FIESTA 2k20 INDUCTIONS";
    $replyfrom = "From: donotreply@almafiesta.com \r\n";
	 $replymessage .= "Hello there $a ,\r\n\r\n";
   $replymessage .= "You have successfully registered for Alma Fiesta 2k20 Inductions. You had filled '$d' as your Team Preference I and '$e' as your Team Preference II. \r\n\r\n";
  
    $replymessage .= "Induction Date : and 30th August 2019,  Venue : SBS Room No: 016, 017  \r\n\r\n";
	 $replymessage .= "Timings : 5:30 pm onwards \r\n\r\n";
	 
    $replymessage .= "Like our Facebook page for further updates : https://www.facebook.com/almafiesta/ \r\n\r\n";
	 $replymessage .= "All the Best !! \r\n\r\n";
   $replymessage .= "<<This e-mail is automated, so please DO NOT reply>>\r\n";
   
 mail($reply, $replysubject, $replymessage, $replyfrom);
	if($conn->query($sql)===TRUE){
		echo "new user registered";
	}
	else{
		 echo "Error: " . $sql . "<br>" . $conn->error;
	}*/

	


mysqli_close($conn);
}

?>
<script>
$(document).ready(function() {
    $(".preference").change(function() {
      
        var selected = $("option:selected", $(this)).val();
        
        var thisID = $(this).prop("id");
       
        $(".preference option").each(function() {
            $(this).prop("disabled", false);
        });
        $(".preference").each(function() {
            if ($(this).prop("id") != thisID) {
                $("option[value='" + selected + "']", $(this)).prop("disabled", true);
            }
        });

    });
});</script>
<script >
$(document).ready(function() {
    $(".preference").change(function() {
      
        var selected = $("option:selected", $(this)).val();
        
        var thisID = $(this).prop("id");
       
        $(".preference2 option").each(function() {
            $(this).prop("disabled", false);
        });
        $(".preference2").each(function() {
            if ($(this).prop("id") != thisID) {
                $("option[value='" + selected + "']", $(this)).prop("disabled", true);
            }
        });

    });
});</script>
<script >
$(document).ready(function() {
    $(".preference2").change(function() {
      
        var selected = $("option:selected", $(this)).val();
        
        var thisID = $(this).prop("id");
       
        $(".preference option").each(function() {
            $(this).prop("disabled", false);
        });
        $(".preference").each(function() {
            if ($(this).prop("id") != thisID) {
                $("option[value='" + selected + "']", $(this)).prop("disabled", true);
            }
        });

    });
});</script>

<body background="images\b1.png">


<!-- banner -->
	<div class="center-container">
	
		<div class="main">
				<div class="w3layouts_main_grid">
				   <div align="right"> <a href="http:\\aghaaz.almafiesta.com"class="btn btn-active" role="button" style="clor:black;" >Go back</a></div>
				  
				<h1 class="w3layouts_head"> Aghaaz Registration</h1>
					<form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" class="w3_form_post">
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>NAME<span class="star">*</span></label>
								<input type="text" name="Name" placeholder="Name" required>
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>COLLEGE<span class="star">*</span></label>
								<input type="text" name="College" placeholder="College" required>
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Email <span class="star">*</span></label>
								<input type="email" name="Email" placeholder="Email ID" required>
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Contact No. <span class="star">*</span></label>
								<input type="text" name="Phone" placeholder="Contact Number" required>
							</span>
						</div>
					<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Gender<span class="star">*</span></label>
									<select name="sex" required="" id="sex" style="background-color:#fff">
                                     <option value="" name=""  style="background-color:white" disabled="disabled" selected="selected"> <----   Select   ----></----></option>
                                    
									<option   style="background-color:white" value="Female" ><font color="Red">Female</option>
									<option  style="background-color:white" value="Male">Male</option>
								</select>
									
								
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Payment Mode<span class="star">*</span></label>
									<select name="Pay" required=""  id="Pay" style="background-color:#fff">
                                     <option value="" name=""  style="background-color:white" disabled="disabled" selected="selected"><----   Select   ----></----></option>
                                    
									<option   style="background-color:white" value="Online" ><font color="Red">Online</option>
									<option  style="background-color:white" value="Offline">Offline</option>
								</select>
									
								
							</span>
						</div>
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
							    <div class="row">
							         <div class="col-sm-1" style=""> </div>
							        
    <div class="col-sm-9" style=";"> <br> 1. Registration fee is Rs 500 (online) and Rs 600 (offline)<br><br>
    2. Pay using UPI and then enter Transation ID in form and also take screenshot for further reference.<br> <br>
</div>
<div class="col-sm-2" style=";"> </div></div>
     <div class="row">
           <div class="col-sm-2" style=""> </div>
                 
                       <div class="col-sm-8" style=""> <img src="upi.jpeg " > </div>
                  <div class="col-sm-2" style=""></div>

                 </div>
							  </div></span>
						

						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>Transaction ID (If paid Online)<span class="star"></span></label>
								<input type="text" name="Tid" placeholder="Transaction ID" >
							</span>
						</div>
						<!--<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>WHAT MADE YOU CHOOSE THE ABOVE TEAMS?<span class="star"></span></label>
								<textarea  name="why_teams" id="about" rows="4" ></textarea>
							</span>
						</div>
						
						<div class="w3_agileits_main_grid w3l_main_grid">
							<span class="agileits_grid">
								<label>WHY WOULD YOU LIKE TO JOIN ALMA FAMILY?<span class="star"></span></label>
								<textarea  name="why_alma" id="about" rows="4" ></textarea>
							</span>
						</div>
						
						-->
					<br>
					<div class="w3_main_grid">
						<div class="w3_main_grid_right">
							<input type="submit" name = "registration_submit" value="Submit">
						</div>
					</div>
				</form>
			</div>
		
		
		</div>

	</div>
<!-- //footer -->

</body>
</html>