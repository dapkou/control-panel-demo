<!doctype html>
<html lang="zh-TW">

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

<body class="side-hidden">
    <div class="wrapper">
        <div class="overlay"></div>
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
                            <h3>設備資訊匯總</h3>
                        </div>
                        <div class="float-end">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                                <li class="breadcrumb-item active">設備資訊匯總</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </section>

            <!-- index -->
            <div class="container-fluid my-5">
                <div class="row">
                    <!-- 
                    * 一個裝置會出現的狀態有四種：
                    * 1. 工作正常 (CSS class主要以 "normal" 命名此狀態名稱)
                    * 2. 洩漏蒸氣 (CSS class主要以 "danger" 命名此狀態名稱)
                    * 3. 堵塞或積水 (CSS class主要以 "secondary" 命名此狀態名稱)
                    * 4. 冷態，無冷凝水 (CSS class主要以 "warning" 命名此狀態名稱)
                    -------------------------------------------------------
                    -->
                    <!-- 狀態 1 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center ">
                            <!-- ！！！狀態:正常 class="card-header card-header-normal"！！！ -->
                            <div class="card-header card-header-normal">
                                <!-- <span class="card-title text-white">2023-06-03 13:22:33</span> -->
                                <div class="d-flex align-items-center">
                                    <span class="card-title text-white me-auto w-100 mb-0">2023-06-03 13:22:33</span>
                                    <span class="ms-auto">
                                        <!-- id:opt_menu_+ number -->
                                        <button class="btn text-light" role="button" id="opt_menu_01"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fas fa-ellipsis-h"></i></button>
                                        <!-- aria-labelledby:opt_menu_+ number -->
                                        <ul class="dropdown-menu" aria-labelledby="opt_menu_01">
                                            <span class="p-2">其他功能</span>
                                            <li><a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#modalDetail_01"><i
                                                        class="fa fa-circle-info me-2"></i>裝置資訊</a></li>
                                            <!-- <div class="border-bottom"></div> -->
                                            <li><a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#modalDisconnect_01"><i
                                                        class="fa-solid fa-signal me-2"></i>斷線管理</a>
                                            </li>
                                            <!-- <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalSchedule_01"><i class="fa-solid fa-table-list me-2"></i>排程管理</a></li>
                                            <li><a class="dropdown-item" type="button" data-bs-toggle="modal" data-bs-target="#modalEvent_01"><i class="fa fa-cog me-2"></i>事件管理</a>
                                            </li> -->
                                        </ul>
                                    </span>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="device-container">
                                    <!-- id="carousel_ + number " -->
                                    <div id="carousel_01" class="carousel slide" data-bs-ride="carousel">
                                        <div class="carousel-inner">
                                            <div class="carousel-item active">
                                                <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                <!-- device Title，預設：裝置名稱_編號。 -->
                                                <div class="deviceTitle">R1C_01</div>
                                                <!-- ！！！狀態:正常 class="deviceStatus deviceStatus_normal"！！！ -->
                                                <p class="deviceStatus deviceStatus_normal">輸水閥<span
                                                        class="status_mark">工作正常</span></p>
                                            </div>
                                            <!-- <div class="carousel-item">
                                                <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                <div class="deviceTitle">R1C_01</div>
                                                <p class="deviceStatus deviceStatus_normal">輸水閥<span class="status_mark">工作正常</span></p>
                                            </div>
                                            <div class="carousel-item">
                                                <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                <div class="deviceTitle">R1C_01</div>
                                                <p class="deviceStatus deviceStatus_normal">輸水閥<span class="status_mark">工作正常</span></p> 
                                            </div> -->
                                        </div>
                                        <!-- data-bs-target="carousel_ + number " -->
                                        <button class="carousel-control-prev" type="button"
                                            data-bs-target="#carousel_01" data-bs-slide="prev">
                                            <!-- <span class="carousel-control-prev-icon" ></span> -->
                                            <!-- <i class="fa-solid fa-chevron-left" aria-hidden="true"></i> -->
                                            <span class="visually-hidden">Previous</span>
                                        </button>
                                        <!-- data-bs-target="carousel_ + number " -->
                                        <button class="carousel-control-next" type="button"
                                            data-bs-target="#carousel_01" data-bs-slide="next">
                                            <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                            <!-- <i class="fa-solid fa-chevron-right" aria-hidden="true"></i> -->
                                            <span class="visually-hidden">Next</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group dropdown" role="group" aria-label="Basic outlined dropdown">
                                    <!-- history -->
                                    <!-- * id: history_modal_ + number -->
                                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#history_modal_01">
                                        <i class="far fa-chart-bar"></i> </button>
                                    <!-- alert -->
                                    <!-- * id:alert_dropdown_ + number -->
                                    <button id="alert_dropdown_01" type="button" class="btn btn-outline-secondary"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="border-top-right-radius: 0.375rem;border-bottom-right-radius: 0.375rem;">
                                        <i class="far fa-bell"></i>
                                        <span class="badge rounded-pill bg-danger">99+<span
                                                class="visually-hidden">未讀取訊息</span>
                                        </span>
                                    </button>
                                    <!-- * aria-labelledby:alert_dropdown_ + number -->
                                    <ul aria-labelledby="alert_dropdown_01"
                                        class="dropdown-menu dropdown-menu-start p-0 shadow" style="width: 270px;">
                                        <div class="card m-0">
                                            <div class="card-header">
                                                <span class="card-title">通知訊息</span>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="card-ul alertList">
                                                    <!-- 告警 ex1. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                    <!-- 告警 ex2. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                    <!-- 告警 ex3. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 狀態 2 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <!-- ！！！狀態:洩漏蒸氣 class="card-header card-header-danger"！！！ -->
                            <div class="card-header card-header-danger">
                                <div class="d-flex align-items-center">
                                    <span class="card-title text-white me-auto w-100 mb-0">2023-06-03 13:22:33</span>
                                    <span class="ms-auto">
                                        <!-- id:opt_menu_+ number -->
                                        <button class="btn text-light" role="button" id="opt_menu_01"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fas fa-ellipsis-h"></i></button>
                                        <!-- aria-labelledby:opt_menu_+ number -->
                                        <ul class="dropdown-menu" aria-labelledby="opt_menu_01">
                                            <span class="p-2">其他功能</span>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa fa-circle-info me-2"></i>裝置資訊</a></li>
                                            <!-- <div class="border-bottom"></div> -->
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-signal me-2"></i>斷線管理</a>
                                            </li>
                                            <!-- <li><a class="dropdown-item" href="#"><i class="fa-solid fa-table-list me-2"></i>排程管理</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cog me-2"></i>事件管理</a>
                                            </li> -->
                                        </ul>
                                    </span>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="">
                                    <div class="device-container">
                                        <!-- id="carousel_ + number " -->
                                        <div id="carousel_02" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                    <div class="deviceTitle">R1C_02</div>
                                                    <!-- ！！！狀態:洩漏蒸氣 class="deviceStatus deviceStatus_danger"！！！ -->
                                                    <p class="deviceStatus deviceStatus_danger">&thinsp;輸水閥<span
                                                            class="status_mark">洩漏蒸氣</span></p>
                                                </div>
                                                <!-- <div class="carousel-item">
                                                    <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                    <div class="deviceTitle">R1C_02</div>
                                                    <p class="deviceStatus deviceStatus_danger">&thinsp;輸水閥<span class="status_mark">洩漏蒸氣</span></p>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                    <div class="deviceTitle">R1C_02</div>
                                                    <p class="deviceStatus deviceStatus_danger">&thinsp;輸水閥<span class="status_mark">洩漏蒸氣</span></p> 
                                                </div> -->
                                            </div>
                                            <!-- data-bs-target="carousel_ + number " -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel_02" data-bs-slide="prev">
                                                <!-- <span class="carousel-control-prev-icon" ></span> -->
                                                <!-- <i class="fa-solid fa-chevron-left" aria-hidden="true"></i> -->
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <!-- data-bs-target="carousel_ + number " -->
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel_02" data-bs-slide="next">
                                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                                <!-- <i class="fa-solid fa-chevron-right" aria-hidden="true"></i> -->
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group dropdown" role="group" aria-label="Basic outlined dropdown">
                                    <!-- history -->
                                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#history_modal_01">
                                        <i class="far fa-chart-bar"></i> </button>
                                    <!-- alert -->
                                    <!-- * id:alert_dropdown_ + number -->
                                    <button id="alert_dropdown_01" type="button" class="btn btn-outline-secondary"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="border-top-right-radius: 0.375rem;border-bottom-right-radius: 0.375rem;">
                                        <i class="far fa-bell"></i>
                                        <span class="badge rounded-pill bg-danger">99+<span
                                                class="visually-hidden">未讀取訊息</span>
                                        </span>
                                    </button>
                                    <!-- * aria-labelledby:alert_dropdown_ + number -->
                                    <ul aria-labelledby="alert_dropdown_01"
                                        class="dropdown-menu dropdown-menu-start p-0 shadow" style="width: 270px;">
                                        <div class="card m-0">
                                            <div class="card-header">
                                                <span class="card-title">通知訊息</span>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="card-ul alertList">
                                                    <!-- 告警 ex1. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                    <!-- 告警 ex2. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                    <!-- 告警 ex3. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 狀態 3 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <!-- ！！！狀態:堵塞或積水 class="card-header card-header-secondary"！！！ -->
                            <div class="card-header card-header-secondary">
                                <div class="d-flex align-items-center">
                                    <span class="card-title text-white me-auto w-100 mb-0">2023-06-03 13:22:33</span>
                                    <span class="ms-auto">
                                        <!-- id:opt_menu_+ number -->
                                        <button class="btn text-light" role="button" id="opt_menu_01"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fas fa-ellipsis-h"></i></button>
                                        <!-- aria-labelledby:opt_menu_+ number -->
                                        <ul class="dropdown-menu" aria-labelledby="opt_menu_01">
                                            <span class="p-2">其他功能</span>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa fa-circle-info me-2"></i>裝置資訊</a></li>
                                            <!-- <div class="border-bottom"></div> -->
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa-solid fa-signal me-2"></i>斷線管理</a>
                                            </li>
                                            <!-- <li><a class="dropdown-item" href="#"><i class="fa-solid fa-table-list me-2"></i>排程管理</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cog me-2"></i>事件管理</a>
                                            </li> -->
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <div class="device-container">
                                        <!-- id="carousel_ + number " -->
                                        <div id="carousel_03" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                    <div class="deviceTitle">R1C_03</div>
                                                    <!-- ！！！狀態:堵塞或積水 class="deviceStatus deviceStatus_secondary"！！！ -->
                                                    <p class="deviceStatus deviceStatus_secondary">輸水閥<span
                                                            class="status_mark">堵塞或積水</span></p>
                                                </div>
                                                <!-- <div class="carousel-item">
                                                    <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                    <div class="deviceTitle">R1C_03</div>
                                                    <p class="deviceStatus deviceStatus_secondary">輸水閥<span class="status_mark">堵塞或積水</span></p>
                                                </div>
                                                <div class="carousel-item">
                                                    <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                    <div class="deviceTitle">R1C_03</div>
                                                    <p class="deviceStatus deviceStatus_secondary">輸水閥<span class="status_mark">堵塞或積水</span></p> 
                                                </div> -->
                                            </div>
                                            <!-- data-bs-target="carousel_ + number " -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel_03" data-bs-slide="prev">
                                                <!-- <span class="carousel-control-prev-icon" ></span> -->
                                                <!-- <i class="fa-solid fa-chevron-left" aria-hidden="true"></i> -->
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <!-- data-bs-target="carousel_ + number " -->
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel_03" data-bs-slide="next">
                                                <!-- <span class="carousel-control-next-icon" aria-hidden="true"></span> -->
                                                <!-- <i class="fa-solid fa-chevron-right" aria-hidden="true"></i> -->
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group dropdown" role="group" aria-label="Basic outlined dropdown">
                                    <!-- history -->
                                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#history_modal_01">
                                        <i class="far fa-chart-bar"></i> </button>
                                    <!-- alert -->
                                    <!-- * id:alert_dropdown_ + number -->
                                    <button id="alert_dropdown_01" type="button" class="btn btn-outline-secondary"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="border-top-right-radius: 0.375rem;border-bottom-right-radius: 0.375rem;">
                                        <i class="far fa-bell"></i>
                                        <span class="badge rounded-pill bg-danger">99+<span
                                                class="visually-hidden">未讀取訊息</span>
                                        </span>
                                    </button>
                                    <!-- * aria-labelledby:alert_dropdown_ + number -->
                                    <ul aria-labelledby="alert_dropdown_01"
                                        class="dropdown-menu dropdown-menu-start p-0 shadow" style="width: 270px;">
                                        <div class="card m-0">
                                            <div class="card-header">
                                                <span class="card-title">通知訊息</span>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="card-ul alertList">
                                                    <!-- 告警 ex1. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                    <!-- 告警 ex2. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                    <!-- 告警 ex3. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- 狀態 4 -->
                    <div class="col-sm-6 col-lg-3">
                        <div class="card text-center">
                            <!-- ！！！狀態:冷態，無冷凝水 class="card-header card-header-warning"！！！ -->
                            <div class="card-header card-header-warning">
                                <div class="d-flex align-items-center">
                                    <span class="card-title text-white me-auto w-100 mb-0">2023-06-03 13:22:33</span>
                                    <span class="ms-auto">
                                        <!-- id:opt_menu_+ number -->
                                        <button class="btn text-light" role="button" id="opt_menu_01"
                                            data-bs-toggle="dropdown" aria-expanded="false"><i
                                                class="fas fa-ellipsis-h"></i></button>
                                        <!-- aria-labelledby:opt_menu_+ number -->
                                        <ul class="dropdown-menu" aria-labelledby="opt_menu_01">
                                            <span class="p-2">其他功能</span>
                                            <li><a class="dropdown-item" href="#"><i
                                                        class="fa fa-circle-info me-2"></i>裝置資訊</a></li>
                                            <!-- <div class="border-bottom"></div> -->
                                            <li><a class="dropdown-item" type="button" data-bs-toggle="modal"
                                                    data-bs-target="#history_modal_01"><i
                                                        class="fa-solid fa-signal me-2"></i>斷線管理</a>
                                            </li>
                                            <!-- <li><a class="dropdown-item" href="#"><i class="fa-solid fa-table-list me-2"></i>排程管理</a>
                                            </li>
                                            <li><a class="dropdown-item" href="#"><i class="fa fa-cog me-2"></i>事件管理</a>
                                            </li> -->
                                        </ul>
                                    </span>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="">
                                    <div class="device-container">
                                        <!-- id="carousel_ + number " -->
                                        <div id="carousel_04" class="carousel slide" data-bs-ride="carousel">
                                            <div class="carousel-inner">
                                                <div class="carousel-item active">
                                                    <img src="assets/img/R1C.png" class="card-img deviceImg" alt="...">
                                                    <div class="deviceTitle">R1C_04</div>
                                                    <!-- ！！！狀態:冷態，無冷凝水 class="deviceStatus deviceStatus_warning"！！！ -->
                                                    <!-- * 相比其他狀態，此狀態的 >> class="status_mark" << 涵蓋整段文字。 -->
                                                    <p class="deviceStatus deviceStatus_warning"><span
                                                            class="status_mark">輸水閥冷態，無冷凝水</span></p>
                                                </div>
                                                <!-- <div class="carousel-item"></div> -->
                                            </div>
                                            <!-- data-bs-target="carousel_ + number " -->
                                            <button class="carousel-control-prev" type="button"
                                                data-bs-target="#carousel_04" data-bs-slide="prev">
                                                <!-- <i class="fa-solid fa-chevron-left" aria-hidden="true"></i> -->
                                                <span class="visually-hidden">Previous</span>
                                            </button>
                                            <!-- data-bs-target="carousel_ + number " -->
                                            <button class="carousel-control-next" type="button"
                                                data-bs-target="#carousel_04" data-bs-slide="next">
                                                <!-- <i class="fa-solid fa-chevron-right" aria-hidden="true"></i> -->
                                                <span class="visually-hidden">Next</span>
                                            </button>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="btn-group dropdown" role="group" aria-label="Basic outlined dropdown">
                                    <!-- history -->
                                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#history_modal_01">
                                        <i class="far fa-chart-bar"></i> </button>
                                    <!-- alert -->
                                    <!-- * id:alert_dropdown_ + number -->
                                    <button id="alert_dropdown_01" type="button" class="btn btn-outline-secondary"
                                        data-bs-toggle="dropdown" aria-expanded="false"
                                        style="border-top-right-radius: 0.375rem;border-bottom-right-radius: 0.375rem;">
                                        <i class="far fa-bell"></i>
                                        <span class="badge rounded-pill bg-danger">99+<span
                                                class="visually-hidden">未讀取訊息</span>
                                        </span>
                                    </button>
                                    <!-- * aria-labelledby:alert_dropdown_ + number -->
                                    <ul aria-labelledby="alert_dropdown_01"
                                        class="dropdown-menu dropdown-menu-start p-0 shadow" style="width: 270px;">
                                        <div class="card m-0">
                                            <div class="card-header">
                                                <span class="card-title">通知訊息</span>
                                            </div>
                                            <div class="card-body p-0">
                                                <ul class="card-ul alertList">
                                                    <!-- 告警 ex1. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                    <!-- 告警 ex2. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                    <!-- 告警 ex3. -->
                                                    <span class="alert-item" id="<?= $data_name; ?>_event">
                                                        <!-- 標題： -->
                                                        <span class="text-muted text-sm d-flex justify-content-between">
                                                            <span>告警事件：</span>
                                                            <!-- time -->
                                                            <span><span>5</span>分鐘前</span>
                                                        </span>
                                                        <!-- 狀態： -->
                                                        <span class="text-lg-start">輸水閥泄漏蒸氣</span>
                                                    </span>
                                                    <div class="border-bottom my-1"></div>
                                                    <!-- 告警 END -->

                                                </ul>
                                            </div>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('assets/layout/footer.php'); ?>
    <!-- modals： -->
    <!-- 歷史資料 History Modal，ID：history_modal_ + 數字 -->
    <div class="modal fade" id="history_modal_01" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <h5 class="modal-title" id="exampleModalToggleLabel">歷史資料查詢</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row m-3">
                        <div class="col-sm-12 col-lg-6 pt-3">
                            <div class="form-group">
                                <label for="deviceType" class="form-label">間隔時間</label>
                                <div class="input-group">
                                    <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <!-- __seven_days -->
                                        <input type="radio" class="btn-check" name="btnradio" id="__seven_days"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="__seven_days">七天</label>
                                        <!-- __three_days -->
                                        <input type="radio" class="btn-check" name="btnradio" id="__three_days"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="__three_days">三天</label>
                                        <!-- __one_day -->
                                        <input type="radio" class="btn-check" name="btnradio" id="__one_day"
                                            autocomplete="off">
                                        <label class="btn btn-outline-secondary" for="__one_day">一天</label>
                                        <!-- __hour -->
                                        <input type="radio" class="btn-check" name="btnradio" id="__hour"
                                            autocomplete="off" checked>
                                        <label class="btn btn-outline-secondary" for="__hour">小時</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 pt-3">
                            <div class="form-group">
                                <label for="device" class="form-label float-start">數值</label>
                                <!-- (新增數值類別) -->
                                <!-- <span class="text-primary float-end" type="button"><i class="fa-solid fa-plus"></i>數值類別</span> -->

                                <!-- 
                                    * 1. 檢測疏水閥是否泄漏蒸汽
                                    *     R1C的內部開關可設定時間為2,22,44和88分鐘，當疏水閥
                                    *     泄漏蒸汽時間超過以上值時，R1C給出故障信號。
                                    * 2. 檢測冷凝水導電率
                                    *     R1C的內部開關可根據實際情況設定冷凝水導電率檢測值
                                    *     17,4.8或1.2μS。另外如必要，可不用之。
                                    * 3. 檢測積水溫度
                                    *     R1C 的內部開關可設定積水溫度檢測值
                                    *     48,63,85,111,140,169或191℃。另外如必要，也可不用之。 

                                    * ※ 詳細資料：assets/resources/Spiratec-TI-P087-32-ZH.pdf
                                -->
                                <select class="form-control" aria-label="device" id="device_01">
                                    <!-- CHART的Y軸 -->
                                    <option selected>選擇</option>
                                    <option value="1">溫度(°C)</option>
                                    <option value="2">冷凝水導電率(17,4.8或1.2μS)</option>
                                    <option value="3">泄漏蒸汽時間(2,22,44和88分鐘)</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 pt-3">
                            <div class="form-group">
                                <label for="startTime" class="form-label">開始時間</label>
                                <input type="text" class="form-control" id="startTime_<?= $data_name; ?>"
                                    value="<?= date('Y-m-d H:i' . ":00", strtotime('-1 hour')); ?>">
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-6 pt-3">
                            <div class="form-group">
                                <label for="endTime" class="form-label">結束時間</label>
                                <input type="text" class="form-control" id="endTime_<?= $data_name; ?>"
                                    value="<?= date('Y-m-d H:i' . ":00"); ?>">
                            </div>
                        </div>
                    </div>
                    <!-- buttons -->
                    <div class="row m-3">
                        <div class="col-12 d-flex justify-content-end">
                            <div class="d-grid gap-2 d-md-block">
                                <button class="btn btn-outline-primary" type="button"><i
                                        class="fa-regular fa-file-excel mx-1"></i>匯出Excel</button>
                                <button class="btn btn-outline-primary" type="button"><i
                                        class="fa-solid fa-magnifying-glass mx-1"></i>查詢</button>
                            </div>
                        </div>
                    </div>
                    <!-- buttons end -->
                    <div class="row my-2">
                        <div class="col-12">
                            <!-- tab-list -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="chart_01-tab" data-bs-toggle="tab"
                                        data-bs-target="#chart_01" type="button" role="tab" aria-controls="chart_01"
                                        aria-selected="true"><i class="fa-solid fa-chart-bar mx-1"></i>圖表</button>
                                </li>
                                <!-- og:
                                    <li class="nav-item">
                                        <a class="nav-link active" id="chart-line-tab" data-toggle="tab" href="#chart-line_<?= $data_name; ?>" role="tab" aria-controls="chart-line" aria-selected="true">圖表</a>
                                    </li> 
                                -->
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="table_01-tab" data-bs-toggle="tab"
                                        data-bs-target="#table_01" type="button" role="tab" aria-controls="table_01"
                                        aria-selected="false"><i class="fa-solid fa-table mx-1"></i>列表</button>
                                </li>
                            </ul>
                            <div class="tab-content" id="tabContent">
                                <!-- tab:圖表 id="chart_ + number " -->
                                <div class="tab-pane fade show active" id="chart_01" role="tabpanel"
                                    aria-labelledby="chart_01-tab">
                                    <!-- 設備名稱 -->
                                    <h5 class="text-center" id="device_content_<?= $data_name; ?>">1廠機房機櫃內溫濕計</h5>
                                    <!-- //chart// -->
                                    <div class="historyChart text-center w-100" id="history_Chart_6ton">
                                        <div class="chartjs-size-monitor">
                                            <div class="chartjs-size-monitor-expand">
                                                <div class=""></div>
                                            </div>
                                            <div class="chartjs-size-monitor-shrink">
                                                <div class=""></div>
                                            </div>
                                        </div>
                                        <!-- ID: "chart_steamTrap_ + number " -->
                                        <!-- <canvas id="chart_steamTrap_1"></canvas> -->
                                        <canvas id="chart_steamTrap_2"></canvas>
                                    </div>
                                    <!-- //chart// -->
                                </div>
                                <!-- tab:列表 id="table_ + number " -->
                                <div class="tab-pane fade" id="table_01" role="tabpanel" aria-labelledby="table_01-tab">
                                    <!-- 設備名稱 -->
                                    <h5 class="text-center" id="device_content_<?= $data_name; ?>">1廠機房機櫃內溫濕計</h5>
                                    <!-- 表格:id="dataTable_history_ + number " -->
                                    <table id="dataTable_history_01"
                                        class="table table-bordered table-striped table-hover w-100">
                                        <thead>
                                            <tr>
                                                <th>數值</th>
                                                <th>回報時間</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>28.40</td>
                                                <td>2023-06-03 16:00:00</td>
                                            </tr>
                                            <tr>
                                                <td>28.30</td>
                                                <td>2023-06-03 16:01:00</td>
                                            </tr>
                                            <tr>
                                                <td>28.30</td>
                                                <td>2023-06-03 16:02:00</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- #tabContent end  -->
                        </div>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Open second modal</button>
                </div> -->
            </div>
        </div>
    </div>
    <!-- 裝置資訊 detail Modal，ID：modalDetail_ + 數字 -->
    <div class="modal fade" id="modalDetail_01" aria-hidden="true" aria-labelledby="modalDetail_01_Label" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <!-- ID modalDetail_數字_Label -->
                    <h5 class="modal-title" id="modalDetail_01_Label">裝置資訊</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- <div class="row">
                        <div class="col-12">
                            <div class="form-group mb-0">
                                <label for="device" class="form-label">裝置名稱：</label>
                                    <span>1廠機房機櫃內溫濕計_R1C_01</span>
                                <select class="form-select" aria-label="device" id="select_device_<?= $data_name; ?>" onchange="javascript:select_device_<?= $data_name; ?>();">
                                    <option value="">請選擇</option>
                                    <option value="1">工作正常</option>
                                    <option value="2">洩漏蒸氣</option>
                                    <option value="3">堵塞或積水</option>
                                    <option value="4">輸水閥冷態，無冷凝水</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <hr>
                    <table id="dataTable_detail" class="table table-bordered table-striped">
                        <tr>
                            <th>設備ID</th>
                            <td id="dev_id_<?= $data_name; ?>">IN21IIMSN-0138014501_400100</td>
                        </tr>
                        <tr>
                            <th>設備名稱</th>
                            <td id="dev_name_<?= $data_name; ?>">1廠機房機櫃內溫濕計_R1C_01</td>
                        </tr>
                        <tr>
                            <th>設備類型</th>
                            <td id="dev_type_<?= $data_name; ?>">DNVXFM</td>
                        </tr>
                        <tr>
                            <th>隸屬場域</th>
                            <td id="factory_<?= $data_name; ?>">台大動物研究中心_動物實驗所</td>
                        </tr>
                        <tr>
                            <th>閘道器ID</th>
                            <td id="gw_id_<?= $data_name; ?>">IIC3IIMSN-0138------</td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-target="#modalDetail_01" data-bs-toggle="modal"
                        data-bs-dismiss="modal">關閉</button>
                </div>
            </div>
        </div>
    </div>
    <!-- 斷線管理 Disconnect Modal，ID：modalDisconnect_ + 數字 -->
    <div class="modal fade" id="modalDisconnect_01">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <h4 class="modal-title">斷線管理</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4>R1C_01</h4>
                    <div class="row">
                        <div class="col-6">

                            <div class="form-group my-3">
                                <label for="device" class="form-label">設備：</label>
                                <select class="form-select" aria-label="device"
                                    id="select_alert_device_<?= $data_name; ?>"
                                    onchange="javascript:select_alert_device_<?= $data_name; ?>();">
                                    <option value="">請選擇</option>
                                    <option value="">R1C_01</option>
                                    <!-- <option value="<?= $row_select_device['id']; ?>"><?= $row_dev_name['content']; ?></option> -->
                                </select>
                            </div>
                        </div>
                    </div>
                    <table id="dataTable_alert_<?= $data_name; ?>"
                        class="table table-bordered table-striped text-center">
                        <thead>
                            <th>通知開關</th>
                            <th>設備類型</th>
                            <th>設備名稱</th>
                            <th>通知方式</th>
                            <th>通知管理</th>
                        </thead>
                        <tbody>
                            <td>關閉</td>
                            <td>GENPLC</td>
                            <td>超高水位</td>
                            <td>
                                <!-- line / mail -->
                                <!-- line-icon + "&ensp;" + mail-icon -->
                                <i class="fab fa-line"></i>&ensp;<i class="fas fa-envelope"></i>
                            </td>
                            <td>
                                <a href="#!" type="button"><i class="fa fa-edit" aria-hidden="true"></i></a>
                            </td>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- 排程管理 schedule Modal，ID：modalSchedule_ + 數字 -->
    <div class="modal fade" id="modalSchedule_01">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <h4 class="modal-title">排程管理</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                </div>
            </div>
        </div>
    </div>
    <!-- 事件管理 event Modal，ID：modalEvent_ + 數字 -->
    <div class="modal fade" id="modalEvent_01">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-default">
                    <h4 class="modal-title">事件管理</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h4><?= $row['tw_name']; ?>R1C_01</h4>

                    <!-- <div class="row">
                        <div class="col-6">
                            <div class="form-group my-3">
                                <label for="device" class="form-label">設備：</label>
                                <select class="form-select" aria-label="device" id="select_alert_device_<?= $data_name; ?>" onchange="javascript:select_alert_device_<?= $data_name; ?>();">
                                    <option value="">請選擇</option>
                                    <option value="">R1C_01</option>
                                </select>
                            </div>
                        </div>
                    </div> -->
                    <table id="dataTable_alert_<?= $data_name; ?>"
                        class="table table-bordered table-striped text-center">
                        <thead>
                            <th>時間</th>
                            <th>事件類型</th>
                            <th>事件名稱</th>
                            <th>狀態</th>
                            <th>管理</th>
                            <th>刪除</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-06-19 11:23:23</td>
                                <td>告警事件</td>
                                <td>輸水閥泄漏蒸氣</td>
                                <td>
                                    <span class="badge bg-danger">未處理</span>
                                </td>
                                <td>
                                    <a href="event_management_edit.php" type="button"><i class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                </td>
                                <td>
                                    <a href="#!"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                            <!-- 2 -->
                            <tr>
                                <td>2023-06-19 11:23:23</td>
                                <td>告警事件</td>
                                <td>輸水閥泄漏蒸氣</td>
                                <td>
                                    <span class="badge bg-primary">已處理</span>
                                </td>
                                <td>
                                    <a href="event_management_edit.php" type="button"><i class="fa fa-edit"
                                            aria-hidden="true"></i></a>
                                    <a href=""></a>
                                </td>
                                <td>
                                    <a href="#!"><i class="fa fa-times-circle" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <!-- side bar -->
    <script type="text/javascript" src="assets/js/script.js"></script>
    <!-- chart.js -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script type="text/javascript" src="assets/js/chart_data.js"></script>
    <!-- data tables -->
    <script type="text/javascript" src="https://cdn.datatables.net/2.1.6/js/dataTables.bootstrap5.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/2.1.6/js/dataTables.min.js"></script>
    <script type="text/javascript">
        // Initiate datatables in roles, tables, users page
        (function () {
            'use strict';

            $('#dataTable_history_01').DataTable({
                responsive: true,
                pageLength: 10,
                lengthChange: false,
                searching: true,
                ordering: true,
                "info": true,
                "lengthChange": true,
                "language": {
                    "aLengthMenu": [10, 25, 50, 100],
                    "sLoadingRecords": "Loading...",
                    "info": "顯示 _START_ 至 _END_ 項，全 _TOTAL_ 項。",
                    "sLengthMenu": "每頁顯示 _MENU_ 項",
                    "sSearch": "搜尋：",
                    "paginate": {
                        "previous": "上一頁",
                        "next": "下一頁"
                    },
                }
            });
        })();
    </script>
</body>

</html>