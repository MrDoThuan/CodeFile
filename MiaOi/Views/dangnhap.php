<style>
        .mid {
            max-width: 500px;
            margin: 50px auto;
            border: 1px solid #ced4da;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #D0E7D2;
        }
        .form-group {
            margin-bottom: 25px;
        }

        label {
            font-weight: bold;
            color: #495057;
        }

        .btn-primary {
            background-color: #007bff;
            border: 1px solid #007bff;
            transition: background-color 0.3s;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border: 1px solid #0056b3;
        }

        .eye-icon {
            cursor: pointer;
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            color: #6c757d;
            transition: color 0.3s;
        }

        .eye-icon:hover {
            color: #495057;
        }

        .eye-icon i {
            font-size: 18px;
        }

        .eye-icon.active i::before {
            content: "\f070";
        }

        .custom-control-input:checked ~ .custom-control-label::before {
            background-color: #007bff;
            border-color: #007bff;
        }

        .custom-control-input:checked ~ .custom-control-label::after {
            background-color: #007bff;
        }

        .custom-radio .custom-control-label::before {
            border-radius: 50%;
        }

        .form-control {
            border: 1px solid #ced4da;
            border-radius: 5px;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #007bff;
            box-shadow: 0 0 0 0.25rem rgba(0, 123, 255, 0.25);
        }

        #ChuyenButton {
            display: none;
            transition: background-color 0.3s, border-color 0.3s;
        }

        #ChuyenButton:hover {
            background-color: greenyellow;
            border: 1px solid greenyellow;
            color: black;
        }

        #ChuyenButton:active {
            background-color: green;
            border: 1px solid green;
        }
 input[type="checkbox"] {
  appearance: none;
  -webkit-appearance: none;
  -moz-appearance: none;
  width: 25px;
  height: 25px;
  border: 2px solid #555;
  border-radius: 4px;
  outline: none;
  cursor: pointer;
  position: relative;
}

input[type="checkbox"]:checked {
  background: linear-gradient(45deg, #e44d26, #f16529);
  border-color: #e44d26;
}

input[type="checkbox"]:checked::before {
  content: "\2713";
  display: block;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-size: 18px;
  color: #fff;
}
    </style>

<script>

        function User()
        {
            // Họ tên, Tên đăng nhập
            var name= document.getElementById("name");
          if(name.value.length == '')
          {
            document.getElementById('errorname').innerHTML="Vui lòng nhập họ và tên";
          }
          else if(!isNaN(name.value))
          {
            document.getElementById('errorname').innerHTML="Họ và tên phải là chữ";
          }
          else if((name.value.length)< 5 || (name.value.length)>50)
          {
            document.getElementById('errorname').innerHTML="Họ và tên phải từ 5 kí tự trở lên";
          }
          else
          {
            document.getElementById('errorname').innerHTML="";
          }
    
          //Ktra số điện thoại
        }
        function Phone()
        {
          var SDT= document.getElementById("SDT");
        if(SDT.value.length == 0)
        {
          document.getElementById('errorphone').innerHTML="Vui lòng nhập Số điện thoại";
        }
        else if(isNaN(SDT.value))
        {
          document.getElementById('errorphone').innerHTML="Số điện thoại phải là số";
        }
        else if(SDT.value.length < 10 || SDT.value.length > 11)
        {
          document.getElementById('errorphone').innerHTML="Số điện thoại phải từ 10 tới 11 số";
        }
        else
        {
          document.getElementById('errorphone').innerHTML="";
        }
        }
        function KTraAddress()
          {
          //Address and Address 2
          //Address
          var AD= document.getElementById("address").value;
          if(AD == '')
          {
            document.getElementById("erroraddress").innerHTML="Vui lòng điền Địa chỉ";
          }
          else if(AD.length < 6)
          {
            document.getElementById("erroraddress").innerHTML="Địa chỉ phải hơn 6 ký tự";
          }
          else if(!AD.match(/[a-z]/) || !AD.match(/[A-Z]/) || !AD.match(/[0-9]/))
          {
            document.getElementById("erroraddress").innerHTML="Địa chỉ phải bao gồm chữ HOA, số và chữ";
          }
          else
          {
            document.getElementById("erroraddress").innerHTML="";
          }
        }
        function KtraEmail()
        {
          //Email
          var EM= document.getElementById("email").value;
          var dau=EM.indexOf("@");
          var duoi=EM.lastIndexOf(".");
          var cach=EM.indexOf(" ");
          if(EM== '')
          {
            document.getElementById("memail").innerHTML="Vui lòng nhập Email";
            
          }
          else if((dau != -1) && (duoi != -1) //Phải có ký tự @ và .
              && (cach == -1) // Không có khoảng trắng
              && (dau != 0) // @ không đứng đầu
              && (duoi > dau + 4) //Có ký tự ở giữa @ và .
              && (duoi < EM.length - 3)) // có ký tự sau dấu .
              {
                document.getElementById("memail").innerHTML="";
              
              }
            else
            {
              document.getElementById("memail").innerHTML="Email không đúng định dạng (VD: abc@gmail.com)";
              
            }
          }
          function Signin()
        {
            // Họ tên, Tên đăng nhập
            var Sname= document.getElementById("Sname");
          if(Sname.value.length == '')
          {
            document.getElementById('errorSname').innerHTML="Vui lòng nhập Tên đăng nhập";
          }
          else if((Sname.value.length)< 4 || (Sname.value.length)>50)
          {
            document.getElementById('errorSname').innerHTML="Họ và tên phải từ 4 kí tự trở lên";
          }
          else
          {
            document.getElementById('errorSname').innerHTML="";
          }
        }
           //Ktra Mật khẩu
        function Password()
        {
            var pass= document.getElementById('password');
        if(pass.value.length=='')
        {
            document.getElementById('errorpass').innerHTML="Vui lòng nhập Mật khẩu";
        }
        else if(pass.value.length < 6)
          {
            document.getElementById("errorpass").innerHTML="Mật khẩu phải hơn 6 ký tự";
          }
          else
          {
            document.getElementById("errorpass").innerHTML="";
          }
        }
        //Ktra lại Mật khẩu
        function RePassword()
        {
            var Rpass= document.getElementById('Rpass');
        if(Rpass.value.length != password.value.length)
        {
            document.getElementById('errorRpass').innerHTML="Mật khẩu chưa khớp";
        }
          else
          {
            document.getElementById("errorRpass").innerHTML="";
          }
        }
        function Ktra()
        {
            //Ktra radio
            var radio= document.getElementsByName("radio");
        if(!radio[0].checked && !radio[1].checked)
      {
        alert("Bạn phải chọn giới tính");
        return false;
      }
      else
      {
        return true;
      }
        }
    </script>
</head>
<body>

<div class="container mid">
    <h2 class="title text-danger text-center">Đăng Nhập</h2>
    <form action="index.php?action=dangnhap&dp=dangnhap_action" onsubmit="return Ktra()" method="post">
        <div class="form-group position-relative">
            <label for="username" class="title">Tên đăng nhập:</label><span id="errorSname" class="text-danger"></span>
            <div class="input-group">
                <input type="text" class="form-control" oninput="Signin()" id="Sname" name="txtuser" placeholder="Nhập tên đăng nhập">
                <span class="input-group-text"><i class="fa fa-user"></i></span>
            </div>
        </div>
        <div class="form-group position-relative">
            <label for="password" class="title">Mật khẩu:</label><span id="errorpass" class="text-danger"></span>
            <div class="input-group">
                <input type="password" class="form-control" oninput="Password()" id="password" name="txtpass" aria-describedby="helpId" placeholder="Nhập mật khẩu">
                <span class="input-group-text eye-icon" onclick="ChuyenPassWord('password')"><i class="fa fa-eye"></i></span>
            </div>
            <a href="index.php?action=forget"><small id="helpId" class="text-muted title">Quên Mật Khẩu?</small></a>
        </div>
        <div class="form-group">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="terms" onchange="DangNhap()">
                <label class="form-check-label title" for="terms">
                    Tôi đồng ý với các chính sách và điều khoản
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-danger btn-block title" id="ChuyenButton">Đăng Nhập</button>
    </form>
</div>
<script>
    function ChuyenPassWord(inputId) {
        const passwordInput = document.getElementById(inputId);
        const eyeIcon = document.querySelector(`#${inputId} + .input-group .eye-icon`);

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
            eyeIcon.classList.add('active');
        } else {
            passwordInput.type = 'password';
            eyeIcon.classList.remove('active');
        }
    }

    function DangNhap() {
        const ChuyenButton = document.getElementById('ChuyenButton');
        const termsCheckbox = document.getElementById('terms');

        ChuyenButton.style.display = termsCheckbox.checked ? 'block' : 'none';
    }
</script>