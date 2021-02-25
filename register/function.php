<?php

function CA_exists($SUBMITTED_CONTACT,$SUBMITTED_EMAIL, $con)
{
$result = mysqli_query($con,"SELECT * FROM alma19ca WHERE binary CONTACT='$SUBMITTED_CONTACT' OR binary EMAIL = '$SUBMITTED_EMAIL'");
	if(!$result || mysqli_num_rows($result) == 0)
	{
		return false;	
	}
	else
	{
		return true;
	}

}
function generate_CA_ID($con)
{
	
	$result = mysqli_query($con,"SELECT * FROM ca2k20");

	$id = mysqli_num_rows($result) + 1500;
	$CA_ID = "ALMA20CA".$id;
	return $CA_ID;	
}

function send_email($NAME, $college,$EMAIL, $CONTACT, $pay, $tid)
{
	$replyto = $EMAIL;
    $replysubject = "Aghaaz | Alma Fiesta'20";

	// Set content-type header for sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: Alma Fiesta <donotreply@almafiesta.com>'."\r\n";
	
	 
	 $replymessage .= '
    <html>
    <head>
        <title>Welcome!</title>
	    <link href="https://fonts.googleapis.com/css?family=Raleway:300" rel="stylesheet">

    </head>
    <body style="font-family:"Raleway"">
        <!--<h1>Thanks you for joining with us!</h1>-->';
		$replymessage .= 'Hello there ';
		$replymessage .= $NAME;
		$replymessage .= ',<br><br>';
   $replymessage .= 'You have successfully registered for Aghaaz - Fashion Show of Alma Fiesta.<br><br>';
  	/*$replymessage .= 'We are glad to know that you are interested to be the Campus Ambassador in your college for ALMA FIESTA 2020 which will be the 11th edition next year. Since its 1st edition, Alma Fiesta has followed a long way journey to reach here. Heralded as the "Biggest Debutant Fest of India" by The Telegraph in its maiden year 2010. Alma Fiesta has since grown to become a beacon of culture and social change. With 150+ colleges, 20,000+ footfall, shimmering stars of  "ARON CHUPA", "INDIAN OCEAN", "AGNEE", "GAJENDRA VERMA" and "NIKHIL DSOUZA", Alma Fiesta has made a mark unprecedented and unachievable by its contemporaries. An epitome of celebration, Alma Fiesta organises events of dance, music, dramatics and fine arts, workshops like Salsa and many more.<br><br>';
	$replymessage .=  'The results of Campus Ambassador Programme will be out soon. You will be contacted via the registered Email Id if you get selected. Please take note of your CA Id that will be used later<br>';
	 $replymessage .= 'Name <b>';
	 $replymessage .= $NAME;*/
	 $replymessage .= '</b><br><br>';
	 $replymessage .=  '<center><table style="border: 2px dashed #FB4314; width: 100%; height: 200px; margin:20px;" cellspacing="10px">
			<tr align="center">
				<th colspan="2">Aghaaz - Fashion Show of Alma Fiesta</th>
			</tr>
			<tr align="center">
                <th>Name:</th><td><i>';
		$replymessage .= $NAME;
		$replymessage .= '</i></td>
            </tr>
            <tr align="center" >
                <th>Email:</th><td>';
		$replymessage .= $EMAIL;
		$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>CONTACT:</th><td>';
		$replymessage .= $CONTACT;
		$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>COLLEGE:</th><td>';
		$replymessage .= $college;
		$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>Payment Mode:</th><td>';
		$replymessage .= $pay;
		$replymessage .= '</td>
            </tr>
			<tr align="center">
                <th>Transaction ID:</th><td>';
		$replymessage .= $tid;
		$replymessage .= '</td>
            </tr>
            <tr align="center">
                <th>Facebook Page:</th><td><a href="https://www.facebook.com/almafiesta/">ALMA FIESTA, IIT Bhubaneswar</a></td>
            </tr>
			<tr align="center">
				<th colspan="2"><a href="https://www.youtube.com/watch?v=GJYMtLu-_aE">Theme Video!</a></th>
			</tr>
        </table></center>';
	$replymessage .= 'This e-mail is automated, so please DO NOT reply';
	$replymessage .= '
    </body>
    </html>';
   
   
 mail($replyto, $replysubject, $replymessage, $headers);
}
?>