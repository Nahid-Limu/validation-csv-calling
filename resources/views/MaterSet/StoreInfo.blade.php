<!DOCTYPE html>
<html>

<head>
    <title>ストアー情報登録</title>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="26x19" href="{{asset('images/favicon/favicon.png')}}">
    <!-- bootstrap-css -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- select box -->
    <link rel="stylesheet" href="{{asset('css/select2.min.css')}}" />
    <!-- font CSS -->

    <!-- font-awesome icons -->
    <link rel="stylesheet" href="{{asset('css/font.css')}}" type="text/css" />
    <!-- font-awesome icons -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="{{asset('css/style.css')}}" rel='stylesheet' type='text/css' />
    <!-- Responsive Custom CSS -->
    <link href="{{asset('css/style-responsive.css')}}" rel="stylesheet" />
    <!-- //font-awesome icons -->
    <style>
        /* Edge */
        @supports (-ms-ime-align:auto) {
            .col_22 {

                -webkit-box-flex: none !important;
                -webkit-flex: none !important;
                -ms-flex: none !important;
                flex: none !important;
                max-width: none !important;

            }


            .col_88 {

                -webkit-box-flex: 0 !important;
                -webkit-flex: 0 !important;
                -ms-flex: 0 !important;
                flex: 0 !important;
                max-width: 0 !important;

            }
        }

        .margin_right_b {
            margin-right: 14px;
        }

        /* Chrome 29+ */
        @media screen and (-webkit-min-device-pixel-ratio:0) and (min-resolution:.001dpcm) {
            .col_22 {

                -webkit-box-flex: 0 !important;
                -webkit-flex: 0 0 16.66667% !important;
                -ms-flex: 0 0 16.66667% !important;
                flex: 0 0 16.66667% !important;
                max-width: 16.66667% !important;

            }


            .col_88 {

                -webkit-box-flex: 0 !important;
                -webkit-flex: 0 0 66.66667% !important;
                -ms-flex: 0 0 66.66667% !important;
                flex: 0 0 66.66667% !important;
                max-width: 66.66667% !important;

            }


        }

        .margin_30 {
            margin-top: 30px;
        }

        table td.bg_grey {
            background-color: #c2d6d6 !important;

        }
    </style>




    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--  <script>
        $(function () {
            $("#navbar").load("../navbar.html");
            // $("#footerPage").load("footer.html");
        });
    </script> -->
</head>

<body>
    <section class="margin_b">
        <!--header start-->
        <div class="margin_b header_area22">
            <div class="row " style="width: 100% ;font-size:16px;">



                <section class="ml-3" style="margin: 0 auto; ">
                    <div id='cssmenu' class="">
                        <div class="row header_area22 ">
                            <div class="col_22 pl-4">
                                <span href="#" class="  ">
                                    <img class="mt-2" src="{{asset('images/logo.PNG')}}">
                                </span>
                            </div>
                            <div class="col_88 p-0">
                                <ul class="backgroundul_menu" style="width: 1051px; margin: 0 auto;">
                                    <li class="first_li cool-link  ">

                                        <a type="button" href="../index.html" class="font_color m_0 ">
                                            <div class="">

                                                <i class="fa fa-align-justify fontawesome_size mt-2  "></i>&nbsp;
                                                <span class=" ">ダッシュボード</span>
                                            </div>
                                        </a>
                                    </li>
                                    <!--===================== first li end =====================-->
                                    <li class=' secound_li cool-link '><a href="#menu2" class="font_color m_0 ">
                                            <i class="fa fa-truck fontawesome_size mt-2"></i>&nbsp;
                                            <span>受注管理</span>
                                        </a>
                                        <ul class="ul_left">
                                            <div class="widthli">
                                                <div class="row menu_hover_pad" style="background-color:#3AAFA9;">
                                                    <div class="col-md-4" style="background-color: #3AAFA9">
                                                        <a href="../sales_order_management/sales_order_file_upload.html"
                                                            title=""><span> 受注オーダー作成</span></a>
                                                        <!--  <a href="../sales_order_management/sales_order_file_upload.html" title=""><span> 受注UPLOAD</span></a>
                                                        <a href="../sales_order_management/sales_order_input.html" title=""><span> 受注ｵｰﾀﾞｰ入力</span></a> -->
                                                        <a href="../sales_order_management/sales_order_search.html"
                                                            title=""><span> 受注ｵｰﾀﾞｰ確認 </span></a>
                                                        <a href="../sales_order_management/inquiry_mail_search.html"
                                                            title=""><span> お問合せﾒｰﾙ確認</span></a>
                                                        <a href="../sales_order_management/api_automatic_processing_status.html"
                                                            title=""><span> API自動通信処理</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <!--================================== 2nd li end ==================================-->
                                    <li class="thired_li cool-link"><a href="#menu3" class="font_color m_0">
                                            <i class="fa fa-cube fontawesome_size mt-2"></i>&nbsp;
                                            <span>在庫管理</span>
                                        </a>
                                        <ul class="ul_left">
                                            <div class="widthli">
                                                <div class="row menu_hover_pad" style="background-color: #3AAFA9">
                                                    <div class="col-md-4" style="background-color: #3AAFA9">
                                                        <a href="../stock_management/upcoming_delivery_upload.html"
                                                            title=""><span> 入荷オーダー作成 </span></a>
                                                        <!-- <a href="../stock_management/upcoming_delivery_upload.html" title=""><span> 入荷予定UPLOAD </span></a>
                                                        <a href="../stock_management/inbound_order_entry.html" title=""><span> 入荷予定ｵｰﾀﾞｰ入力 </span></a> -->
                                                        <a href="../stock_management/arrival_order_confirmation.html"
                                                            title=""><span> 入荷ｵｰﾀﾞｰ確認 </span></a>
                                                        <a href="../stock_management/stock_inquiry.html" title=""><span>
                                                                在庫確認 </span></a>
                                                        <a href="../stock_management/warehouse_movement_upload.html"
                                                            title=""><span> 倉庫移動オーダー作成 </span></a>
                                                        <!--  <a href="../stock_management/warehouse_movement_upload.html" title=""><span> 倉庫移動UPLOAD </span></a>
                                                        <a href="../stock_management/warehouse_transfer_order_entry.html" title=""><span> 倉庫移動ｵｰﾀﾞｰ入力 </span></a> -->
                                                        <a href="../stock_management/warehouse_transfer_order_confirmation.html"
                                                            title=""><span> 倉庫移動ｵｰﾀﾞｰ確認 </span></a>
                                                        <a href="../stock_management/warehouse_to_store_automatic_replenishment_processing.html"
                                                            title=""><span>倉庫間自動補充処理 </span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <!--================================== 3rd li end ==================================-->
                                    <li class='last fourth_li cool-link'><a href="#menu4" class="font_color m_0">
                                            <i class="fa fa-th fontawesome_size mt-2"></i>&nbsp;
                                            <span>在庫連動管理 </span>
                                        </a>
                                        <ul class="ul_left22">
                                            <div class="widthli">
                                                <div class="row menu_hover_pad" style="background-color: #3AAFA9">
                                                    <div class="col-md-4" style="background-color: #3AAFA9">
                                                        <a href="../stockmanagement/inventory_distribution_check.html"
                                                            title=""><span>在庫分配確認 </span></a>

                                                        <a href="../stockmanagement/api_automatic_communication_processing.html"
                                                            title=""><span>API自動通信処理</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <!--================================== forth li end ==================================-->
                                    <li class='last fifth_li cool-link'><a href="#menu5" class="font_color m_0 ">
                                            <i class="fa fa-file-text mt-2 fontawesome_size"
                                                aria-hidden="true"></i>&nbsp;
                                            <span>マスター管理 </span>
                                        </a>
                                        <ul class="ul_left22">
                                            <div class="widthli">
                                                <div class="row menu_hover_pad" style="background-color: #3AAFA9">
                                                    <div class="col-md-4" style="background-color: #3AAFA9">
                                                        <a href="../master_management/person_in_charge_information_registration.html"
                                                            title=""><span>担当者情報登録 </span></a>
                                                        <a href="{{route('showStoreInformation')}}"
                                                            title=""><span>ストアー情報登録</span></a>
                                                        <a href="../master_management/business_partner.html"
                                                            title=""><span>取引先情報登録</span></a>
                                                        <a href="../master_management/account_information_registration.html"
                                                            title=""><span>送り主情報登録 </span></a>
                                                        <a href="../master_management/product_information_registration.html"
                                                            title=""><span>商品マスター作成</span></a>
                                                        <!-- a href="../master_management/product_information_registration.html" title=""><span>商品情報登録 </span></a>
                                                        <a href="../master_management/product_information_upload.html" title=""><span>商品情報UPLOAD</span></a> -->
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <!--================================== fifth li end ==================================-->
                                    <li class='last sixth_li cool-link'><a href="#menu6" class="font_color m_0">
                                            <i class="fa fa-clipboard mt-2 fontawesome_size"></i>&nbsp;
                                            <span>設定管理 </span>
                                        </a>
                                        <ul class="ul_left22">
                                            <div class="widthli">
                                                <div class="row menu_hover_pad" style="background-color: #3AAFA9">
                                                    <div class="col-md-4" style="background-color: #3AAFA9">
                                                        <a href="../setting_management/order_hold_conditions.html"
                                                            title=""><span>ｵｰﾀﾞｰ確認待ち条件設定 </span></a>
                                                        <a href="../setting_management/template_information_registration.html"
                                                            title=""><span>ﾃﾝﾌﾟﾚｰﾄ情報登録 </span></a>
                                                        <a href="../setting_management/autometic_mail_template_registration.html"
                                                            title=""><span>自動メールテンプレート登録 </span></a>
                                                        <a href="../setting_management/basic_setting.html"
                                                            title=""><span>基本設定</span></a>
                                                        <a href="../setting_management/screen_color_settingcopy2.html"
                                                            title=""><span>画面カラー設定 </span></a>
                                                        <a href="../setting_management/authority_setting.html"
                                                            title=""><span>権限設定</span></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </ul>
                                    </li>
                                    <!--================================== sixth li end================================== -->
                                    <li class='last seventh_li cool-link'>
                                        <a href="#menu7" class="font_color m_0">
                                            <i class="fa fa-calendar-check-o mt-2 fontawesome_size"
                                                aria-hidden="true"></i>&nbsp;
                                            <span class="text-center">取扱説明書 </span>
                                        </a>
                                    </li>
                                    <li class='last eigth_li '>
                                        <a href="#menu8" class="font_color m_0">
                                            <i class="fa fa-sign-out mt-2 fontawesome_size"
                                                aria-hidden="true"></i>&nbsp;
                                            <span class="">ログアウト</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                        <!--==================================col end==================================-->
                    </div>
                </section>
            </div>
        </div>
        <!--header start-->
        <!--   <script>
                    $(function () {
                        $("#navbar").load("navbar.html");
                        // $("#footerPage").load("footer.html");
                    });
                </script> -->
        <!--============================= start top navbar ================================-->
        <!-- div id="navbar"></div> -->
        <!--========================================-header end============================================-->

        <!--========================================-header end============================================-->
        <!--sidebar start-->


        <!--sidebar end-->
        <!--============================================main content start============================================-->
        <section class="main-content2 fullpage_width left_right_margin">
            <section class="">
                <div class="">
                    <div class="panel panel-default bg-white" style="background: #DEF2F1">
                        <form action="" method="">
                            <section class="hshow2 ">
                                <div class="">
                                </div>
                                <!--========== main_con header start ==========-->


                                <div class=" heading_mt  margin_t mt-3">
                                    <div class="row table_page_header_hide">

                                    </div>

                                    <div class="row">
                                        <div class="col-4 ">
                                            <h5 href="#" class=" textfnt "> ストアー情報登録</h5>
                                        </div>
                                        <div class="col-1">
                                        </div>
                                        <div class="col-3">
                                        </div>

                                        <div class="col-3">
                                        </div>
                                        <div class="col-1">
                                        </div>
                                    </div>
                                    @if ($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endif
                                </div>

                                <!-- modal1 show div -->

                                <div id="searchModal1" style="display: none;">
                                    <div class=" borderround pb-2">



                                        <!---warehouse table block 1--->
                                        <div class=" row  " style="">
                                            <div class="col-4 margin_t">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="wareshouse_table">
                                                            <table class="table table-bordered">

                                                                <tbody>
                                                                    <tr>
                                                                        <td class="bg_grey">取引先番号</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="bg_grey">取引先指定番号</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="bg_grey">ストアー名</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="bg_grey">ふりがな</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="bg_grey">郵便番号</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>



                                                </div>


                                            </div>

                                            <!---warehouse table block 2--->

                                            <div class="col-4 margin_t">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="wareshouse_table">
                                                            <table class="table table-bordered">

                                                                <tbody>
                                                                    <tr>
                                                                        <td class="bg_grey">住所</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="bg_grey">電話番号</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="bg_grey">FAX番号</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="bg_grey">掛率</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="bg_grey">ヤマト顧客コード</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!---warehouse table block 3--->

                                            <div class="col-4 margin_t">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="wareshouse_table">
                                                            <table class="table table-bordered">

                                                                <tbody>
                                                                    <tr>
                                                                        <td class="bg_grey">佐川顧客コード</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="bg_grey">送信元メールアドレス</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="bg_grey">納品書価格表示</td>
                                                                        <td>
                                                                            <select class="form-control country">
                                                                                <option>選択</option>
                                                                                <option> 表示あり</option>
                                                                                <option> 表示なし</option>

                                                                            </select>
                                                                        </td>
                                                                    </tr>

                                                                    <tr>
                                                                        <td class="bg_grey">納品書メールアドレス</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="bg_grey">ヤマト送り状品名</td>
                                                                        <td><input type="text" class="form-control">
                                                                        </td>
                                                                    </tr>


                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-12 text-right">
                                                <a class="btn btn-info" id="offButtonModal1">閉じる</a>
                                            </div>
                                        </div>


                                    </div>


                                </div>
                                <!-- modal1 end div -->


                                <!--========== main_con header end ==========-->
                                <!---------------------table area start-------------------------------->
                                <!---------------------table area start-------------------------------->

                                <div class=" borderround pb-2 margin_30">
                                    <div class="text-center margin_t paddingin table_rl_padding">


                                        <div class="margin_b ">
                                            <table class="fullpage_width_table table_td_width"
                                                style="width: 154px!important;">
                                                <tbody>
                                                    <tr>
                                                        <td style="width: 150px!important;">
                                                            <a class="btn btn-info" id="searchButton1"
                                                                style="width: 150px!important;">検索項目一覧</a>
                                                        </td>





                                                    </tr>
                                                </tbody>
                                            </table>


                                        </div>

                                        <div class="margin_b ">
                                            <table class="fullpage_width_table table_td_width" style="width: 100%">
                                                <tr>
                                                    <td>
                                                        <a class="btn btn-info ">検索</a>
                                                    <td>
                                                    </td>
                                                    <td><a class="btn btn-info"
                                                            href="{{route('exportCsvExcel', ['type'=>'csv'])}}">CSV作成</a> </td>
                                                    <td>
                                                    </td>
                                                    <td><a class="btn btn-info"
                                                            href="{{route('exportCsvExcel', ['type'=>'xlsx'])}}">EXCEL作成</a> </td>
                                                    <td>
                                                    </td>
                                                    <td class="">
                                                        <div class="pagi mr-0">
                                                            <nav aria-label="...">
                                                                {{-- <ul class="pagination">
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#"
                                                                            aria-label="Previous">
                                                                            <span aria-hidden="true">&laquo;</span>
                                                                            <span class="sr-only">Previous</span>
                                                                        </a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">1</a></li>
                                                                    <li class="page-item active">
                                                                        <a class="page-link" href="#">2 <span
                                                                                class="sr-only">(current)</span></a>
                                                                    </li>
                                                                    <li class="page-item"><a class="page-link"
                                                                            href="#">3</a></li>
                                                                    <li class="page-item">
                                                                        <a class="page-link" href="#" aria-label="Next">
                                                                            <span aria-hidden="true">&raquo;</span>
                                                                            <span class="sr-only">Next</span>
                                                                        </a>
                                                                    </li>
                                                                </ul> --}}
                                                                {{ $StoreInfos->links() }}
                                                            </nav>

                                                        </div>
                                                    </td>

                                                    <td class="" style="margin-left : 0px">
                                                        <a class="b1">行指定 </a>
                                                    </td>
                                                    <td>
                                                        <select class="form-control left_select "
                                                            style="width: auto!important;">
                                                            <option value="1">1</option>
                                                            <option value="1">1</option>
                                                            <option value="1">1</option>
                                                        </select>
                                                    </td>
                                                    <td></td>
                                                    <td class="">
                                                        <a class="b2">行</a>
                                                    </td>

                                                    <td>
                                                        <a class="b3">情報総数 9 表示範囲 1～9</a>
                                                    </td>


                                                    <td>
                                                        <p class=""></p>
                                                    </td>


                                                    <td>
                                                        <p class="">
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                        </p>
                                                    </td>

                                                </tr>
                                            </table>

                                            <div class="row text-right" style="float: right; margin-bottom: 5px;">
                                                <div class=" text-right  margin_right_b">
                                                    <table>
                                                        <tr>
                                                            <td class="">
                                                                <a class="btn btn-info" data-toggle="modal"
                                                                    data-target="#table_header">設定ｶﾗﾑ表示</a>
                                                            </td>
                                                            <td>
                                                                <p class=""></p>
                                                            </td>
                                                            <td class="">
                                                                <a class="btn btn-info">全ｶﾗﾑ表示</a>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>


                                        <!---------------------botton table area end-------------------------------->
                                        <div class="margin_t">
                                            <!---=======================2nd row====================-->
                                            <div class="page4_table_design mt-2 table_hover  table-head-only">
                                                <table class="table table-striped  table-bordered" id="table-basic">
                                                    <thead class="thead-dark header text-center" id="myHeader">
                                                        <tr>
                                                            <th class="table-th" width="100px"></th>
                                                            <th scope="col">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                        color: #fff;">取引先番号</span><i
                                                                    class="fa fa-arrows-v table-th"></i></th>
                                                            <th scope="col">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                        color: #fff;">取引先指定番号</span><i class="fa fa-arrows-v"></i></th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                        color: #fff;">ストアー名</span><i class="fa fa-arrows-v"></i></th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                        color: #fff;">ふりがな</span><i class="fa fa-arrows-v"></i></th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                        color: #fff;">郵便番号</span><i class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                        color: #fff;">住所</span><i class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                    color: #fff;">電話番号</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                    color: #fff;">FAX番号</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                    color: #fff;">掛率</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                    color: #fff;">ヤマト顧客コード</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                    color: #fff;">佐川顧客コード</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                color: #fff;">送信元メールアドレス</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                color: #fff;">納品書価格表示</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                color: #fff;">納品書メールアドレス</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                color: #fff;">ヤマト送り状品名</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            <th scope="col" width="100px">
                                                                <span style="cursor:pointer;border:2px solid #2B7A78;padding: 3px;text-align: center;border-radius: 5px;display: block;min-width: 80px;margin: auto;  background-color: #2B7A78;
                                                                color: #fff;">操作ボタン</span><i
                                                                    class="fa fa-arrows-v"></i></th>
                                                            </th>
                                                            {{-- <th scope="col"><span>操作ボタン</span><i
                                                                    class="fa fa-arrows-v"></i></th> --}}
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr class="thzero table_hover2 grid">
                                                            <td></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><input type="text" class="form-control"></td>
                                                            <td><a href="" class="btn btn-info" data-toggle="modal"
                                                                    data-target="#delivery_method4">登録</a></td>
                                                        </tr>

                                                        @foreach ($StoreInfos as $StoreInfo)
                                                        <tr class="table_hover2 grid">
                                                            <td scope="row">
                                                            </td>
                                                            <td>{{$StoreInfo->bango}}</td>
                                                            <td>{{$StoreInfo->torihikisakibango}}</td>
                                                            <td>{{$StoreInfo->name}}</td>
                                                            <td>{{$StoreInfo->furigana}}</td>
                                                            <td>{{$StoreInfo->yubinbango}}</td>
                                                            <td>{{$StoreInfo->address}}</td>
                                                            <td>{{$StoreInfo->tel}}</td>
                                                            <td>{{$StoreInfo->fax}}</td>
                                                            <td>{{$StoreInfo->kakeritu}}</td>
                                                            <td>{{$StoreInfo->yobi12}}</td>
                                                            <td>{{$StoreInfo->kcode3}}</td>
                                                            <td>{{$StoreInfo->mail_soushin}}</td>
                                                            <td>{{$StoreInfo->review_flag}}</td>
                                                            <td>{{$StoreInfo->mail_nouhin}}</td>
                                                            <td>{{$StoreInfo->yokurijyouhinmei}}</td>
                                                            <td><a href="" class="btn btn-info" data-toggle="modal"
                                                                    data-target="#delivery_method">変更</a></td>
                                                        </tr>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                        </form>
                    </div>
                </div>
            </section>

            <!-- footer -->

            <!-- / footer -->
            <!--=================================== Modal================================== -->
            <div class="modal fade" data-backdrop="static" id="delivery_method4" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <form action="{{ route('postStoreInformation') }}" method="" id="newRegForm">
                            @csrf
                            <input type="hidden" name="type" value="create">
                            <h5 class="modal-title ml-4 mt-4">ストアー情報登録</h5>
                            <div class="modal-body">
                                <span id="form_result">oka</span>
                                <div class="borderorder mt-1 pl-1 pr-1">

                                    <div class="font_size_payment_view ml-2">
                                        <div class="row ">
                                            <div class="col-12 margin_t ">
                                                <div class="row ">
                                                    <div class="col-12 margin_t ">
                                                        <!--  <div class="row margin_b">
                                                        <div class="col-2 margin_t">
                                                            <span> 取引先番号 </span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div> -->
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>取引先指定番号</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="torihikisakibango"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>ストアー名 </span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="name" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span> ふりがな</span>
                                                            </div>
                                                            <div class="col-1 margin_t">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4">
                                                                <input type="text" name="furigana" class="form-control">
                                                            </div>
                                                        </div>

                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span> 郵便番号</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" id="postal_code" name="yubinbango"
                                                                    class="form-control">
                                                            </div>
                                                            <div class="col-3 p-0">
                                                                <button type="button" id="postal_code_search"
                                                                    class="btn btn-info"><i
                                                                        class="fa fa-search fa_search"></i></button>
                                                            </div>
                                                        </div>


                                                        <!--row end-->
                                                        <div class="row margin_b">
                                                            <div class="col-2  ">
                                                                <span>住所 </span>
                                                            </div>
                                                            <div class="col-1  ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-2 col_margin_tpace   padding0_ac">
                                                                <select name="street" id="todofuken"
                                                                    class="form-control mb-3 country hhhhh">
                                                                    <option label="愛知県" value="愛知県">愛知県</option>
                                                                    <option label="秋田県" value="秋田県">秋田県</option>
                                                                    <option label="青森県" value="青森県">青森県</option>
                                                                    <option label="千葉県" value="千葉県">千葉県</option>
                                                                    <option label="愛媛県" value="愛媛県">愛媛県</option>
                                                                    <option label="福井県" value="福井県">福井県</option>
                                                                    <option label="福岡県" value="福岡県">福岡県</option>
                                                                    <option label="福島県" value="福島県">福島県</option>
                                                                    <option label="岐阜県" value="岐阜県">岐阜県</option>
                                                                    <option label="群馬県" value="群馬県">群馬県</option>
                                                                    <option label="広島県" value="広島県">広島県</option>
                                                                    <option label="北海道" value="北海道">北海道</option>
                                                                    <option label="兵庫県" value="兵庫県">兵庫県</option>
                                                                    <option label="茨城県" value="茨城県">茨城県</option>
                                                                    <option label="石川県" value="石川県">石川県</option>
                                                                    <option label="岩手県" value="岩手県">岩手県</option>
                                                                    <option label="香川県" value="香川県">香川県</option>
                                                                    <option label="鹿児島県" value="鹿児島県">鹿児島県</option>
                                                                    <option label="神奈川県" value="神奈川県">神奈川県</option>
                                                                    <option label="高知県" value="高知県">高知県</option>
                                                                    <option label="熊本県" value="熊本県">熊本県</option>
                                                                    <option label="京都府" value="京都府">京都府</option>
                                                                    <option label="三重県" value="三重県">三重県</option>
                                                                    <option label="宮城県" value="宮城県">宮城県</option>
                                                                    <option label="宮崎県" value="宮崎県">宮崎県</option>
                                                                    <option label="長野県" value="長野県">長野県</option>
                                                                    <option label="長崎県" value="長崎県">長崎県</option>
                                                                    <option label="奈良県" value="奈良県">奈良県</option>
                                                                    <option label="新潟県" value="新潟県">新潟県</option>
                                                                    <option label="大分県" value="大分県">大分県</option>
                                                                    <option label="岡山県" value="岡山県">岡山県</option>
                                                                    <option label="沖縄県" value="沖縄県">沖縄県</option>
                                                                    <option label="大阪府" value="大阪府">大阪府</option>
                                                                    <option label="佐賀県" value="佐賀県">佐賀県</option>
                                                                    <option label="埼玉県" value="埼玉県">埼玉県</option>
                                                                    <option label="滋賀県" value="滋賀県">滋賀県</option>
                                                                    <option label="島根県" value="島根県">島根県</option>
                                                                    <option label="静岡県" value="静岡県">静岡県</option>
                                                                    <option label="栃木県" value="栃木県">栃木県</option>
                                                                    <option label="徳島県" value="徳島県">徳島県</option>
                                                                    <option label="東京都" value="東京都">東京都</option>
                                                                    <option label="鳥取県" value="鳥取県">鳥取県</option>
                                                                    <option label="富山県" value="富山県">富山県</option>
                                                                    <option label="和歌山県" value="和歌山県">和歌山県</option>
                                                                    <option label="山形県" value="山形県">山形県</option>
                                                                    <option label="山口県" value="山口県">山口県</option>
                                                                    <option label="山梨県" value="山梨県">山梨県</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-3  ppl_0">
                                                                <input type="text" id="address" name="address"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>電話番号</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="tel" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>FAX番号 </span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="fax" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>掛率</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="kakeritu" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>ヤマト顧客コード</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="yobi12" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>佐川顧客コード</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="kcode3" class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>送信元メールアドレス</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="mail_soushin"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>納品書価格表示</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <select name="review_flag" class="form-control country">
                                                                    <option>選択</option>
                                                                    <option> 表示あり</option>
                                                                    <option> 表示なし</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>納品書メールアドレス</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="mail_nouhin"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="row margin_b">
                                                            <div class="col-2 margin_t ">
                                                                <span>ヤマト送り状品名</span>
                                                            </div>
                                                            <div class="col-1 margin_t ">
                                                                <span></span>
                                                            </div>
                                                            <div class="col-4 ">
                                                                <input type="text" name="yokurijyouhinmei"
                                                                    class="form-control">
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" id="login" onclick="create()">登録</button>
                            <button type=" button" class="btn btn-info" data-dismiss="modal">閉じる&nbsp;<i
                                    class="fa fa-times cencel_fontawesome"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--main content end-->

            <!--==================-first modal end area ====================-->

            <!--===================================secound Modal================================== -->
            <div class="modal fade" data-backdrop="static" id="delivery_method" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">

                        <h5 class="modal-title ml-4 mt-4">ストアー情報変更</h5>
                        <div class="modal-body">
                            <div class="borderorder mt-1 pl-1 pr-1">

                                <div class="font_size_payment_view ml-2">
                                    <div class="row ">
                                        <div class="col-12 margin_t ">
                                            <div class="row ">
                                                <div class="col-12 margin_t ">
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t">
                                                            <span> 取引先番号</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control" readonly=""
                                                                value="12345">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>取引先指定番号 </span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>ストアー名 </span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span> ふりがな </span>
                                                        </div>
                                                        <div class="col-1 margin_t">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>

                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span> 郵便番号</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                        <div class="col-3 p-0">
                                                            <button type="submit" class="btn btn-info"><i
                                                                    class="fa fa-search fa_search"></i></button>
                                                        </div>
                                                    </div>


                                                    <!--row end-->
                                                    <div class="row margin_b">
                                                        <div class="col-2  ">
                                                            <span>住所 </span>
                                                        </div>
                                                        <div class="col-1  ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-2 col_margin_tpace   padding0_ac">
                                                            <select name="street" id="todofuken"
                                                                class="form-control mb-3 country hhhhh">
                                                                <option selected value="愛知県">愛知県</option>
                                                                <option label="愛知県" value="愛知県">愛知県</option>
                                                                <option label="秋田県" value="秋田県">秋田県</option>
                                                                <option label="青森県" value="青森県">青森県</option>
                                                                <option label="千葉県" value="千葉県">千葉県</option>
                                                                <option label="愛媛県" value="愛媛県">愛媛県</option>
                                                                <option label="福井県" value="福井県">福井県</option>
                                                                <option label="福岡県" value="福岡県">福岡県</option>
                                                                <option label="福島県" value="福島県">福島県</option>
                                                                <option label="岐阜県" value="岐阜県">岐阜県</option>
                                                                <option label="群馬県" value="群馬県">群馬県</option>
                                                                <option label="広島県" value="広島県">広島県</option>
                                                                <option label="北海道" value="北海道">北海道</option>
                                                                <option label="兵庫県" value="兵庫県">兵庫県</option>
                                                                <option label="茨城県" value="茨城県">茨城県</option>
                                                                <option label="石川県" value="石川県">石川県</option>
                                                                <option label="岩手県" value="岩手県">岩手県</option>
                                                                <option label="香川県" value="香川県">香川県</option>
                                                                <option label="鹿児島県" value="鹿児島県">鹿児島県</option>
                                                                <option label="神奈川県" value="神奈川県">神奈川県</option>
                                                                <option label="高知県" value="高知県">高知県</option>
                                                                <option label="熊本県" value="熊本県">熊本県</option>
                                                                <option label="京都府" value="京都府">京都府</option>
                                                                <option label="三重県" value="三重県">三重県</option>
                                                                <option label="宮城県" value="宮城県">宮城県</option>
                                                                <option label="宮崎県" value="宮崎県">宮崎県</option>
                                                                <option label="長野県" value="長野県">長野県</option>
                                                                <option label="長崎県" value="長崎県">長崎県</option>
                                                                <option label="奈良県" value="奈良県">奈良県</option>
                                                                <option label="新潟県" value="新潟県">新潟県</option>
                                                                <option label="大分県" value="大分県">大分県</option>
                                                                <option label="岡山県" value="岡山県">岡山県</option>
                                                                <option label="沖縄県" value="沖縄県">沖縄県</option>
                                                                <option label="大阪府" value="大阪府">大阪府</option>
                                                                <option label="佐賀県" value="佐賀県">佐賀県</option>
                                                                <option label="埼玉県" value="埼玉県">埼玉県</option>
                                                                <option label="滋賀県" value="滋賀県">滋賀県</option>
                                                                <option label="島根県" value="島根県">島根県</option>
                                                                <option label="静岡県" value="静岡県">静岡県</option>
                                                                <option label="栃木県" value="栃木県">栃木県</option>
                                                                <option label="徳島県" value="徳島県">徳島県</option>
                                                                <option label="東京都" value="東京都">東京都</option>
                                                                <option label="鳥取県" value="鳥取県">鳥取県</option>
                                                                <option label="富山県" value="富山県">富山県</option>
                                                                <option label="和歌山県" value="和歌山県">和歌山県</option>
                                                                <option label="山形県" value="山形県">山形県</option>
                                                                <option label="山口県" value="山口県">山口県</option>
                                                                <option label="山梨県" value="山梨県">山梨県</option>
                                                            </select>
                                                        </div>
                                                        <div class="col-3  ppl_0">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>電話番号</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>FAX番号 </span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>掛率 </span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>ヤマト顧客コード</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>佐川顧客コード</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>送信元メールアドレス</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>納品書価格表示</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <select class="form-control country">
                                                                <option>選択</option>
                                                                <option> 表示あり</option>
                                                                <option> 表示なし</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>納品書メールアドレス</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="row margin_b">
                                                        <div class="col-2 margin_t ">
                                                            <span>ヤマト送り状品名</span>
                                                        </div>
                                                        <div class="col-1 margin_t ">
                                                            <span></span>
                                                        </div>
                                                        <div class="col-4 ">
                                                            <input type="text" class="form-control">
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">変更</button>
                            <button type="button" class="btn btn-info" data-dismiss="modal">閉じる&nbsp;<i
                                    class="fa fa-times cencel_fontawesome"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--==================-secound modal end area ====================-->


            <!--==================-Table header modal start area ====================-->
            <!-- Modal -->
            <div class="modal fade" id="table_header" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">

                        </div>
                        <div class="modal-body">
                            <div class=" page4_table_design mt-2  table_hover ">
                                <table class="table table-striped  table-bordered">
                                    <thead class="thead-dark header text-center">
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17" for="th"></label>

                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">取引先番号</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th1" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17" for="th1"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">取引先指定番号 </span>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th2" class="custom-control-input"
                                                        checked="">
                                                    <label class="custom-control-label margin_btn_17" for="th2"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control" value="1">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">ストアー名 </span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th3" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17" for="th3"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">ふりがな</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th4" class="custom-control-input"
                                                        checked="">
                                                    <label class="custom-control-label margin_btn_17" for="th4"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control" value="2">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">郵便番号</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th5" class="custom-control-input"
                                                        checked="">
                                                    <label class="custom-control-label margin_btn_17" for="th5"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control" value="3">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">住所</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th6" class="custom-control-input"
                                                        checked="">
                                                    <label class="custom-control-label margin_btn_17" for="th6"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control" value="4">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">電話番号</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th7" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17" for="th7"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">FAX番号</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th8" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17" for="th8"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">掛率</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th9" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17" for="th9"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">ヤマト顧客コード</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th10" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17"
                                                        for="th10"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">佐川顧客コード</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th11" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17"
                                                        for="th11"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">送信元メールアドレス</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th12" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17"
                                                        for="th12"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">納品書価格表示</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th13" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17"
                                                        for="th13"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">納品書メールアドレス</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th14" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17"
                                                        for="th14"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">ヤマト送り状品名</span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="custom-control custom-checkbox custom-control-inline">
                                                    <input type="checkbox" id="th15" class="custom-control-input">
                                                    <label class="custom-control-label margin_btn_17"
                                                        for="th15"></label>
                                                </div>
                                            </td>
                                            <td style="width:60px!important;">
                                                <input type="text" class="form-control">
                                            </td>
                                            <td class="text-left">
                                                <span class="mt-1 text-left">操作ボタン</span>
                                            </td>
                                        </tr>

                                    </thead>
                                </table>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-info" data-dismiss="modal">閉じる&nbsp;<i
                                    class="fa fa-times cencel_fontawesome"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!--==================-Table header modal area ====================-->
    <script src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <!--Bootstrap 4.x-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!--Jquery Map for mac operating system-->

    <script>
        $(".country").select2({
            placeholder: "Select",
            allowClear: true
        });

    </script>

    <!--     <script type="">
        $(document).ready(function() {
    $("hshow12").click(function() {
    $("hshow2").show();
    });
    });
    </script> -->

    <!-- <script>
$(document).ready(function(){
  $("body").click(function(){
    $(".hh").hide();
      $(".hhh").hide();
        $(".hhhh").hide();
          $(".hhhhh").hide();
  });

</script> -->


    <script type="text/javascript">
        // display modal1 by clicking button1

     $("#searchButton1").click(function() {
            

 $("#searchModal1").show();
           
$("#searchButton1").hide();
          
});
// hide modal1 by clicking tojiro(off) button modal1



  $("#offButtonModal1").click(function() {
                $("#searchModal1").hide();
 $("#searchButton1").show();
   

});

    </script>
    <!-- <script type="text/javascript">
    
$(document).ready(function() {
    $("#searchModal1").hide();
});

</script> -->


    <script>
        //add teacher
        

        // function create()
        // {
        //     // alert();
        //     // document.getElementById('csrf').disabled=false;
        //     document.getElementById("newRegForm").method = "post";
        //     document.getElementById("newRegForm").submit();
        
        // }
        //zip code return address from api
        $("#postal_code_search").click(function() {
        
            var url = 'https://ita01.colgis.com/cgi-bin/http_yubin_get.cgi?PASSWORD=colgis.co.jp&YUBINBANGO=';
            var postal_code = $("#postal_code").val();
            // alert(postal_code);
            // var zip = '2620023';
            var link = url + postal_code;
            $.ajax({
                type: "GET",
                url:link,
                dataType: "text",
                success: function( response ) {
                    ward = response.split(" ");
                    province = ward[0].split("==")
                // console.log(ward[1]); // server response
                // console.log(response); // server response
                if (ward[1]!== undefined) {
                    console.log(ward);
                    $('#todofuken').val(province[1]);
                    $('#todofuken').select2().trigger('change');
                    $("#address").val(ward[1]+ward[2]);

                }else{
                    console.log('ward[1]');
                }
                // //alert();
                },
            });
        
        });
        //zip code return address from api
    </script>
</body>

</html>