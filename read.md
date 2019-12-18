MÔ TẢ

Công dụng
-	Hỗ trợ cho hệ thống
    + Chấm điểm nhanh chóng ngay sau hoàn thành bài thi.
    + Hiển thị các thông báo đến người dùng.
-	Hỗ trợ cho người dùng 
    + Đăng nhập hệ thống của phần mềm 
    + Đăng ký vào hệ thống của phần mềm 
    + Đăng xuất khỏi hệ thống
    Ứng dụng
- Áp dụng cho các đối tượng học sinh, sinh viên.

Mục đích xây dựng bào toán

    Website sử dụng ngôn ngữ php để thiết kế, kết hợp vói css, html, ajax,…
    Sử dụng hệ quản trị cơ sở dữ liệu Mysql. 
    Người dùng sau khi đăng nhập vào hệ thống thì có thể chọn đề thi. 
    Hệ thống sẽ hiện danh sách câu hỏi. 
    Sau khi trả lời xong, hiện điểm và câu đúng,sai. 
    Để làm đề thi thì yêu cầu người dùng phải đăng nhập mới có thể làm bài. 
- Đầu vào/ đầu ra của bài toán
    + Input: 
        • Nhập dữ liệu các câu hỏi
        • Trả lời cầu hỏi bằng việc chọn 1 trong 4	
    + Output:
        • Số câu trả lời đúng
        • Số cấu trả lời sai
- Hướng giải quyết bài toán.
    + Nhập cơ sở dữ liệu và nhập dữ liệu trong mysql.
    + Viết chương trình bằng ngôn ngữ php trong visual studio code.
    + Xây dựng giao diện bằng css, html.


CÁC BƯỚC CÀI ĐẶT VÀ CÔNG CỤ HỖ TRỢ

- Cài đặt
    • Bước 1: Clone Responsity này về máy của bạn.
    • Bước 2: Nếu bạn dùng Xampp cho máy.
        Copy folder vừa clone về lưu vào thư mục mới trong htdocs của Xampp
    • Bước 3: Mở Xampp.
    • Bước 4: Vào google của bạn nhập locallhost:8080/BTLPHP.php/
        Trong đó:	8080 là PORT trong Xampp của bạn hiện mở.
                    BTLPHP.php: tên file lưu chương trình của bạn.
- Nếu bạn muốn làm việc với code: Sử dụng 2 file đã được download về trong htdocs mở bằng Visual Studio Code
    + File BTLPHP.php : fie chương trình web luyện thi trắc nghiệm  bằng code PHP.
    + File styel.css : file điều chỉnh giao diện web luyện thi trắc nghiệm.


NỘI DUNG BÀI TOÁN

Đã hoàn thành
- Chương trình đã hoàn thành phần thiết kế giao diện.
    Trang đăng nhập
    Trang đăng ký
    Trang chủ
    Trang làm bài


HƯỚNG PHÁT TRIỂN CHO BÀI TOÁN
    • Xử lý ngoại lệ tất cả các trường hợp còn thiếu
    • Cấu trúc lại toàn bộ code cho đồng bộ và thống nhất
    • Xây dựng thêm các chức năng khác nâng cao, nhiều bộ đề hơn, nhiều bọ đề khó hơn để phục vụ cho học sinh và sinh viên.
