<!DOCTYPE html>
<html lang="en">
<head>
    <title>Signup</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign in & Sign up Form</title>
    <link rel="stylesheet" href="{{Asset('login_public/style.css')}}" />
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-image: url('{{ asset('login_public/img/background_signup.png') }}');
            background-size: cover; /* Đảm bảo hình nền phủ kín trang */
        }
        .container {
            max-width: 700px;
            margin: 0 auto; /* Canh giữa */
            padding: 60px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0.2, 0.5);
        }
        .main-btn {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 22px; /* Tăng kích thước font */
        }
    </style>
</head>
<body>

<div class="order-confirm p-to-top">
    <div class="container">
        <div class="row-flex" style="display: flex; align-items: center; margin-bottom: 15px;">
            <p> <span style="font-weight:bold;text-align-last:center;font-size:22px;">You have registered your account successfully!</span></p>
        </div>
        <div class="row-flex" style="display: flex; align-items: center;font-size:22px; margin-bottom: 10px;">
            <p>This page will automatically redirect to the Login page in <span id="countdown" style="font-weight: bold">5</span> seconds or</p>
        </div>
        <br>
        <div onclick="window.location.href='/login';" class="main-btn" style="padding: 9px 20px; font-size:22px;font-weight:bold; background-color: #555; color: #fff; border: none; border-radius: 5px; cursor: pointer; transition: background-color 0.3s; width: 100%; text-align: center;">CLICK HERE TO GO TO THE LOGIN PAGE</div>
    </div>
</div>

<script>
    // Đếm ngược từ 10 giây
    var seconds = 5;

    // Lấy phần tử span hiển thị thời gian đếm ngược
    var countdownElement = document.getElementById('countdown');

    // Đếm ngược và cập nhật giá trị vào phần tử span
    var countdownInterval = setInterval(function() {
        seconds--;
        countdownElement.innerText = seconds;

        // Kiểm tra nếu đã đếm hết 10 giây
        if (seconds <= 0) {
            // Chuyển hướng đến trang đăng nhập
            window.location.href = '/login';
            // Dừng đếm ngược
            clearInterval(countdownInterval);
        }
    }, 500); // 1000 milliseconds = 1 giây
</script>

</body>
</html>
