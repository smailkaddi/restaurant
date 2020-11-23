<?php
include('connection.php');
$msg="";

if(isset($_POST['client']) && isset($_POST['adress']) && isset($_POST['tel']) && isset($_POST['nom'])&& isset($_POST['prix'])){
	$client=mysqli_real_escape_string($conn,$_POST['client']);
	$adress=mysqli_real_escape_string($conn,$_POST['adress']);
	$tel=mysqli_real_escape_string($conn,$_POST['tel']);
    $nom=mysqli_real_escape_string($conn,$_POST['nom']);
    $prix=mysqli_real_escape_string($conn,$_POST['prix']);
	
	
	mysqli_query($conn,"insert into cmd (client,adress,tel,nom,prix) values('$client','$adress','$tel','$nom','$prix')");
	$msg="your order successfully";
	
    $html="<table>
    <tr>
    <td>Name</td>
    <td>$client</td>
    </tr>
    <tr>
    <td>Email</td>
    <td>$adress</td>
    </tr>
    <tr>
    <td>Phone</td>
    <td>$tel</td>
    </tr>
    <tr>
    <td>nom</td>
    <td>$nom</td>
    </tr>
    <tr>
    <td>$prix</td>
    </table>";
	
	include('smtp/PHPMailerAutoload.php');
	$mail=new PHPMailer(true);
	$mail->isSMTP();
	$mail->Host="smtp.gmail.com";
	$mail->Port=587;
	$mail->SMTPSecure="tls";
	$mail->SMTPAuth=true;
	$mail->Username="";//email here
	$mail->Password="";//Password here
	$mail->SetFrom("");//email here
	$mail->addAddress("");//email here
	$mail->IsHTML(true);
	$mail->Subject="order client ";//Subject
	$mail->Body=$html;
	$mail->SMTPOptions=array('ssl'=>array(
		'verify_peer'=>false,
		'verify_peer_name'=>false,
		'allow_self_signed'=>false
	));
	if($mail->send()){
		echo"ordre send!!";
	}else{

        echo"order not send ";
       
	}
	echo $msg;
}
?>