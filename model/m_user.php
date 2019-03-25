<?php
function m_get_data(){
    include "connection.php";
    $query = "SELECT * FROM users";//could be more d
    $result = mysqli_query($conn, $query);
    $rows = [];
    if($result && mysqli_num_rows($result) > 0){
        while ($get_result_to_array = mysqli_fetch_array($result, MYSQLI_ASSOC)){//mysqli_fetch_array use for convert it as array
            $rows[] = $get_result_to_array;
        }
    }
   return $rows;
 }
    function add_data(){
        include 'connection.php';
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = "INSERT INTO users(username,name,password) VALUES('$username', '$name', '$password')";
        $result= mysqli_query($conn, $query);
        return $result;
    }

    function delete_data(){
        include 'connection.php';
        $id = $_GET['id'];
        $query= "DELETE FROM users WHERE id='$id'";
        $result = mysqli_query($conn, $query);
        return $result;
    }
    function getUpdateInfo() {
        include 'connection.php';
        $id = $_GET['id'];
        $query = "SELECT * FROM users WHERE id='$id'";//could be more d
        $value = mysqli_query($conn,$query);
        return $value;
    }
    function update_data(){
        include 'connection.php';
        $id = $_GET['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $password = $_POST['password'];
        $query = "UPDATE users SET username = '$username', name = '$name', password='$password' WHERE id='$id'";
        $value = mysqli_query($conn,$query);
        return $value;
    }

   
function login_form(){
    include 'connection.php';
    $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
    $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);

    if ($uname != "" && $password != ""){

        $sql_query = "SELECT count(*) as cntUser from users where username='".$uname."' and password='".$password."'";
        $result = mysqli_query($conn,$sql_query);
        $row = mysqli_fetch_array($result);

        $count = $row['cntUser'];

        if($count > 0){
            $_SESSION['uname'] = $uname;
            header('Location: index.php?action=view');
        }else{
            echo "Invalid username and password";
        }

    }
}
function form_register(){
    include "connection.php";
    $username = $_POST['username'];
    $name = $_POST['name'];
    $password = $_POST['password'];
   
   
    $query= "INSERT INTO users(username,name,password) VALUES('$username','$name','$password')";
    $value= mysqli_query($conn,$query);
    return $value;
}
    
   ?>
