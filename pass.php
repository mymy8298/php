<?php 
    include('config.php');
    if (isset($_POST['doimk'])){
        $matkhau   = addslashes($_POST['txtmatkhau']);
        $mkmoi = addslashes($_POST['txtdoimk']);
        $TenTK = $_SESSION['TenTK'];
        if (!$matkhau)
        {
            echo "Vui lòng nhập mật khẩu của bạn. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        if (!$mkmoi)
        {
            echo "Vui lòng nhập mật khẩu mới của bạn. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        if ($matkhau == $mkmoi)
        {
            echo "Mật khẩu mới giống mật khẩu cũ. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $query = mysqli_query($db,"SELECT * FROM user WHERE TenTK='$TenTK'");
        $row = mysqli_fetch_array($query);
        if ($matkhau != $row['Pass']) {
            echo "Mật khẩu không đúng. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
            exit;
        }
        $doimk = mysqli_query($db,"UPDATE user SET Pass='$mkmoi' WHERE TenTK='$TenTK'");
        @$update = $doimk;
                            
        if ($doimk)
        {
            header("Location: TrangChu.php");
            exit;
        } else {
            echo "Có lỗi xảy ra trong quá trình đổi mật khẩu. <a href='dangky.php'>Thử lại</a>";
        }
    }     
?>