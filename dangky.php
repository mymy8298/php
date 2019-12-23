<?php 
    
    if (isset($_POST['dangky'])){
        //Nhúng file kết nối với database
        include('config.php');
            
        //Khai báo utf-8 để hiển thị được tiếng việt
        // header('Content-Type: text/html; charset=UTF-8');
            
        //Lấy dữ liệu từ file dangky.php
        $TenTK   = addslashes($_POST['txtTenTK']);
        $matkhau   = addslashes($_POST['txtmatkhau']);
        $email      = addslashes($_POST['txtEmail']);
        $tenuser   = addslashes($_POST['txttenuser']);
        $ngaysinh   = addslashes($_POST['txtngaysinh']);
        $gioitinh        = addslashes($_POST['txtgioitinh']);
        $sodt        = addslashes($_POST['txtsodt']);
            
        //Kiểm tra người dùng đã nhập liệu đầy đủ chưa
        if (!$TenTK || !$matkhau || !$email || !$tenuser || !$ngaysinh || !$gioitinh || !$sodt)
        {
            echo "Vui lòng nhập đầy đủ thông tin. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
            
            // Mã khóa mật khẩu
            // $matkhau = md5($matkhau);
            
        //Kiểm tra tên đăng nhập này đã có người dùng chưa
        if (mysqli_num_rows(mysqli_query($db,"SELECT TenTK FROM user WHERE TenTK='$TenTK'")) > 0){
            echo "Tên đăng nhập này đã có người dùng. Vui lòng chọn tên đăng nhập khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
            
        //Kiểm tra email có đúng định dạng hay không
        // if (!eregi("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$", $email))
        // {
        //     echo "Email này không hợp lệ. Vui lòng nhập email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //     exit;
        // }
            
        //Kiểm tra email đã có người dùng chưa
        if (mysqli_num_rows(mysqli_query($db,"SELECT email FROM user WHERE email='$email'")) > 0)
        {
            echo "Email này đã có người dùng. Vui lòng chọn Email khác. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        //Kiểm tra dạng nhập vào của ngày sinh
        // if (!ereg("^[0-9]+/[0-9]+/[0-9]{2,4}", $ngaysinh))
        // {
        //         echo "Ngày tháng năm sinh không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //         exit;
        // }

        // if (!eregi("^[0-9])", $sodt))
        // {
        //     echo "Số điện thoại này không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        //     exit;
        // }
            
        //Lưu thông tin thành viên vào bảng
        @$adduser = mysqli_query($db,"
            INSERT INTO user (
                TenTK,
                matkhau,
                email,
                tenuser,
                ngaysinh,
                gioitinh,
                sodt
            )
            VALUE (
                '{$TenTK}',
                '{$matkhau}',
                '{$email}',
                '{$tenuser}',
                '{$ngaysinh}',
                '{$gioitinh}',
                '{$sodt}'
            )
        ");
                            
        //Thông báo quá trình lưu
        if ($adduser)
        {
            header("Location: TrangChu.php");
            exit;
        } else {
            echo "Có lỗi xảy ra trong quá trình đăng ký. <a href='dangky.php'>Thử lại</a>";
        }
    }     
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="css/style.css">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Trang đăng ký</title>
    </head>

    <body>
        <!-- <h1>Trang đăng ký thành viên</h1> -->
        <div class="container">
            <section id="content">
            <form action="dangky.php" method="POST">
                <!-- <table cellpadding="0" cellspacing="0" border="1"> -->
                    <div>
                        <input type="text" name="txtTenTK" splaceholder="Tên đăng nhập" />
                    </div>
                    <div>
                        <input type="password" name="txtmatkhau" placeholder="Mật Khẩu" />
                    </div>
                    <div>
                        <input type="text" name="txtEmail"  placeholder="Email" />
                    </div>
                    <div>
                        <input type="text" name="txttenuser"  placeholder="Họ và tên" />
                    </div>
                    <div>
                        <input type="text" name="txtngaysinh"  placeholder="Ngày sinh" />
                    </div>
                    <div>
                        <input type="text" name="txtgioitinh"  placeholder="Giới tính" />
                    </div>
                    <div>
                    <input type="text" name="txtsodt"  placeholder=" Số Điện Thoại" />
                    </div>
                    <div>
                        <input type="submit" name="dangky" value="Đăng ký" />
                        
                        <input type="reset" value="Nhập lại" />
                    </div>
        </form>
        </section>

        <script src="js/index.js"></script>
        <?php

            // Nếu không phải là sự kiện đăng ký thì không xử lý
            if (!isset($_POST['dangky'])){
                die('');
            } 
        ?>
        
    </body>
</html>