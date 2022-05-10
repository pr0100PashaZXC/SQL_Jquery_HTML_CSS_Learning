<?php 

session_start();

echo <<<_INIT
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страничные переходы</title>
    <link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.js"></script>
    <script src="javascript.js"></script>

_INIT;

require_once 'functions.php';
$userstr = 'Приветствуем тебя, славяно-арий. ШУЕ ППШ!!!';

if(isset($_SESSION['user'])){
    $user = $_SESSION['user'];
    $loggedin = TRUE;
    $userstr = "Logged in as: $user";
}
else $loggedin = FALSE;

echo <<<_MAIN
<title>KorneplodNet: $userstr</title>
</head>
<body>
    <div data-role="page">
        <div data-role="header">
            <div id="logo" class="center">K  <img id="robin" src="robin.gif"> rneplod.Net</div>
            <div class="username">$userstr</div>
        </div>
        <div data-role="content">
_MAIN;

    if($loggedin){
        echo <<<_LOGGEDIN
            <div class="center">
                <a data-role="button" data-inline="true" data-icon="home"
                    data-transition="slide" href="members.php?view=$user">Home</a>
                <a data-role="button" data-inline="true"
                    data-transition="slide" href="members.php">Members</a>
                <a data-role="button" data-inline="true"
                    data-transition="slide" href="friends.php">Friends</a>
                <a data-role="button" data-inline="true"
                    data-transition="slide" href="messages.php">Messages</a>
                <a data-role="button" data-inline="true"
                    data-transition="slide" href="profile.php">Edit profile</a>
                <a data-role="button" data-inline="true"
                    data-transition="slide" href="logout.php">Log out</a>                         
            </div>
        _LOGGEDIN;
    }
    else{
        echo <<<_GUEST
            <div class="center">
                <a data-role="button" data-inline="true" data-icon="home"
                    data-transition="slide" href="index.php">Home</a>
                <a data-role="button" data-inline="true" data-icon="plus"
                    data-transition="slide" href="signup.php">Sign up</a>
                <a data-role="button" data-inline="true" data-icon="check"
                    data-transition="slide" href="login.php">Log in</a>                         
            </div>
            <p class="info">(You must logged in to use this app)</p>
            _GUEST;
    }
?>