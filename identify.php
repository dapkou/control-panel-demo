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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
            <h3>儀表即時顯示看板</h3>
            <div class="justify-content-end ml-auto">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">首頁</a></li>
                <li class="breadcrumb-item active">儀表即時顯示看板</li>
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
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab">
                  <!--id="pill-名稱"，aria-labelledby="上面nav-pills裡nav-link的id"-->
                  <div class="row">
                    <!-- 1 -->
                    <div class="col-md-3 col-sm-6">
                      <div class="card">
                        <div class="card-header bg-default">
                          <h3 class="card-title m-0">R1C - 01</h3>
                        </div>
                        <div class="card-body">
                          <div class="device-container text-center">
                            <!-- id="carousel_ + number " -->
                            <div id="carousel_01" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <!-- 輪播 ITEM:1. "active" -->
                                <div class="carousel-item active">
                                  <h6 class="deviceTitle_identify">溫度</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 ITEM 2. -->
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify">蒸氣泄露時間</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 ITEM 3. -->
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify">蒸氣泄露時間</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 END -->
                              </div>
                              <!-- /// 輪播BUTTON，不需要輪播時隱藏下方按鈕 /// -->
                              <!-- data-bs-target="carousel_ + number " -->
                              <button class="carousel-control-prev" type="button" data-bs-target="#carousel_01"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <!-- data-bs-target="carousel_ + number " -->
                              <button class="carousel-control-next" type="button" data-bs-target="#carousel_01"
                                data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                              <!-- /// 輪播BUTTON，不需要輪播時隱藏按鈕 /// END -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- 2 -->
                    <div class="col-md-3 col-sm-6">
                      <div class="card">
                        <div class="card-header bg-default">
                          <h3 class="card-title m-0">R1C - 02</h3>
                        </div>
                        <div class="card-body">
                          <div class="device-container text-center">
                            <!-- id="carousel_ + number " -->
                            <div id="carousel_02" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <!-- 輪播 ITEM:1. "active" -->
                                <div class="carousel-item active">
                                  <h6 class="deviceTitle_identify">溫度</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 ITEM 2. -->
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify">蒸氣泄露時間</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 ITEM 3. -->
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify">蒸氣泄露時間</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 END -->
                              </div>
                              <!-- /// 輪播BUTTON，不需要輪播時隱藏下方按鈕 /// -->
                              <!-- data-bs-target="carousel_ + number " -->
                              <button class="carousel-control-prev" type="button" data-bs-target="#carousel_02"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <!-- data-bs-target="carousel_ + number " -->
                              <button class="carousel-control-next" type="button" data-bs-target="#carousel_02"
                                data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                              <!-- /// 輪播BUTTON，不需要輪播時隱藏按鈕 /// END -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- 3 -->
                    <div class="col-md-3 col-sm-6">
                      <div class="card">
                        <div class="card-header bg-default">
                          <h3 class="card-title m-0">R1C - 03</h3>
                        </div>
                        <div class="card-body">
                          <div class="device-container text-center">
                            <!-- id="carousel_ + number " -->
                            <div id="carousel_03" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <!-- 輪播 ITEM:1. "active" -->
                                <div class="carousel-item active">
                                  <h6 class="deviceTitle_identify">溫度</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 ITEM 2. -->
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify">冷凝水導電率</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 ITEM 3. -->
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify">蒸氣泄露時間</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 END -->
                              </div>
                              <!-- /// 輪播BUTTON，不需要輪播時隱藏下方按鈕 /// -->
                              <!-- data-bs-target="carousel_ + number " -->
                              <button class="carousel-control-prev" type="button" data-bs-target="#carousel_03"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <!-- data-bs-target="carousel_ + number " -->
                              <button class="carousel-control-next" type="button" data-bs-target="#carousel_03"
                                data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                              <!-- /// 輪播BUTTON，不需要輪播時隱藏按鈕 /// END -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- 4 -->
                    <div class="col-md-3 col-sm-6">
                      <div class="card">
                        <div class="card-header bg-default">
                          <h3 class="card-title m-0">R1C - 04</h3>
                        </div>
                        <div class="card-body">
                          <div class="device-container text-center">
                            <!-- id="carousel_ + number " -->
                            <div id="carousel_04" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <!-- 輪播 ITEM:1. "active" -->
                                <div class="carousel-item active">
                                  <h6 class="deviceTitle_identify">溫度</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 ITEM 2. -->
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify">冷凝水導電率</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 ITEM 3. -->
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify">蒸氣泄露時間</h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <!-- 輪播 END -->
                              </div>
                              <!-- /// 輪播BUTTON，不需要輪播時隱藏下方按鈕 /// -->
                              <!-- data-bs-target="carousel_ + number " -->
                              <button class="carousel-control-prev" type="button" data-bs-target="#carousel_04"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <!-- data-bs-target="carousel_ + number " -->
                              <button class="carousel-control-next" type="button" data-bs-target="#carousel_04"
                                data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                              <!-- /// 輪播BUTTON，不需要輪播時隱藏按鈕 /// END -->
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- END -->

                    <!-- MORE: -->
                    <div class="col-md-3 col-sm-6">
                      <div class="card">
                        <div class="card-header bg-default">
                          <h3 class="card-title m-0">二號定型瓦斯用量</h3>
                        </div>
                        <div class="card-body">
                          <div class="device-container text-center">

                            <div id="carousel_05" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carousel_05"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carousel_05"
                                data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="card">
                        <div class="card-header bg-default">
                          <h3 class="card-title m-0">二號定型瓦斯用量</h3>
                        </div>
                        <div class="card-body">
                          <div class="device-container text-center">

                            <div id="carousel_06" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carousel_06"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carousel_06"
                                data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="card">
                        <div class="card-header bg-default">
                          <h3 class="card-title m-0">二號定型瓦斯用量</h3>
                        </div>
                        <div class="card-body">
                          <div class="device-container text-center">

                            <div id="carousel_07" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carousel_07"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carousel_07"
                                data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                      <div class="card">
                        <div class="card-header bg-default">
                          <h3 class="card-title m-0">二號定型瓦斯用量</h3>
                        </div>
                        <div class="card-body">
                          <div class="device-container text-center">

                            <div id="carousel_08" class="carousel slide" data-bs-ride="carousel">
                              <div class="carousel-inner">
                                <div class="carousel-item active">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                                <div class="carousel-item">
                                  <h6 class="deviceTitle_identify"></h6>
                                  <h2 class="deviceStatus_identify" id="kanban_2">0</h2>
                                </div>
                              </div>
                              <button class="carousel-control-prev" type="button" data-bs-target="#carousel_08"
                                data-bs-slide="prev">
                                <i class="fa-solid fa-chevron-left" aria-hidden="true"></i>
                                <span class="visually-hidden">Previous</span>
                              </button>
                              <button class="carousel-control-next" type="button" data-bs-target="#carousel_08"
                                data-bs-slide="next">
                                <i class="fa-solid fa-chevron-right" aria-hidden="true"></i>
                                <span class="visually-hidden">Next</span>
                              </button>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- MORE - end -->
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
    // dataTable script
    $(document).ready(function () {
      get_data();
    });
    function get_data() {
      $.ajax({
        type: "POST",
        url: "../data_show_identify.php",
        data: {

        },
        cache: false,
        async: true,
        ifModified: true,
        dataType: "json",
        success: function (data) {
          $('#kanban_1').html(data.kanban_1);
          $('#kanban_2').html(data.kanban_2);
          $('#kanban_3').html(data.kanban_3);
          $('#kanban_4').html(data.kanban_4);
          $('#kanban_5').html(data.kanban_5);
          $('#kanban_6').html(data.kanban_6);
          $('#kanban_7').html(data.kanban_7);
          $('#kanban_8').html(data.kanban_8);
          $('#kanban_9').html(data.kanban_9);
          $('#kanban_10').html(data.kanban_10);
          $('#kanban_11').html(data.kanban_11);
          $('#kanban_12').html(data.kanban_12);
          $('#kanban_13').html(data.kanban_13);
          $('#kanban_14').html(data.kanban_14);
          setTimeout(get_data, 10000);
        }
      });
    }
  </script>
</body>

</html>