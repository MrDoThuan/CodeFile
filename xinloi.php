<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mía ơi</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background: linear-gradient(90deg, rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.2)), url('https://scontent.fsgn8-4.fna.fbcdn.net/v/t39.30808-6/369266771_698657312278900_5683335733361997780_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=5f2048&_nc_ohc=NpSAU1_9AOoAX8Sg_tb&_nc_oc=AQlPjlhfOHvv8-MfqTO76yj7AgTcgauRLVoN8Z9T_oC8GYfY04pURVMh7gRonKttgO4&_nc_ht=scontent.fsgn8-4.fna&oh=00_AfDw8YO2r5qN_QryH1TbvADZKnHHdf7_1pqk2NVRNrjelQ&oe=65F8946F');
            background-size: cover;
            background-position: center;
            color: #fff;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .error-message {
            font-size: 4rem;
            font-weight: bold;
            text-align: center;
            animation: glow 1.5s ease-in-out infinite alternate;
        }
        @keyframes glow {
            from {
                text-shadow: 0 0 10px rgba(255, 255, 255, 0.8);
            }
            to {
                text-shadow: 0 0 20px rgba(247, 53, 23, 0.8), 0 0 30px rgba(255, 255, 255, 0.6);
            }
        }
        .item-actions button {
      padding: 10px 15px;
      margin-right: 5px;
      font-size: 16px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease-in-out;
    }
      .item-actions button.back{
        background-color:brown;
        color: #fff;

      }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p class="error-message">Xin lỗi, sản phẩm đã hết thời hạn bán :(</p>
                <div class="item-actions">
                    <a href="index.php">
                        <button type="back" class="back">Quay lại Trang Chủ</button>
                    </a>
                </div>
              </div>
        </div>
    </div>
</body>
</html>
