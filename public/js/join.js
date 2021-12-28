// Hàm gửi dữ liệu
function Join() {
	// Khai báo các biến dữ liệu trong form
	$username = $('#username').val();
	$password = $('#password').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'join.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			username : $username,
			password : $password
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(result) {
			$('#formJoin .btn-submit').html('Đăng nhập');
			$('#formJoin .alert').html(result); // Thông báo
		}
	});
}


function Reges(){
	$firstName = $('#firstName').val();
	$lastName = $('#lastName').val();
	$username1 = $('#username1').val();
	$password1 = $('#password1').val();


	$.ajax({
		url : 'regester.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			firstName : $firstName,
			lastName : $lastName,
			username1 : $username1,
			password1 : $password1
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(result) {
			$('#formJoin1 .btn-regester').html('Đăng ký');
			$('#formJoin1 .alert').html(result); // Thông báo
		}
	});
}

function khuvuc() {
	// Khai báo các biến dữ liệu trong form
	$makv = $('#makv').val();
	$tenkv = $('#tenkv1').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/khuvuc/khuvuc.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			makv : $makv,
			tenkv : $tenkv
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formthemkv').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formthemkv .btnthemkv').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	khuvuc();

});


function udkhuvuc() {
	// Khai báo các biến dữ liệu trong form
	$makv = $('#makv2').val();
	$tenkv = $('#tenkv2').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/khuvuc/updatekv.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			makv : $makv,
			tenkv : $tenkv
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formsuakv').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formsuakv .btnsuakv').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	udkhuvuc();

});


function congty() {
	// Khai báo các biến dữ liệu trong form
	$tenct = $('#tenct1').val();
	$makv1 = $('#makv1').val();
	$tt = $('#tt1').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/congty/congty.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			tenct : $tenct,
			makv : $makv1,
			tt : $tt
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formthemct').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formthemct .btnthemct').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	congty();

});


function udcongty() {
	// Khai báo các biến dữ liệu trong form
	$mact = $('#mact3').val();
	$tenct = $('#tenct3').val();
	$makv = $('#makv3').val();
	$tt = $('#tt3').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/congty/updatect.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			mact : $mact,
			tenct : $tenct,
			makv : $makv,
			tt : $tt
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formsuact').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formsuact .btnsuact').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	udcongty();

});


function xoacongty() {
	// Khai báo các biến dữ liệu
	var mact = $('.xoact1').attr('id');
    alert (mact);
	// Gửi dữ liệu
	// $.ajax({
	// 	url : 'quanly/congty/xoacongty.php', // Đường dẫn file xử lýs
	// 	method:"POST",
	// 	// Các dữ liệu
	// 	data : {
	// 		mact : mact
	// 	// Thực thi khi gửi dữ liệu thành công
	// 	}, success : function(data) {
	// 		if(data==='loi'){
	// 			alert("Lỗi");
	// 		  }
	// 		  else{
	// 		  location.reload();
	// 		  }
	// 	}
	
	// });
}

$('.xoact1').click(function() {
	xoacongty(this);
});


function nganhnghe() {
	// Khai báo các biến dữ liệu trong form
	$mann = $('#mann').val();
	$tennn = $('#tennn').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/nganhnghe/nganhnghe.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			mann : $mann,
			tennn : $tennn
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formthemnn').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formthemnn .btnthemnn').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	nganhnghe();

});


function udnganhnghe() {
	// Khai báo các biến dữ liệu trong form
	$mann = $('#mann2').val();
	$tennn = $('#tennn2').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/nganhnghe/updatenn.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			mann : $mann,
			tennn : $tennn
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formsuann').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formsuann .btnsuann').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	udnganhnghe();

});


function users() {
	// Khai báo các biến dữ liệu trong form
	$ten = $('#ten').val();
	$ho = $('#ho').val();
	$tk = $('#tk').val();
	$mk = $('#mk').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/users/users.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			ten : $ten,
			ho : $ho,
			tk : $tk,
			mk : $mk
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formthemuser').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formthemuser .btnthemuser').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	users();

});


function udusers() {
	// Khai báo các biến dữ liệu trong form
	$id = $('#id1').val();
	$ten = $('#ten1').val();
	$ho = $('#ho1').val();
	$tk = $('#tk1').val();
	$mk = $('#mk1').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/users/updateu.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			id : $id,
			ten : $ten,
			ho : $ho,
			tk : $tk,
			mk : $mk
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formsuausers').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formsuau .btnsuau').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	udusers();

});


function vieclam() {
	// Khai báo các biến dữ liệu trong form
	$tenvl = $('#tenvl6').val();
	$mact = $('#mact6').val();
	$mann = $('#mann6').val();
	$tt = $('#tt6').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/vieclam/vieclam.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			tenvl : $tenvl,
			mact : $mact,
			mann : $mann,
			tt : $tt
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formthemvieclam').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formthemvieclam .btnthemvl').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	vieclam();

});


function udvieclam() {
	// Khai báo các biến dữ liệu trong form
	$mavl = $('#mavl5').val();
	$tenvl = $('#tenvl5').val();
	$mact = $('#mact5').val();
	$mann = $('#mann5').val();
	$tt = $('#tt5').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/vieclam/updatevl.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			mavl : $mavl,
			tenvl : $tenvl,
			mact : $mact,
			mann : $mann,
			tt : $tt
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formsuavl').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formsuavl .btnsuavl').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	udvieclam();

});



function thongtin() {
	// Khai báo các biến dữ liệu trong form
	$logo = $('#logo').val();
	$slt = $('#slt').val();
	$l = $('#l').val();
	$ngaydang = $('#ngaydang').val();
	$mavl = $('#mavl3').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/thongtin/thongtin.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			logo : $logo,
			slt : $slt,
			l : $l,
			ngaydang : $ngaydang,
		    mavl : $mavl
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formthemthongtin').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formthemthongtin .btnthemtt').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	thongtin();

});


function udthongtin() {
	// Khai báo các biến dữ liệu trong form
	$matt = $('#matt1').val();
	$logo = $('#logo1').val();
	$slt = $('#slt1').val();
	$l = $('#l1').val();
	$ngaydang = $('#ngaydang1').val();
	$mavl = $('#mavl1').val();

	// Gửi dữ liệu
	$.ajax({
		url : 'quanly/thongtin/updatett.php', // Đường dẫn file xử lý
		type : 'POST', // Phương thức
		// Các dữ liệu
		data : {
			matt : $matt,
			logo : $logo,
			slt : $slt,
			l : $l,
			ngaydang : $ngaydang,
			mavl : $mavl
		// Thực thi khi gửi dữ liệu thành công
		}, success : function(data) {
			if(data==='Loi'){
			alert("Lỗi");
			}  
			else{
			alert("thanh cong");
			$('#formsuatt').modal('hide'); 
			location.reload();
		}
	}
	});
}

$('#formsuatt .btnsuatt').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	udthongtin();

});

// Bắt sự kiện click vào nút bắt đầu của form
$('#formJoin .btn-submit').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	Join();
});

$('#formJoin1 .btn-regester').click(function() {
	$(this).html('Đang tải ...');
	// Thực thi gửi dữ liệu
	Reges();
});

// $(document).on('click', '#tk', function(){
	
// 	var nganh = $('#cateListMainSearch').val();
//      var diadiem = $('#locationMainSearch').val();
// 	$.ajax({
// 		url:'timkiemcongviec.php',
// 		method : 'POST',
// 		data:{
// 			nganh : nganh,
// 			diadiem:diadiem
// 		},
// 		success:function(data){
// 			$('#abc').html(data);
// 		},
// 		error : function(){
// 			alert('loi');
// 		}
// 	})

// });


$("#tk").click(function(){
	var nganh = $('#cateListMainSearch').val();
     var diadiem = $('#locationMainSearch').val();
	$.ajax({
		url:'timkiemcongviec.php',
		method : 'POST',
		data:{
			nganh : nganh,
			diadiem : diadiem
		},
		success:function(data){
			$('#conten').html(data);
		},
		error : function(){
			alert('Lỗi');
		}
	})
	
})
