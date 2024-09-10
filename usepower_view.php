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
						<h3>用電統計設定</h3>
						<div class="justify-content-end ml-auto">
							<ol class="breadcrumb float-sm-right">
								<li class="breadcrumb-item"><a href="#">首頁</a></li>
								<li class="breadcrumb-item"><a href="#">統計報表</a></li>
								<li class="breadcrumb-item active">用電統計設定</li>
							</ol>
						</div>
					</div>
				</div>
			</section>
			<!-- Main content -->
			<section class="content overview">
				<div class="container-fluid">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<div class="dataTable-wrapper">
										<div class="row">
											<div class="col-12 mb-2">
												<!-- button group -->
												<div class="row">
													<div class="col-12 mb-2">
														<div class="dt-buttons">
															<div class="dt-buttons btn-group flex-wrap">
																<button class="btn btn-secondary" tabindex="0"
																	aria-controls="dataTable" type="button"
																	title="Add a new page">
																	<a href="usepower_new.php">
																		<span>
																			<i class="fa fa-plus mx-1"></i>新增
																		</span>
																	</a>
																</button>
															</div>
														</div>
													</div>
												</div>
											</div>
											<div class="col-12">
												<table id="dataTable1" class="table table-bordered table-striped">
													<thead>
														<tr>
															<th>設備</th>
															<th>課別</th>
															<th>部門</th>
															<th>統計群組</th>
															<th>修改</th>
															<th>刪除</th>
														</tr>
													</thead>
													<tbody>

														<tr>
															<td>II11IIMSN-0138010701</td>
															<td>公用部</td>
															<td>廢水系統(II11IIMSN-0138010701)</td>
															<td>染整製造處電力統計</td>
															<td>
																<a href="usepower_edit.php">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</a>
															</td>
															<td>
																<a href="#!">
																	<i class="fa fa-times-circle"
																		aria-hidden="true"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>II11IIMSN-0138011001</td>
															<td>技術課電表度數(KWH)</td>
															<td></td>
															<td>染整製造處電力統計</td>
															<td>
																<a href="usepower_edit.php">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</a>
															</td>
															<td>
																<a href="#!">
																	<i class="fa fa-times-circle"
																		aria-hidden="true"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>II11IIMSN-0138011701</td>
															<td>製造課</td>
															<td>圓邊機*13/經邊機*10(II11IIMSN-0138011701)</td>
															<td>紗線製造處電力統計</td>
															<td>
																<a href="usepower_edit.php">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</a>
															</td>
															<td>
																<a href="#!">
																	<i class="fa fa-times-circle"
																		aria-hidden="true"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>II11IIMSN-0138011801</td>
															<td>製造處</td>
															<td>
																D棟4F<br />
																(II11IIMSN-0138011801)
															</td>
															<td>紗線製造處電力統計</td>
															<td>
																<a href="usepower_edit.php">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</a>
															</td>
															<td>
																<a href="#!">
																	<i class="fa fa-times-circle"
																		aria-hidden="true"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>II11IIMSN-0138011901</td>
															<td>製造處</td>
															<td>D棟5FII11IIMSN-0138011901)</td>
															<td>紗線製造處電力統計</td>
															<td>
																<a href="usepower_edit.php">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</a>
															</td>
															<td>
																<a href="#!">
																	<i class="fa fa-times-circle"
																		aria-hidden="true"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>II11IIMSN-0138012701</td>
															<td>整理課(定型機區)</td>
															<td>空汙機 (II11IIMSN-0138012701)</td>
															<td>染整製造處電力統計</td>
															<td>
																<a href="><i class=" fa fa-edit"
																	aria-hidden="true"></i></a>
															</td>
															<td>
																<a href="><i class=" fa fa-times-circle"
																	aria-hidden="true"></i></a>
															</td>
														</tr>
														<tr>
															<td>IN11-IMSN-0140000003</td>
															<td>製造處</td>
															<td>AIKI*1(IN11-IMSN-0140000003)</td>
															<td>紗線製造處電力統計</td>
															<td>
																<a href="usepower_edit.php">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</a>
															</td>
															<td>
																<a href="#!">
																	<i class="fa fa-times-circle"
																		aria-hidden="true"></i>
																</a>
															</td>
														</tr>
														<tr>
															<td>IN11-IMSN-0140000004</td>
															<td>製造處</td>
															<td>TG30*1(IN11-IMSN-0140000004)</td>
															<td>紗線製造處電力統計</td>
															<td>
																<a href="usepower_edit.php">
																	<i class="fa fa-edit" aria-hidden="true"></i>
																</a>
															</td>
															<td>
																<a href="#!">
																	<i class="fa fa-times-circle"
																		aria-hidden="true"></i>
																</a>
															</td>
														</tr>
													</tbody>

												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
	</div>
	<?php include('assets/layout/footer.php'); ?>
	<!-- ./wrapper -->



	<!-- ... scripts -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
		crossorigin="anonymous"></script>
	<!-- side bar -->
	<script src="assets/js/script.js"></script>
	<!-- chart.js -->
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
	<script src="assets/js/chart_data.js"></script>
	<!-- data tables -->
	<script type="text/javascript" src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.min.js"></script>
	<script type="text/javascript" src="https://cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>

	<script>
		$('#dataTable1').DataTable({
			"paging": true,
			"lengthChange": true,
			"searching": true,
			"ordering": false,
			"info": true,
			"autoWidth": false,
			scrollCollapse: true,
			scrollX: true,
			pagingType: 'full_numbers',
			responsive: true,
			dom: "<'row border-bottom '<'col-sm-12 col-md-auto mb-2'B>><'row my-2'<'col-sm-12 col-md-6 mb-3'l><'col-sm-12 col-md-6 mb-3 d-flex text-end justify-content-end'f>>" +
				"<'row '<'col-sm-12 d-flex justify-content-center'p>>" +
				"<'row mb-1'<'col-sm-12'tr>>" +
				"<'row'<'col-auto'i>>",
			buttons: [
				{ extend: 'excelHtml5', text: '<i class="fa-solid fa-file-excel me-1"></i>匯出 Excel', title: '資產座標' }
			],
			destroy: true,
			"language": {
				"aLengthMenu": [10, 25, 50, 100],
				"sLoadingRecords": "Loading...",
				"sLengthMenu": "每頁顯示 _MENU_ 項",
				"info": "顯示 _START_ 至 _END_ 項，全 _TOTAL_ 項。",
				"sSearch": "搜尋：",
				"zeroRecords": "查無資料", //查無資料時的顯示內容
				"infoEmpty": " 查無資料 ",
				"infoFiltered": "( 從 _MAX_ 項目中篩選出 _TOTAL_ 項 )",
				paginate: {
					first: "<i class='fa-solid fa-angles-left'></i>",
					previous: "<i class='fa-solid fa-angle-left'></i>",
					next: "<i class='fa-solid fa-angle-right'></i>",
					last: "<i class='fa-solid fa-angles-right'></i>"
				},
			},
		}).buttons().container().appendTo('.dt-buttons');
	</script>
</body>

</html>