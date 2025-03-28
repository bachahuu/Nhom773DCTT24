# QuanLyHoSoNhanSu
Hướng Dẫn Cài Đặt và Chạy Dự Án
Yêu Cầu Tiên Quyết

Git
Visual Studio Code (VSCode)
XAMPP
PHP
MySQL

Bước 1: Cài Đặt Môi Trường

Tải và cài đặt Git
Tải và cài đặt XAMPP
Tải và cài đặt Visual Studio Code
Khởi động XAMPP Control Panel

Bật Apache
Bật MySQL



Bước 2: Clone Dự Án

Mở Command Prompt hoặc Terminal
1)Di chuyển đến thư mục htdocs của XAMPP:
cd C:\xampp\htdocs
2)Clone dự án từ repository:
git clone [URL_REPOSITORY]

Bước 3: Import Cơ Sở Dữ Liệu

Mở trình duyệt và truy cập localhost/phpmyadmin
Tạo database mới
Import file .sql từ thư mục dự án:

Chọn "Import"
Chọn file .sql
Nhấn "Go"


Bước 4: Chuẩn Bị Tài Khoản
Chạy file taikhoan_index.php trước.
Thực hiện cập nhật mật khẩu theo hướng dẫn.
lý do : phải mã hóa mật khẩu tài khoản trước thì mới đăng nhập được

Bước 5: Chạy Dự Án
Truy cập localhost/[TÊN_THƯ_MỤC_DỰ_ÁN]
Đăng nhập bằng tài khoản vừa chuẩn bị
Hệ thống sẽ chuyển hướng:

Tài khoản Admin: Giao diện quản trị
Tài khoản Nhân viên: Giao diện nhân viên

#chức năng chính của hệ thống
Chức Năng Quản Trị Viên (Admin):
Quản lý tài khoản
Quản lý nhân sự
Quản lý công việc
Quản lý chức vụ
Quản lý nghỉ phép
Quản lý lương
Lịch sử công tác
Báo cáo thống kê

Chức Năng Nhân Viên:
Quản lý thông tin cá nhân
Lịch sử công tác
Quản lý nghỉ phép
Lịch sử lương

Lưu Ý Quan Trọng
Đảm bảo Apache và MySQL đang chạy
Kiểm tra kết nối cơ sở dữ liệu
Không bỏ qua bước khởi tạo mật khẩu

Khắc Phục Sự Cố
Lỗi kết nối: Kiểm tra cài đặt XAMPP
Lỗi database: Kiểm tra kết nối MySQL
Lỗi đăng nhập: Xác minh tài khoản
