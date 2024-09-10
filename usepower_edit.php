<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>能源管理系統</title>
	<link rel="shortcut icon" href="assets/img/favicon.png" sizes="32x32" type="image/x-icon" />
	<!-- font awesome -->
	<link rel="stylesheet" type="text/css"
		href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	<!-- bootstrap 5 -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
		type="text/css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
		crossorigin="anonymous">
	<!-- google font -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@100;300;400;500;700;900&display=swap"
		rel="stylesheet">
	<!-- DataTables -->
	<link href="https://cdn.datatables.net/2.1.6/css/dataTables.dataTables.min.css" rel="stylesheet" type="text/css">
	<!-- sidebar -->
	<link href="assets/css/sidebar-default.css" rel="stylesheet" type="text/css">
	<!-- main style -->
	<link href="assets/css/master.css" rel="stylesheet" type="text/css">
	<link href="assets/css/style.css" rel="stylesheet" type="text/css">
	<!-- jq -->
	<script src="https://code.jquery.com/jquery-3.7.1.min.js"
		integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
</head>

<body class="hold-transition side-hidden">
	<div class="wrapper">
		<div class="overlay"></div>
		<!-- * 資料載入時皆需要顯示loading畫面。-->
		<!-- loading -->
		<div class="loading" data-text="">
			<img src="assets/img/loading.gif" alt="loading">
		</div>
		<?php include('assets/layout/sidebar.php'); ?>

		<div id="body" class="active">
			<!-- navbar navigation component -->
			<?php include('assets/layout/header.php'); ?>
			<!-- end of navbar navigation -->

			<section class="container-fluid my-3">
				<div class="row">
					<div class="d-flex justify-content-between">
						<div class="float-start">
							<h3>用電統計修改設定</h3>
						</div>
						<div class="float-end">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">首頁</a></li>
								<li class="breadcrumb-item active">用電統計修改設定</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<!-- index -->
			<div class="container-fluid">
				<div class="card">
					<div class="card-body">
						<!-- 設備名稱 -->
						<h5 id="exampleModalToggleLabel2">設備 II11IIMSN-0138010101</h5>
						<div class="row my-2 fs-5">
							<div class="col-md-12 form-group">
								<label class="control-label">設備</label>
								<select name="dev_id" id="dev_id" class="form-control smallfont"
									onchange="javascript:select_device();">
									<option value="">請選擇</option>
								</select>
							</div>
						</div>
						<div class="row my-2 fs-5">
							<div class="col-md-12 form-group">
								<label class="control-label">課別</label>
								<input class="form-control smallfont" type="text" name="dev_name" placeholder="請輸入課別"
									value="">
							</div>
						</div>
						<div class="row my-2 fs-5">
							<div class="col-md-12 form-group">
								<label class="control-label">部門</label>
								<input class="form-control smallfont" type="text" name="c_depart" value="">
							</div>
						</div>
						<div class="row my-2 fs-5">
							<div class="col-md-12 form-group">
								<label class="control-label">統計群組</label>
								<input class="form-control smallfont" type="text" name="c_group" value="">
							</div>
						</div>
					</div>
					<div class="card-footer">
						<button class="btn btn-outline-primary">
							<a href="usepower_view.php">回上一頁</a>
						</button>
						<button class="btn btn-outline-primary" type="button"><i
								class="fa-solid fa-check mx-1"></i>儲存</button>
					</div>
				</div>
			</div>
		</div>

	</div>
	<!-- ./wrapper -->
	<?php include('assets/layout/footer.php'); ?>

	<!-- scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<!-- side bar -->
	<script type="text/javascript" src="assets/js/script.js"></script>
</body>

</html>