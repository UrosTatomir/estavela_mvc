<?php
require_once '../controllers/Controller.php';
$controller= new Controller();
$page=isset($_GET['page'])?$_GET['page']:"";
switch ($page){

 case 'showgis':
 $controller->showGis();
 break;

 case 'showhome':
 $controller->showHome();
 break;

 case 'showinfo':
 $controller->showInfo();
 break;

 case 'showlogin':
 $controller->showLogin();
 break;

 case 'showregister':
 $controller->showRegister();
 break;

 case 'Logout':
 $controller->logout();
 break;

 case 'forgot_password':
 $controller->forgotPassword();
 break;

 case 'shownewsletter':
 $controller->showNewsletter();
 break;
 
}
if($_SERVER['REQUEST_METHOD']=='POST'){
$page=isset($_POST['page'])?$_POST['page']:"";

switch($page){
 case 'Log in':
 $controller->login();
 break;

 case 'Register':
 $controller->registration();
 break;

 case 'confirmation email':
 $controller->confirmationEmail();
 break;

 case 'update_password':
 $controller->updatePassword();
 break;

 case 'Submit newsletter':
 $controller->newsletterSignup();
 break;

 case 'Send newsletter':
 $controller->sendNewsletter();
 break;

 case 'newsletter_unsubscribe':
 $controller->newsletterUnsubscribe();
 break;

}
}
?>