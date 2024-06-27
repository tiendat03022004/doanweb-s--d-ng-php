<?php
    if(isset($_POST['dangky'])){
    $f = $_POST['Firstname'];
    $m = $_POST['Middlename'];
    $l = $_POST['Lastname'];
    $u = $_POST['username'];
    $p = $_POST['password'];
    $e= $_POST['email'];
    $conn = mysqli_connect('localhost','root','','users');
    $sql = "SELECT username, password,email FROM login_register";
    $kq = mysqli_query($conn, $sql);
    $row=mysqli_fetch_array($kq);
   
                     if($row['email']===$e){
                
                      echo '<script>setTimeout(function(){
                      window.location.href="/dangnhap (1)/createacc.php" ;
                       },40)</script>';
                       echo '<script>setTimeout(function(){
                        alert(" email đã được đăng ký trước đó");},50)</script>';
                    
                       exit();

                      }else  if($row['username'] === $u ){
                  
                        echo '<script>
                        alert("tên đăng nhập đã tồn tại")</script>';
                        echo '<script>setTimeout(function(){
                          window.location.href="/dangnhap (1)/createacc.php" ;
                         },50)</script>';
                         exit();

                      }else if($row['password'] === $p){
                        echo '<script>
                      alert(" mật khẩu đã tồn tại")</script>';
                      echo '<script>setTimeout(function(){
                        window.location.href="/dangnhap (1)/createacc.php" ;
                       },50)</script>';
                       exit();
                  
                      }
                    else{
                        $sql =  "INSERT INTO login_register (Firstname, Middlename, Lastname, username,password,email) VALUES ('$f', '$m', '$l', '$u', '$p','$e')";;
                        $kq = mysqli_query($conn, $sql);
                        echo '<script>
                        alert("Mật khẩu đã được tạo thành công")</script>';
                        echo '<script>setTimeout(function(){
                          window.location.href="/dangnhap (1)/login.html"  ;
                         },50)</script>';
                         exit();
                        }
                      }
                    
                    
                    
        
    ?>
