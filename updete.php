<?php
require_once "vendor\autoload.php";
require_once "db.config.php";

class User extends Illuminate\Database\Eloquent\Model{};
$id=$_GET['id'];
$users= new User;
$users=User::find($id);
if ($_POST['first_name']){
    $users->first_name=$_POST['first_name'];
    $users->last_name=$_POST['last_name'];
    $users->email=$_POST['email'];
    $users->password=$_POST['password'];
    $users->save();
    
    header('Location:http://hillel.fig/13lesons/index.php');
}

?>
<! doctype html>
    <head>
        <title>Update</title>
    </head>
    <body>
        <form method='post'>
            <p>
                Имя
            <input type='text' name="first_name" value='<?= $users->first_name ?>'>
            </p>
            <p>
                Фамилия
            <input type='text' name='last_name' value='<?= $users->last_name ?>'>
            </p>
            <p>
                Почта
            <input type='text' name='email' value='<?= $users->email ?>'>
            </p>
            <p>
                Пароль
            <input type='text' name='password' value='<?= $users->password ?>'>
            </p>
            <p> 
            <input type='submit'>
            </p>
        </form>
        
    </body>