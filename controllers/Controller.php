<?php 
require_once '../model/DAO.php';
require '../vendor/autoload.php';
require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';
require_once '../classes/Config.php';
use PHPMailer\PHPMailer\PHPMailer;
class Controller{

public function showGis(){
    include 'gis.php';
}

public function showHome(){
    include 'index.php';
}

public function showInfo(){
    include 'info.php';
}
public function showLogin(){
    include 'login.php';
}
public function showRegister(){
    $register=1;
    include 'login.php';
}
public function send_email($email=null, $subject=null, $message=null, $headers=null){

    $mail = new PHPMailer();

     //Server settings

    $mail->SMTPDebug = 2;                                
    $mail->isSMTP();                                     
    $mail->Host = Config::SMTP_HOST;                               
    $mail->Username = Config::SMTP_USER;                 
    $mail->Password = Config::SMTP_PASSWORD;
    $mail->Port = Config::SMTP_PORT; 
    $mail->SMTPAuth = true;                          
    $mail->SMTPSecure = 'tls'; 
    $mail->isHTML(true);
    $mail->Charset = 'UTF-8'; 
    $mail->setFrom('tatomir.uros@estavela.in.rs','Uros Tatomir');
    $mail->addAddress($email);                     
     

    //Content                                    
    $mail->Subject = $subject;
    $mail->Body    = $message;
    $mail->AltBody = $message;

    if(!$mail->send()){

     echo 'Message could not be sent.';
     // echo 'Message has been sent';
     echo'Mailer Error:'.$mail->ErrorInfo;

    } else {
         echo'Message has been sent.';
    }  

    // return mail($email, $subject, $message, $headers); 

}
public function login(){
 $name=isset($_POST['name'])?$_POST['name']:"";
 $password=isset( $_POST['password'])?$_POST['password']:"";

if(!empty($name) && !empty($password)){
    $dao= new DAO();
    $user=$dao->login($name,$password);
    if($user['active']==1){
    //uvek kada koristimo sesiju prvo treba da je startujemo
    session_start();
    $_SESSION['user']=$user;
    include 'index.php'; //ovo mora da se promeni kad se vrsi logovanje sa index strane da se vrati na index stranu

    }else{
        $msg= "Incorrect name or password";
        include 'login.php';
    }

}else{
$msg= "You must enter name and password";
include 'login.php';
}
}
public function registration(){
   $name=isset($_POST['name'])?$_POST['name']:"";
   $surname=isset($_POST['surname'])?$_POST['surname']:"";
   $email=isset($_POST['email'])?$_POST['email']:"";
   $password=isset($_POST['password'])?$_POST['password']:"";
   $confirmpassword=isset($_POST['confirmpassword'])?$_POST['confirmpassword']:"";

   $errors=array();

   if(empty($name)){
       $errors['name']= "You need to enter a tname";
   }
   if(empty($surname)){
       $errors['surname']= "You need to enter a surname";
   }
   if(empty($email)){
       $errors['email']= "You need to enter a email";

   }else{

     if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){
         $errors['email']= "You need to enter a valid email";
     }else{
         $dao=new DAO();
         $mail=$dao->getAllUsers();
         foreach($mail as $m){
             if($m['email']==$email){
              $errors['email']= "This email already exists, please enter another email";
             }
         }
     }
   }
   if(empty($password)){
       $errors['password']="You need to enter password";
   }
   if(empty($confirmpassword)){

       $errors['confirmpassword']= "You need to confirm the password";

   }else{ 
       if ($password !== $confirmpassword){

                $errors['confirmpassword'] = "Password fields do not match";
            }
        }
   if(count($errors)==0){
       $dao=new DAO();
       $active=1;
       $admin=0;
       $dao->register($name,$surname,$email,$password,$active,$admin);
       $msg= "You have successfully registered, please log in";
       include 'login.php';
   }else{

      $msg= "You need to enter the data correctly in the form ";
      $register=1;
      include 'login.php';
   }
}
public function logout(){
    session_start();
    unset($_SESSION['user']);
    header('Location:login.php');
}
public function forgotPassword(){
   include 'forgot_pass.php';
}
public function confirmationEmail(){
$email=isset($_POST['email'])?$_POST['email']:"";
// var_dump($email);
  if(empty($email)){
       $errors['email']= "You need to enter a email";

   }else{

        if(filter_var($email, FILTER_VALIDATE_EMAIL)==false){

         $errors['email']= "You need to enter a valid email";

        }else{
        
         $dao=new DAO();
        $email_user=$dao->getEmailUsers($email);

        if(!empty($email_user)){
         //slanje email poruke za verifikaciju usera
         $mail = new PHPMailer();
          //Server settings

            $mail->SMTPDebug = 2;                                
            $mail->isSMTP();                                     
            $mail->Host = Config::SMTP_HOST; //Config::SMTP_HOST; 'smtp.mailtrap.io'                              
            $mail->Username = Config::SMTP_USER; //Config::SMTP_USER;'9eaf2999b2deb3'                 
            $mail->Password = Config::SMTP_PASSWORD;   // Config::SMTP_PASSWORD;'b697a6d7252233'
            $mail->Port = Config::SMTP_PORT;  //Config::SMTP_PORT; 2525
            $mail->SMTPAuth = true;                          
            $mail->SMTPSecure = 'tls'; 
            $mail->isHTML(true);
            $mail->Charset = 'UTF-8'; 
            $mail->setFrom('tatomir.uros@estavela.in.rs','Uros Tatomir');
            $mail->addAddress($email);                     
            
            //Content                                    
     $mail->Subject = "Please reset your password";
     $mail->Body = "<h4>Here is your password reset code,click the link below.</h4><a href=\"". Config::DEVELOPMENT_URL ."/view/change_pass.php?email={$email}\">". Config::DEVELOPMENT_URL ."/view/change_pass.php?email={$email}</a>";

          $mail->AltBody = "From  tatomir.uros@estavela.in.rs";
                    if (!$mail->send()) {
                        echo 'Mailer Error: ' . $mail->ErrorInfo;
                    } else {
                        echo 'Message sent!';
                    }
            
        // $msg="Please check your email or spam folder for a password reset code";

        header('Location:login.php?msg=Please check your email or spam folder for a password reset code');
            //   include 'change_pass.php';           
        }else{
            $msg="Your email is not exist";
            include 'forgot_pass.php';
        }     
      }

   }
}
public function updatePassword(){
$email=isset($_POST['email'])?$_POST['email']:"";

$password=isset($_POST['password'])?$_POST['password']:"";
$confirmpassword=isset($_POST['confirmpassword'])?$_POST['confirmpassword']:""; 

 $errors=array();
 if(empty($password)){
       $errors['password']="You need to enter password";
   }
   if(empty($confirmpassword)){

       $errors['confirmpassword']= "You need to confirm the password";

   }else{ 
       if ($password !== $confirmpassword){

                $errors['confirmpassword'] = "Password fields do not match";
            }
        }
   if(count($errors)==0){
       $dao=new DAO();
      
       $dao->updatePass($password,$email);
       $msg= "You have successfully updated new password, please log in";
       include 'login.php';
   }else{

      $msg= "You need to enter the password correctly in the form ";
      include 'change_pass.php';
   } 
}
public function newsletterSignup(){
$name=isset($_POST['name'])?$_POST['name']:"";
$surname=isset($_POST['surname'])?$_POST['surname']:"";
$email=isset($_POST['email'])?$_POST['email']:"";

// validation newsletter
$errors=array();
if(empty($name)){
   $errors['name']= "You need to enter your name";
}
if(empty($surname)){
    $errors['surname']= "You need to enter surname";
}
if(empty($email)){
    $errors['email']= "You need to enter email";
   }else{
      if(filter_var($email, FILTER_VALIDATE_EMAIL) == false){
        $errors['email']= "You need to enter a valid email";
      }else{
        $dao = new DAO();
        $mail = $dao->getAllNewsletter();
                
        foreach($mail as $m){
        //  var_dump($m);
            if($m['email']==$_POST['email']){
                $errors['email'] = "This email already exists, please enter another email";
            }
        } 
      }
   }
if(count($errors)==0){
  $dao= new DAO();
  $dao->newsletterSignUp($name,$surname,$email);
  $msg= "You have been successfully added.";
  include 'index.php';
//   header('Location:index.php?msg=You have been successfully added.');
}else{
    $msg= "Please enter the data correctly in the form .";
    include 'index.php';
//   header('Location:index.php?msg=This email already exists, please enter another email or enter the data correctly in the form .');  
}
}//end newsletterSignup
public function showNewsletter(){
    include 'newsletter_admin.php';
}
public function sendNewsletter(){
    $subject=isset($_POST['subject'])?$_POST['subject']:"";
    $body=isset($_POST['Comments'])?$_POST['Comments']:"";
    $from='tatomir.uros@estavela.in.rs';
//DAO class----
$dao= new DAO();
$letter=$dao->getAllNewsletter();
 
            //send newsletter---
    $mail = new PHPMailer();
            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = Config::SMTP_HOST; //Config::SMTP_HOST; 'smtp.mailtrap.io'                            
            $mail->Username = Config::SMTP_USER; //Config::SMTP_USER;'9eaf2999b2deb3'                 
            $mail->Password = Config::SMTP_PASSWORD;   // Config::SMTP_PASSWORD;'b697a6d7252233'
            $mail->Port = Config::SMTP_PORT;  //Config::SMTP_PORT; 2525
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->isHTML(true);
            $mail->Charset = 'UTF-8';
            $mail->setFrom('tatomir.uros@estavela.in.rs', 'Uros Tatomir');
            $mail->addReplyTo('tatomir.uros@estavela.in.rs', 'Information');
        foreach ($letter as $value) {
            $name = $value['name'];
            $surname = $value['surname'];
            $email = $value['email'];
            $mail->addAddress($email);
            
     //Content
           $mail->Subject=$subject;
           $mail->Body="<html>
                        <head>
                        <title></title>
                        </head>
                        <body>                
<table border='0' cellpadding='0' cellspacing=0' style='background-color:#343A40; width: 100%; max-device-width: 600 px;'>
<thead>
<tr>
    <th style='padding: 0 0 0 30px; width: 100%; max-device-width: 425 px; height: 100 px;'>
    <a href='https://estavela.in.rs'><img style=' border-radius: 50%; float:left;' src='https://estavela.in.rs/images/estavela.logo.jpg' alt='vidi_me' width='50' /></a>
    </th>
</tr>
</thead>
</table>

<table  padding='10px' margin='10px' cellpadding='10' cellspacing='10' style='width: 100%; max-device-width: 425 px;'>
<thead>
     <tr>
     <th width='50%'>
      <h4 style='text-align:left;'><a href='https://estavela.in.rs'>www.estavela.in.rs</a></h4>
      <h4 style='text-align:left;'><a href='tatomir.uros@estavela.in.rs'>tatomir.uros@estavela.in.rs</a></h4>
      <h4 style='text-align:left;'><a href='https://webshop.estavela.in.rs/view'>Webshop project</a></h4>
      <h4 style='text-align:left;'><a href='https://oglasi.estavela.in.rs/view'>Oglasi project</a></h4>
      <h4 style='text-align:left;'><a href='https://laravel.estavela.in.rs'>Laravel project</a></h4>
      <h4 style='text-align:left;'><a href='https://scs.estavela.in.rs/view'>SCS & prof.Gavrilovic</a></h4>
      <h3 style='text-align:left;'>Dear  $name  $surname </h3>
     </th>     
     <th width='auto'>
      <a href='https://estavela.in.rs/info.php'><img src='https://estavela.in.rs/images/Przno.jpg' alt='przno' width='100' style='float: right;' /></a>
     </th>
     </tr>
</thead>
</table>

<table border='0' cellpadding='0' cellspacing=0' style='width:100%; max-device-width: 425 px;'>
<tbody>
     <tr>
     <td width='100%' style='padding: 25px 0 0 50px;'>
      <h4 style='text-align: left; font-style:italic;'> $body </h4>
     </td>
     </tr>
     <tr>
     <td style='padding: 10px 0 0 50px;'><h4 style='text-align: left;'><a href=' https://vidime.org/workshop.php'>Workshops</a></h4></td>
     </tr>
</tbody>    
</table>

<table border='0' padding='0px' margin='0px' cellpadding='0' cellspacing='0' style='width:100%; max-width: 425 px;'>
  <tr>
  
  <td style='padding: 25px 0 20 50px;'><h4>If you want to unsubscribe from the mailing list, click on the link below</h4><h4><a href='https://estavela.in.rs/view/newsletter_unsubscribe.php'>Newsletter unsubscribe</a></h4></td>
  </tr>
</table>
  
<table border='0' cellpadding='0' cellspacing=0' style='background-color:#343A40; width: 100%; max-device-width: 600 px;   valign: bottom;'>
 <tfoot>
  <tr>
    <td width='100%' style='height: 30px; background-color:#343A40; color:#FF7700; font-size:20px; text-align: center;'><a style='text-decoration: none;' href='https://estavela.in.rs'>Estavela</a></td>
   
  </tr>
 </tfoot>
</table>
                        </body>
                        </html>
                        ";
        $mail->AltBody = "From  tatomir.uros@estavela.in.rs";
        if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
        echo 'Message has been sent';
        }
            $mail->ClearAllRecipients(); //uklanja poslednji email iz petlje
 } //end foreach


}// end sendNewsletter
public function newsletterUnsubscribe(){
$email=isset($_POST['email'])?$_POST['email']:"";
$errors=array();
        if (empty($email)) {
            $errors['email'] = "You need to enter email";
        } else {
            if (filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
                $errors['email'] = "You need to enter a valid email";
            } else {
                $dao = new DAO();
                $mail = $dao->getEmailNewsletter($email);
                    
                if (empty($mail)) {
                     $errors['email'] = "This email does not exist in the database";
                }      
            }
        }
        if (count($errors) == 0) {
            $dao= new DAO();
            $dao->deleteEmailNewsletter($email);
            $msg = "Your email has been deleted successfully.";
            include 'index.php';
        }else{
            $msg = "Please enter the email correctly in the form .";
            include 'newsletter_unsubscribe.php';
        }


}
}//end class
?>