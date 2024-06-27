<?php
 $p=$_POST['password'];
 $u=$_POST['username'];
$kn=mysqli_connect('localhost','root','','users');
$cl= 'Select password,username,role from login_register';
$kq=mysqli_query($kn,$cl);

while($row = mysqli_fetch_array($kq)){
 

if(($row['password'] == $p) && ($row['username']== $u)){
    if($row['role'] == 0){
        header('location:/thethao/index.html');

    }elseif($row['role'] == 1) {
        header('location:/dangnhap (1)/admin.html');
    } elseif($row['password'] != $p){
        echo '<script>
        alert("Kiểm tra lại tên tài khoản")
        </script>';
        echo '<script>setTimeout(function(){
            window.location.href="/dangnhap (1)/login.html"},50);
            </script>';
    
            exit();
    }else{
        echo '<script>
        alert("Kiểm tra lại mat khau")
        </script>';
        echo '<script>setTimeout(function(){
            window.location.href="/dangnhap (1)/login.html"},50);
            </script>';
            exit();
        }
}
   
    
    
    
}



?>