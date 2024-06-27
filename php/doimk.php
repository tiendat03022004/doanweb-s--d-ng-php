<?Php

$conn = mysqli_connect('localhost','root','','users');
$p1=$_POST['passwordht'];
$p2=$_POST['passwordnew'];
$p3=$_POST['passwodagain'];


if($p2 == $p3){
    $sql="UPDATE login_register SET password='$p2' where password='$p1' ";
    $kq=mysqli_query($conn,$sql);
    echo '<script>alert("lưu thành công mật khẩu.");</script>';
    echo '<script>
            setTimeout(function() {
                window.location.href = "/dangnhap (1)/login.html";
            }, 50); 
          </script>';
          exit();
       
}

else{

    echo '<script>alert("mật khẩu không trùng khớp vui lòng kiểm tra");</script>';
    echo '<script>
    setTimeout(function(){
        window.location.href= "/dangnhap (1)/lamlaimk.html"
    },50);
    </script>';
    exit();
  

}


?>