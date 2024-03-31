    <style>
          .sidebar {
      background-color: #D0E7D2;
      color: #000;
      padding: 20px;
      height: 100vh;
    }
    .nav-link {
      color: #000 !important;
      position: relative;
      transition: border 0.3s;
    }

    .nav-link.active {
      font-weight: bold;
      color: #4C8577 !important;
      border-left: 5px solid #4C8577;
    }

    .nav-link:hover {
      cursor: pointer;
      border-left: 5px solid #5C946E;
    }

    </style>
    <div class="row">
       <!-- Sidebar -->
        <div class="col-md-2 sidebar">
          <img src="Content/Images/logo.png" width="150px" height="150px"><b class="text-danger">Admin</b>
          <!-- Navigation links -->
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=hanghoa">Danh sách Sản phẩm</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php?action=thongke">Thống Kê</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="index.php?action=hanghoa&act=insert_hanghoa">Thêm Sản Phẩm</a>
          </li>
            <li class="nav-item">
              <a class="nav-link" href="index.php?action=dangnhap&act=dangxuat">Đăng Xuất</a>
            </li>
          </ul>
        </div>
        <div class="col-md-6 mx-auto">
          <meta charset="UTF-8">
      <!--Load the AJAX API-->
      <script type="text/javascript" src="https://www.google.com/jsapi"></script>
      <script type="text/javascript">
       google.load('visualization', '1.0', {'packages':['corechart']});
       google.setOnLoadCallback(drawVisualization);
       function drawVisualization() {
               //thống kê số lượng bán hàng theo mặt hàng vẽ bieu do tron
              var rows=new Array();
              var tensp=new Array();
              var soluongmua=new Array();
              var dataten=0;
              var sl=0;
              // b1: tạo bảng
              var data=new google.visualization.DataTable();
              // +lấy dữ liệu từ database đưa vào dòng
              <?php
                $hh=new hanghoa();
                $result=$hh->getThongKe();
                while($set=$result->fetch())
                {
                  $tensp=$set['tensp'];
                  $soluong=$set['soluong'];
                  echo "tensp.push('".$tensp."');";
                  echo "soluongmua.push('".$soluong."');";
                }
              ?>
              // + tạo dòng
              for(var i=0;i<tensp.length;i++)
              {
                dataten=tensp[i];
                sl=parseInt(soluongmua[i]);
                rows.push([dataten,sl]);
              }
              // + tạo cột
              data.addColumn('string','Tên hàng hóa');
              data.addColumn('number','Số lượng bán');
              data.addRows(rows);
              // b2: tạo options
              var options={
                title:"Thống kê số lượng bán",
                'width':600,
                'height':500,
                'backgroundColor':'#ffffff',
                is3D:true,
              }
              // b3: tiến hành vẽ
              var chart=new google.visualization.PieChart(document.getElementById('chart_div'));
              chart.draw(data,options);
                
              
     }
                     
      </script>
          <div class="thongke">
          <div style=" width:100%;  float: left;"   id="chart_div">dfsf</div>
          <!-- <div style=" width:50%;  float: right"   id="chart_div1">dsfd</div>     -->
        </div>
        </div>
     </div>
 
 