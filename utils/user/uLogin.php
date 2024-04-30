<?php

if(!defined("WEB_ROOTPATH")){
    define("WEB_ROOTPATH", "/var/www/html/");
}

include_once(WEB_ROOTPATH . "utils/GLOBAL_DEFINES.php");
include_once(WEB_ROOTPATH . "utils/database/dConnect.php");

function User_VerifyLogin(){

    $dbHandler = DB_EstConnection();

    if ($_SERVER['REQUEST_METHOD'] === "POST"){

        $account  = $_POST['fAccount']  ?? '';
        $password = $_POST['fPassword'] ?? '';

        $stmt = $dbHandler->prepare("SELECT * FROM User WHERE Account = :Account");
        $stmt->bindParam(':Account', $account);
        $stmt->execute();

        $tgtUser = $stmt->fetch(PDO::FETCH_ASSOC);

        echo "<script>alert('". $tgtUser["Account"] ."')</script>";

        if (($tgtUser) && ($password == $tgtUser['Password'])) {
      
            $_SESSION['ID']         = $tgtUser['ID']; 
            $_SESSION['Account']    = $tgtUser['Account']; 
            $_SESSION['Email']      = $tgtUser['Email']; 
            $_SESSION['Permission'] = $tgtUser['Permission'];

            if($_SESSION['Permission'] == "ADMIN"){
                global $isLogin;
                $isLogin = true;
                header('Location: ../index.php');
            }else{
                global $isLogin;
                $isLogin = true;
                header('Location: ../contact.php'); 
            }
        
            exit();
        } else {
            
            global $isLogin;
            // 登入失敗以及錯誤訊息
            $isLogin = false;
            echo "<script>alert('Invalid user name or password');</>";
        }
    }
}