<?php
require_once 'vendor\autoload.php';
require_once 'db.config.php';

// dytctys bpvtytybz c GitHub

class User extends Illuminate\Database\Eloquent\Model{
    //Выбрать другу таблицу    
    //protected $table='user';
    };

//вставить данные
//$users=new User;
//$users->first_name='Jon';
//$users->last_name='Doe';
//$users->email='doe@dom.com';
//$users->password='12345';
//$users->save();
//echo $users;

//вывод данных
//$users= User::all();
//foreach ($users as $user){
//    echo $user->first_name.'<br>';
//    echo $user->last_name.'<br>';
//    echo $user->email.'<br>';
//    echo $user->password.'<br><hr>';
//};

////обновление
//$users=User::find(1);
//$users->email='joe@mail.com';
//$users->save();
//echo $users;

////удалить
//$users=User::find(1);
//$users->delete();
//var_dump($users);


// для записи в БД с формы
if ($_POST['first_name']){
    $users=new User;
    $users->first_name=$_POST['first_name'];
    $users->last_name=$_POST['last_name'];
    $users->password=$_POST['password'];
    $users->email=$_POST['email'];
    $users->save();  
}else echo 'Введите данные';

//для вывода данных с таблицы
//function scrin(){
//$users= User::all();
//foreach ($users as $user){
//    echo $user->id.'<br>';
//    echo $user->first_name.'<br>';
//    echo $user->last_name.'<br>';
//    echo $user->email.'<br>';
//    echo $user->password.'<br>';
//};
//};

?>

<!DOCTYPE HTML>
    <head> 
    <title>Eloquent</title>
    </head>
    <body>
        <form action='index.php' method='post'>
            <p>
            Имя:
            <input type='text' name='first_name'>
            </p>
            <p>
            Фамилия:
            <input type='text' name='last_name'>
            </p>
            <p>
            пароль:
            <input type='text' name='password'>
            </p>
            <p>
            почта:
            <input type='text' name='email'>
            </p>
            <p>
            <input type='submit'>
            </p>
        </form>
        <hr>
        <?php $users=User::all(); ?>
        <?php foreach ($users as $user): ?>
            <?= $user->first_name; ?><br>
            <?= $user->last_name;?><br>
            <?= $user->password;?><br>
            <?= $user->email;?><br>
            <a href='delete.php?id=<?= $user->id ?>'>Del</a><br>
            <a href='updete.php?id=<?= $user->id ?>'>Update</a><hr>
        <?php endforeach; ?>
        
        
        
    </body>
