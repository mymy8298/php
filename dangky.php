<?php 
    include('config.php');
    if (isset($_POST['dangky'])){
        
        $TenTK   = addslashes($_POST['txtTenTK']);
        $matkhau   = addslashes($_POST['txtmatkhau']);
        $email      = addslashes($_POST['txtEmail']);
        $tenuser   = addslashes($_POST['txttenuser']);
        $gioitinh        = addslashes($_POST['txtgioitinh']);
        $sodt        = addslashes($_POST['txtsodt']);
        $pl = 2;
            
        if (!$TenTK || !$matkhau || !$email || !$tenuser || !$gioitinh || !$sodt)
        {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        if (mysqli_num_rows(mysqli_query($db,"SELECT TenTK FROM user WHERE TenTK='$TenTK'")) > 0){
            echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
            
        if (mysqli_num_rows(mysqli_query($db,"SELECT email FROM user WHERE email='$email'")) > 0)
        {
            echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }

        @$adduser = mysqli_query($db,"
            INSERT INTO user (
                TenTK,
                Pass,
                TenUser,
                GioiTinh,
                Phone,
                Email,
                pl
            )
            VALUE (
                '{$TenTK}',
                '{$matkhau}',    
                '{$tenuser}',
                '{$gioitinh}',
                '{$sodt}',
                '{$email}',
                '{$pl}'
            )
        ");
                            
        if ($adduser)
        {   
            $_SESSION['TenTK'] = $TenTK;
            header("Location: TrangChu.php");
            exit;
        } else {
            echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
        }
    }     

    if (!isset($_POST['dangky'])){
        die('');
    } 
?>