<style>
    /*Mía ơi tới chơi*/
@import url("https://fonts.googleapis.com/css?family=Sacramento");
h1{
  background-color: white;
  margin-bottom: 0px;
  color: #fff6a9;
  font-size: 5em;
  text-shadow: 
  0 0 5px #ffa500,
  0 0 15px #ffa500,
  0 0 20px #ffa500,
  0 0 40px #ffa500,
  0 0 60px #ff0000,
  0 0 10px #ff8d00,
  0 0 98px #ff0000;
  font-family: "Sacramento", cursive;
  text-align: center;
  animation: blink 3s infinite;
}
@keyframes blink {
  20%,
  24%,
  55% {
    color: while;
    text-shadow: none;
  }

  0%,
  19%,
  21%,
  23%,
  25%,
  54%,
  56%,
  100% {
    text-shadow: 
    0 0 5px #ffa500,
    0 0 15px #ffa500,
    0 0 20px #ffa500,
    0 0 40px #ffa500,
    0 0 60px #ff0000,
    0 0 10px #ff8d00,
    0 0 98px #ff0000;
    color: #fff6a9;
  }
}
</style>
<header>
        <nav class="navbar navbar-expand-sm navbar-dark fixed-top" style="background-color: #618264; width: 100%;">
            <img src="Content\Images/logo.png" height="50px" width="80px">
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                    <form class="form-inline" action="index.php?action=sanpham&MM=timkiem" method="post">
                        <li class="nav-item active">
                                <span class=" nav-link fa fa-search"></span><input type="text" name="txtsearch" style="height: 35px;" class="form-control" placeholder="Tìm Kiếm">
                            </li>
                    </form>
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php"><span class="fa fa-list"> Trang Chủ <span class="sr-only">(current)</span></a>
                    </li>
                    <?php
                    if(!isset($_SESSION['idkh']))
                    {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=dangki"><span class="fa fa-bell"> Đăng Kí</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=dangnhap"><span class="fa fa-user"> Đăng Nhập</span></a>
                    </li>
                    <?php
                    }
                    ?>
                    <?php
                    if(isset($_SESSION['idkh']))
                    {
                    ?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?action=dangnhap&dp=dangxuat"><span class="fa fa-bolt"> Đăng Xuất</span></a>
                    </li>
                    <?php
                    }
                    ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="fa fa-bars"> Menu nhỏ xinh</span></a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="index.php?action=sanpham">Mía Menu</a>
                        <a class="dropdown-item" href="index.php?action=sanpham&MM=miacoffe">Coffee Mía</a>
                        </div>
                    </li>
                    <?php
                    if(isset($_SESSION['idkh']))
                    {
                        echo '<li class="nav-item">
                        <i class="nav-link" > Xin Chào, '.$_SESSION['user'].'</i>
                        </li>';
                    }
                    else
                    {
                       echo '<li class="nav-item">
                        <i class="nav-link"><span class=""></span></i>
                        </li>';
                    }
                    ?>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                        <a href="index.php?action=giohang" class="btn btn-outline-light my-2 my-sm-0 nav-link" type="submit">
                        <span class="fa fa-shopping-cart"></span>
                    </a>
                    </form>
            </div>
        </nav>
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="Content\Images/header3.webp" width="1550px" height="616px">
                </div>
                <div class="carousel-item">
                    <img src="Content\Images/header2.jpeg"width="1550px" height="616px">
                </div>
                <div class="carousel-item">
                    <img src="Content\Images/header1.jpg" width="1550px" height="616px">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div class="row mt-0">
                <div class="col-md-6">
                    <div class="card" style="width: 724px; background-color: #EEE8AA;">
                        <div class="card-header" style=" width: 724px;height: 30px; padding:0;">
                            <h5 class="text-center text-success title" style="text-transform: capitalize;"><b><i>Bánh mới nhà Mía</i></b></h5>
                        </div>
                    </div>
                    <a href="xinloi.php"><img src="Content/Images/banh1.jpg" width="360px"></a>
                    <a href="xinloi.php""><img src="Content/Images/banh2.jpg" width="360px"></a>
                </div>
                <div class="col-md-6">
                    <div class="card" style="width: 724px;background-color: #EEE8AA;">
                        <div class="card-header" style=" width: 724px;height: 30px; padding:0;">
                            <h5 class="text-center text-success title" style="text-transform: capitalize;"><b><i>Thức uống Là Kị</i></b></h5>
                        </div>
                    </div>
                    <a href="xinloi.php"><img src="Content/Images/nc1.jpg" width="359px" height="358px"></a>
                    <a href="xinloi.php"><img src="Content/Images/nc2.jpg" width="359px" height="358px"></a>
                </div>
            </div>
            <br>
            <h1>From MiaOi With Love</h1>
      </header>