<? session_start(); 
if(isset($_GET['userid'])) $user_id=$_GET['userid']; else{header("Location: home.php"); exit;}
 ?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>學生資料</title>
	<link rel="stylesheet" type="text/css" href="../css/main.css">
	<!-- 取得公司資訊 -->
	<script><? include_once("js_student_detail.php"); echo_student_detail_array($user_id); ?></script>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
	<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
	
</head>


<body>
<div id="view-header"></div>
<h1>學生資料</h1><hr>
<a href="../home.php">回首頁</a>
<div id="detail"></div>
<script>
//celect r.user_no userno,r.user_name username,r.dep_name depname,s.pic pic,s.birthday birthday,s.nickname nickname,s.sex sex,s.phone phone,s.address address,s.email email,s.doc doc
	$(function(){
		// call header
		$('#view-header').load('../public_view/header.php #header');

		var html_detail = "",idx = 0;
		var column_name = ["學號　　","姓名　　","系所　　","大頭貼照","生日　　","綽號　　","性別　　","連絡電話","詳細地址","Email　　","履歷檔案"];
		for(var key in user_detail_array){
			html_detail+=column_name[idx]+"&emsp;&emsp;&emsp;"+user_detail_array[key]+"<br>";
			idx++;
		}	
		$('#detail').html(html_detail);

		
		
	});
</script>

</body>
</html>
