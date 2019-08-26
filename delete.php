<?php
require_once 'vendor/autoload.php';
require_once 'db.config.php';

class User extends Illuminate\Database\Eloquent\Model{};

$id=$_GET['id'];
$users=User::find($id);
$users->delete();

header('Location:http://hillel.fig/13lesons/index.php');
?>