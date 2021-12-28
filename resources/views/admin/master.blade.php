<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin - Dashboard</title>
	<link href="/assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="/assets/css/font-awesome.min.css" rel="stylesheet">
	<link href="/assets/css/datepicker3.css" rel="stylesheet">
	<link href="/assets/css/styles.css" rel="stylesheet">
	
	<!--Custom Font-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  	<link rel="stylesheet" href="/resources/demos/style.css">
  	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
 	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
 	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" type="text/css" href="https://code.highcharts.com/css/highcharts.css">    
    @if(Session::has('success'))
        <script type="text/javascript">
            alert('{{ Session::get('success')}}');
        </script>
    @endif
    <script>
        $("document").ready(function(){
        $(".xoa").click(function(){
            return confirm("Bạn có thực sự muốn xóa?");
        });});
    </script>
    <script>
        $("document").ready(function(){
        $(".dangxuat").click(function(){
            return confirm("Bạn có thực sự muốn đăng xuất?");
        });});
    </script>
    <style>
          /* Phương thức (nền) */
          .modall {
          display: none; /* Ẩn theo mặc định */
          position: fixed; /* Ở lại trang */
          z-index: 1; /* Ở trên top */
          left: 0;
          top: 0;
          width: 100%;
          height: 100%;
          overflow: auto; /* Kích hoạt cuộn nếu cần */
          background-color: rgb(0,0,0);
          background-color: rgba(0,0,0,0.4);
          padding-top: 60px;
          }

          /* Phương thức Content/Box */
          .modall-contentt {
          background-color: #fefefe;
          margin: 5% auto 15% auto; /* 5% từ trên xuống, 15% từ dưới lên và ở giữa */
          border: 1px solid #888;
          width: 50%; /* Có thể nhiều hơn hoặc ít hơn, tùy thuộc vào kích thước màn hình */
          }

          /* Nút Đóng (x) */
          .close {
          position: absolute;
          right: 25px;
          top: 0;
          color: #000;
          font-size: 35px;
          font-weight: bold;
          }

          .close:hover,
          .close:focus {
          color: red;
          cursor: pointer;
          }

          /* Thêm hoạt hình thu phóng */
          .animatee {
          -webkit-animation: animatezoom 0.6s;
          animation: animatezoom 0.6s
          }

          @-webkit-keyframes animatezoom {
          from {-webkit-transform: scale(0)} 
          to {-webkit-transform: scale(1)}
          }

          @keyframes animatezoom {
          from {transform: scale(0)} 
          to {transform: scale(1)}
          }

          /* Thay đổi kiểu cho nhịp và nút hủy trên màn hình nhỏ thêm */
          @media screen and (max-width: 300px) {
          
        </style>
</head>
<body>
@include('admin.header')
@yield('content')
@include('admin.footer')
<script src="/assets/js/jquery-1.11.1.min.js"></script>
	<script src="/assets/js/bootstrap.min.js"></script>
	<script src="/assets/js/chart.min.js"></script>
	<script src="/assets/js/chart-data.js"></script>
	<script src="/assets/js/easypiechart.js"></script>
	<script src="/assets/js/easypiechart-data.js"></script>
	<script src="/assets/js/bootstrap-datepicker.js"></script>
	<script src="/assets/js/custom.js"></script>

	<script src="https://code.highcharts.com/highcharts.js"></script>
	<script src="https://code.highcharts.com/modules/series-label.js"></script>
	<script src="https://code.highcharts.com/modules/exporting.js"></script>
	<script src="https://code.highcharts.com/modules/export-data.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){
			
			let listday = $("#container").attr("data-listday");
			listday =JSON.parse(listday);

			Highcharts.chart('bieudo', {
		    chart: {
		        type: 'spline'
		    },
		    title: {
		        text: 'Monthly Average Temperature'
		    },
		    subtitle: {
		        text: 'Source: WorldClimate.com'
		    },
		    xAxis: {
		        categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
		            'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
		    },
		    yAxis: {
		        title: {
		            text: 'Temperature'
		        },
		        labels: {
		            formatter: function () {
		                return this.value + '°';
		            }
		        }
		    },
		    tooltip: {
		        crosshairs: true,
		        shared: true
		    },
		    plotOptions: {
		        spline: {
		            marker: {
		                radius: 4,
		                lineColor: '#666666',
		                lineWidth: 1
		            }
		        }
		    },
		    series: [{
		        name: 'Tokyo',
		        marker: {
		            symbol: 'square'
		        },
		        data: [7.0, 6.9, 9.5, 14.5, 18.2, 21.5, 25.2, {
		            y: 26.5,
		            marker: {
		                symbol: 'url(https://www.highcharts.com/samples/graphics/sun.png)'
		            }
		        }, 23.3, 18.3, 13.9, 9.6]

		    }, {
		        name: 'London',
		        marker: {
		            symbol: 'diamond'
		        },
		        data: [{
		            y: 3.9,
		            marker: {
		                symbol: 'url(https://www.highcharts.com/samples/graphics/snow.png)'
		            }
		        }, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
		    }]
		});
			
			
		});

	</script>

	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/join.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script>
          $("document").ready(function(){
            $(".xoa").click(function(){
              return confirm("Bạn có thực sự muốn xóa?");
            });});
          </script>
          <script>
            $("document").ready(function(){
              $(".dangxuat").click(function(){
                return confirm("Bạn có thực sự muốn đăng xuất?");
              });});
    </script>
</body>
</html>