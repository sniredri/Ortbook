<?php

include '../classes/users.class.php';

$user = new Users();

if(isset($_POST['getUser'])){
    $id = $_POST['user_id'];
    $User = $user->getUser($id);
    echo json_encode($User, JSON_FORCE_OBJECT);
}
if(isset($_POST['getUserByEmail'])){
    $email = $_POST['email'];
    $User = $user->getUserByEmail($email);
    echo json_encode($User, JSON_FORCE_OBJECT);
}
if(isset($_POST['getUserById'])){
    $user_id = $_POST['user_id'];
    $User = $user->getUserById($user_id);
    echo json_encode($User, JSON_FORCE_OBJECT);
}
if(isset($_POST['getUserGallery'])){
    $user_id = $_POST['user_id'];
    $value=$_POST['value'];
    $User = $user->getUserGallery($user_id,$value);
    echo json_encode($User, JSON_FORCE_OBJECT);
}
if(isset($_POST['getNumberOfFriends'])){
    $user_id = $_POST['user_id'];
    $User = $user->getNumberOfFriends($user_id);
    echo json_encode($User, JSON_FORCE_OBJECT);
}
if(isset($_POST['getUserFriends'])){
    $user_id = $_POST['user_id'];
    $value=$_POST['value'];
    $User = $user->getUserFriends($user_id,$value);
    echo json_encode($User, JSON_FORCE_OBJECT);
}


if(isset($_POST['getUsersByName'])){
    $userName = $_POST['userParamsValue'];
    $User = $user->getUsersByName($userName);
    echo json_encode($User, JSON_FORCE_OBJECT);
}

?>