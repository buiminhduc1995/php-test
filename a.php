<html>
<title>Abc</title>
<?php 
if(isset($_POST['btn'])){
    echo ($_POST['username']);
    echo '<br/>';
    echo ($_POST['password']);
    echo '<br/>';
    $user=$_POST['username'];
    $pass=$_POST['password'];
    if($user=="admin" && $pass=="12345"){
        echo "<font color='red'>Welcome to, admin</font>";
    }else{
        echo "Wrong username or password, please try again";
    }
};
$color = array('white', 'green', 'red', 'blue', 'black');
echo count($color);
echo '<br/>';
echo $color[1];
foreach ($color as $key => $color)
{
    echo '<li>';
    echo 'Phần tử thứ: '. $key .' '. $color;
    echo '</li>';
}
$a = 13;
if($a % 2 ===0){
    echo 'Số vừa cho là số chẵn';
} else {
    echo ' Số vừa cho là số lẻ';
};
$sum = 0;
for ($i = 0 ; $i <= 100 ; $i ++) {
    $sum = $sum + $i;
};
echo $sum;
echo '<br/>';
class Student {
    public $name = 'Bui Minh Duc';
};
$obj = new Student();
echo $obj->name;
?>
<body>
<form method="post" action="b.php"> 
<input type='text' name='username'/><br/>
<input type='password' name='password'/>
<input type="submit" name="btn" value="Đăng Nhập"/>
</form>

</body>
</html>