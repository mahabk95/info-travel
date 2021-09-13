

<!doctype html>
<html lang="en">
<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="web/bootstrap.min.css" />
    <link href="web/select2.min.css" rel="stylesheet" />
    <link href="web/adapter-tpl.css" rel="stylesheet" />

    <link rel="icon" href="web/logofaveico1.png">
    <!-- <link rel="icon" href="web/logofaveico2.png"> -->
    <title>TRANSTU : Info travel v0</title>
    <style>

        .border-1pxrs{
            border-right: 1px solid#6c757d!important;
        }

        .border-1pxls{
            border-left: 1px solid#6c757d!important;
        }
        .pr-6{
            padding-right: 6px!important;
            padding-left: 6px!important;
        }

        .min-padding{
            font-size: 10px!important;padding: 0.50rem 1.00rem!important;
        }
        .sure-style{
            font-weight: bold;
            color: darkgreen;
        }
        .loading{
            /*content:url('web/ajax-loader.gif');*/
            display: none;
        }
        .se-pre-con {
            position: fixed;
            left: 30%;
            top: 30%;
            width: 40%;
            height: 50%;
            z-index: 9999;
            /*background: url('web/ajax-loader.gif') center no-repeat #fff;*/
            /*background: url('web/loader-logo.gif') center no-repeat;*/
            background: url('web/spinner-loader-200.gif') center no-repeat;

        }
        .inactive-link{
            display: none;

        }

        .btn-default.btn-on.active{background-color: #5BB75B;color: white;}
        .btn-default.btn-off.active{background-color: #DA4F49;color: white;}

        .btn-default.btn-on-1.active{background-color: #006FFC;color: white;}
        .btn-default.btn-off-1.active{background-color: #DA4F49;color: white;}

        .btn-default.btn-on-2.active{background-color: #00D590;color: white;}
        .btn-default.btn-off-2.active{background-color: #A7A7A7;color: white;}

        .btn-default.btn-on-3.active{color: #5BB75B;font-weight:bolder;}
        .btn-default.btn-off-3.active{color: #DA4F49;font-weight:bolder;}

        .btn-default.btn-on-4.active{background-color: #006FFC;color: #5BB75B;}
        .btn-default.btn-off-4.active{background-color: #DA4F49;color: #DA4F49;}
    </style>
</head>
<body>
<!--<h1>Hello, world!</h1>-->
<div class="container-fluid  col-xs-12 col-md-12 col-sm-12 col-lg-9">
    <nav class="navbar navbar-expand-lg  navbar-expand-xs navbar-light bg-light" style="display: inherit;">
        <a class="navbar-brand" href="#"><img src="web/transtu_logo.png" alt="" style="height: 40px"></a>

        <div class="btn-group float-right"  style="margin-right: 5px; margin-top: 10px;direction: rtl!important" role="group" aria-label="Basic example">
            <a href="#ar" id="arabe" type="button" class="language btn btn-light btn-sm inactive"   style="font-size: 9px" >عربي</a>
            <a href="#fr" id="francais" type="button" class=" language btn btn-light  btn-sm  active" style="font-size: 9px" >Français</a>

        </div>
    </nav>
    <br/>
    <br/>
    <div class="row-fluid  ">
        <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" tabindex="-1" aria-hidden="true">
            <option id="527">524</option>
            <option>523</option>
            <option>23</option>
            <option>3D</option>
            <option>27</option>
            <option>4</option>
            <option>22</option>
            <option>15</option>
            <option>35</option>
            <option>33</option>
            <option>34</option>
            <option>12</option>
            v



        </select>
        <br/>
    </div>
    <br>
    <div class="card">
        <div class="card-header adapte-card-header" style="    ">
            <ul class="nav nav-tabs flex inline-flex" id="myTab" role="tablist" style="border-bottom: 1px solid #28a745;">
                <li class="nav-item">
                    <a class="nav-link active" id="time-tab" data-toggle="tab" href="#time" role="tab" aria-controls="time" aria-selected="false">Horaires</a>
                </li>

            </ul>
        </div>
        <!--        <div class="card-body " style="background-color: #fff;border-top: 2px solid #f8af26;!important;"">-->
        <div class="card-body " style="background-color: #fff;">
            <div class="tab-content" id="myTabContent">

                <div class="tab-pane fade content-box active show" id="time" role="tabpanel" aria-labelledby="time-tab">
                    <div id="time-head"> <div class="row" style="font-size: 12px">
                            <div class="col-sm-5  col-xs-6 col-lg-2 col-md-2 col-xl-2">
                                <label id="label-origin"> Départ : </label> <span class="origin" id="label-station-origin">Station Barcelone</span>
                            </div>
                            <div class="col-sm-5 col-xs-6 col-lg-2 col-md-2 col-xl-2">
                                <label id="label-destination"> Arrivé : </label> <span class="destination" id="label-station-destination">Terminus M-coteaux</span>
                            </div>
                        </div></div>
                    <div id="time-detail-alert"></div>
                    <div id="time-detail">
                        <div class="row justify-content-end ">
                            <div class="col">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="inputGroupSelect01" style="height: 25px!important;font-size: 10px" id="lab-direction">DÉPART</label>
                                    </div>
                                    <select class="custom-select" id="departure-id" style="font-size: 10px; height: 25px!important; padding-top: 2px">
                                        <option value="1" id="cite-option">CITÉ</option>
                                        <option value="2" id="station-option">STATION</option>

                                    </select>
                                </div>
                            </div>

                            <br>
                        </div>
                        <div class="row">
                            <div class="col " style="display: none;">
                                <ul class="list-group" id="area-week">
                                    <li class="list-group-item d-flex justify-content-between align-items-center" style="    background-color: #f8f9fa!important;">
                                        <div style="margin-left: auto;margin-right: auto;font-size: 14px;" id="title-time-week"> De Lundi à Jeudi</div>
                                    </li>
                                    <a href="#" class="list-group-item list-group-item-action min-padding">
                                        <div class="row" style="flex-wrap: nowrap">
                                            <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6 " id="num-travel-week">N°</div>
                                            <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6" id="departure-head-week">DEPART</div>
                                            <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6" id="arrival-head-week">ARRIVEÉ</div>
                                        </div>
                                    </a>
                                </ul>
                            </div>
                            <div class="col " style="display: none;">
                                <ul class="list-group" id="area-friday">
                                    <li class="list-group-item d-flex justify-content-between align-items-center" style="    background-color: #f8f9fa!important;">
                                        <div style="margin-left: auto;margin-right: auto;font-size: 14px" id="title-time-friday"> Vendredi</div>
                                    </li>
                                    <a href="#" class="list-group-item list-group-item-action min-padding">
                                        <div class="row" style="flex-wrap: nowrap">
                                            <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6" id="num-travel-friday">N°</div>
                                            <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6" id="departure-head-friday">DEPART</div>
                                            <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6" id="arrival-head-friday">ARRIVEÉ</div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">1</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">04:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">2</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">05:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">3</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">06:00</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">4</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">07:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">5</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">08:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">6</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">09:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">7</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">10:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">8</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">11:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">9</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">12:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">13:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">11</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">14:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">12</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">15:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">13</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">16:25</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">14</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">17:30</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">18:30</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">16</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">19:30</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">17</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">20:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">18</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">21:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">19</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">22:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a></ul>
                            </div>
                            <div class="col" style="display: none;">
                                <ul class="list-group" id="area-saturday">
                                    <li class="list-group-item d-flex justify-content-between align-items-center" style="    background-color: #f8f9fa!important;">
                                        <div style="margin-left: auto;margin-right: auto;font-size: 14px" id="title-time-saturday"> Samedi</div>
                                    </li>
                                    <a href="#" class="list-group-item list-group-item-action min-padding">
                                        <div class="row" style="flex-wrap: nowrap">
                                            <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6" id="num-travel-saturday">N°</div>
                                            <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6" id="departure-head-saturday">DEPART</div>
                                            <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6" id="arrival-head-saturday">ARRIVEÉ</div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">1</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">04:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">2</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">05:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">3</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">06:00</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">4</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">07:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">5</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">08:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">6</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">09:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">7</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">10:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">8</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">11:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">9</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">12:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">13:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">11</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">14:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">12</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">15:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">13</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">16:25</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">14</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">17:30</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">18:30</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">16</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">19:30</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">17</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">20:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">18</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">21:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">19</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">22:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a></ul>
                            </div>
                            <div class="col " style="display: block;">
                                <ul class="list-group" id="area-sunday">
                                    <li class="list-group-item d-flex justify-content-between align-items-center" style="    background-color: #f8f9fa!important;">
                                        <div style="margin-left: auto;margin-right: auto;font-size: 14px" id="title-time-sunday"> de Lundi à Samedi</div>
                                    </li>
                                    <a href="#" class="list-group-item list-group-item-action min-padding">
                                        <div class="row" style="flex-wrap: nowrap">
                                            <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6" id="num-travel-sunday">N°</div>
                                            <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6" id="departure-head-sunday">DEPART</div>
                                            <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6" id="arrival-head-sunday">ARRIVEÉ</div>
                                        </div>
                                    </a>
                                    <a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">1</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">06:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">2</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">07:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">3</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">08:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">4</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">09:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">5</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">10:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">6</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">11:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">7</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">12:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">8</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">13:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">9</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">14:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">15:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">11</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">16:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">12</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">17:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">13</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">18:00</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">14</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">19:10</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">20:15</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">16</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">21:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">17</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">22:20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">18</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">00:00</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">19</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">00:00</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a><a href="#" class="list-group-item list-group-item-action min-padding" style="font-size: 14px!important">  <div class="row sure-style" style="flex-wrap: nowrap">  <div class="col-sm-2  col-md-2 col-lg-2 col-xs-2 pr-6">20</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 border-1pxls border-1pxrs pr-6">00:00</div>  <div class="col-sm-5  col-md-5 col-lg-5 col-xs-5 pr-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-</div></div></a></ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade content-box" id="tarif" role="tabpanel" aria-labelledby="tarif-tab">
                    <div id="tarif-head"> <div class="row" style="font-size: 12px">
                            <div class="col-sm-5  col-xs-6 col-lg-2 col-md-2 col-xl-2">
                                <label id="label-origin"> Départ : </label> <span class="origin" id="label-station-origin">Station Barcelone</span>
                            </div>
                            <div class="col-sm-5 col-xs-6 col-lg-2 col-md-2 col-xl-2">
                                <label id="label-destination"> Arrivé : </label> <span class="destination" id="label-station-destination">Terminus M-coteaux</span>
                            </div>
                        </div></div>
                    <div id="tarif-detail" style="font-size: 12px">

                    </div>

                </div>
                <div class="tab-pane fade  content-box" id="station" role="tabpanel" aria-labelledby="station-tab">
                    <div id="station-head"> <div class="row" style="font-size: 12px">
                            <div class="col-sm-5  col-xs-6 col-lg-2 col-md-2 col-xl-2">
                                <label id="label-origin"> Départ : </label> <span class="origin" id="label-station-origin">Station Barcelone</span>
                            </div>
                            <div class="col-sm-5 col-xs-6 col-lg-2 col-md-2 col-xl-2">
                                <label id="label-destination"> Arrivé : </label> <span class="destination" id="label-station-destination">Terminus M-coteaux</span>
                            </div>
                        </div></div>
                    <div id="station-detail" class="row" style="font-size: 12px">
                    </div>
                </div>
                <div class="tab-pane fade" id="section" role="tabpanel" aria-labelledby="section-tab" style="font-size: 12px"></div>
                <div class="tab-pane fade" id="listen" role="tabpanel" aria-labelledby="listen-tab">
                    <p id="msg-contsruct-page-listen"> Page en cours de construction </p>
                </div>
                <div class="tab-pane fade" id="general" role="tabpanel" aria-labelledby="general-tab">
                    <p id="msg-contsruct-page-info"> Page en cours de construction </p>
                </div>
            </div>
        </div>
    </div
</div>
<!--    <div class="loading" style="z-index: 99999999; " style="display: none;"></div>-->
<div style="visibility: hidden">
    <span id="place-holder-select">Tapper Le numéro de la Ligne</span>
    <!--     ajax loader-->
    <!--    <div id="content-ajax-loader" >-->
    <!--            <img src="./web/ajax-loader.gif" id="ajax-loader" class="size-loader position-img"/>-->
    <!--        <img src="./web/loader-logo.gif" id="ajax-loader" class=" center-block size-loader position-img" style="margin-top: 30px;display: block;margin-left: auto;margin-right: auto; width: 50px;"/>-->
    <!--    </div>-->

    <div id="content-ajax-under-construction">
        <div class=" center-block  position-img" style=";display: block;margin-left: auto;margin-right: auto;  " >  <h2>Page en cours de construction</h2></div>
    </div>
    <div id="content-ajax-init"><span id="content-ajax-msg" >Veuillez tapper le numéro de la ligne</span> </div>

</div>
<div class="row">
    <div class="col-lg-12 div-Summary-Report se-pre-con loading" id="loading">

    </div>
</div>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="web/jquery-3.3.1.slim.min.js" ></script>
<script src="web/popper.min.js" ></script>
<script src="web/bootstrap.min.js" ></script>
<script src="web/jquery-2.1.0.js"></script>
<script src="web/ext-jquery.js"></script>

<!--script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" /-->

<script>

    function changeProgram(slugProgram){
        if( slugProgram == "day-program"){
            $("#day-program").removeClass('active').addClass("inactive-link");;
            $("#week-program").removeClass('inactive-link').addClass("active");
            activeProgramWeek();

        }
        if( slugProgram == "week-program"){
            $("#week-program").removeClass('active').addClass("inactive-link");
            $("#day-program").removeClass('inactive-link').addClass("active");;
            $('#area-week, #area-friday, #area-saturday, #area-sunday').parent().css('display', 'block');

        }
    }
    $(document).ready(function() {

        $('.select2').select2({
            placeholder: "choisir une ligne",
            allowClear: true,
            closeOnSelect: false
        });
        $("#departure-id").change(function(){
            lineId = $('#line-number').val();
            // alert("test"+lineId);
            var origin = $("#label-station-origin").text();
            var destination = $("#label-station-destination").text();
            $("#label-station-origin").html(destination);
            $("#label-station-destination").html(origin);
            loadProgramWeek(lineId);
        });
        $(".program").click(function () {
            idProgram = $(this).prop('id');
            changeProgram(idProgram)
        });
        $(document).ajaxStart(function () {
            $(".se-pre-con").show();
        }).ajaxStop(function () {
            $(".se-pre-con").hide();
        });







        // $(".select2-selection__placeholder").html("Tapper le numero de la ligne");

    });

    function formatRepo (repo) {
        if (repo.loading) {
            return repo.text;
        }

        var markup = "<div class='select2-result-repository clearfix' style='direction: rtl; text-align: right' >" +
            "<div class='select2-result-repository__meta'  style='direction: rtl;text-align: right' >" +
            "<div class='title' style='font-weight: bold; direction:rtl;text-align: right'>" + repo.name + "</div>";
        markup +=   "</div> </div>";

        return markup;
    }





</script>
<script src="web/select2.full.js"></script>


</body>
</html>
