<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="css/buttons.css">
    <style>
        body{
        font-family: 微軟正黑體;
    }
    .navbar-nav > li{
        margin-left:5px;
    }
        header a{
        font-size: 18px;
        width: 300px;
        text-align: center;
        background-color: #BA9A69;
        text-decoration: none;
        color: white;
    }
    header a:hover{
        color:white;
        background: #E8960F;
        transition: 0.5s;
    }
    .divider-header{
	    display: block;
	    width: 180px;
	    height: 2px;
	    margin: 0 auto;
	    margin-bottom: 10px;
        background-color: #BA9A69;
    }
    
    </style>

</head>

<title>活動管理</title>
</head>

<body>
<?php include_once("config.php"); ?>
    <!--Navbar-->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.html">
                <h2 style="letter-spacing: 7px;display: inline-block;" ;>FJUxIM</h2>
                <h5 style="letter-spacing: 2px;display: inline-block;">輔仁大學資訊管理系系學會</h5>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="administration.php">回專區</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="member_management.php">會員管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news_management.php">消息管理</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="activity_management.php">活動管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="level_management.php">權限管理</a>
                    </li>
            </div>
        </nav>
    </div>
    <!--cover-->
    <div class="jumbotron jumbotron-fluid" style="background-color: #CBAB7A" ;>
        <div class="container">
            <h1 class="display-4 text-secondary">活動管理</h1>
            <h4 class="text-white ml-5">提供活動名單下載、新增、修改與刪除功能</h4>
        </div>
    </div>
    <!--Nav-->
    <header>
        <ul class="nav nav-tabs mb-3 mt-5 justify-content-center" id="pills-tab" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" id="pills-list-tab" data-toggle="pill" href="#pills-list" role="tab"
                    aria-controls="pills-list" aria-selected="true">活動名單/下載</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-add-tab" data-toggle="pill" href="#pills-add" role="tab" aria-controls="pills-add"
                    aria-selected="false">新增活動</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" id="pills-edit-tab" data-toggle="pill" href="#pills-revise" role="tab"
                    aria-controls="pills-edit" aria-selected="false">修改與刪除活動</a>
            </li>
        </ul>
    </header>
    <center>
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-list" role="tabpanel" aria-labelledby="pills-list-tab">
                <div class="container">
                    <table id="activitylist" class="datatable table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th style="width:50px;">#</th>
                                <th style="width:150px;">活動名稱</th>
                                <th>活動內容</th>
                                <th>活動發布人</th>
                                <th style="width:120px;">開放日期</th>
                                <th style="width:120px;">截止日期</th>
                                <th style="width:140px;">名單下載</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                $result = mysqli_query($mysqli, "SELECT * FROM activity"); 
                                while($res = mysqli_fetch_array($result)) { 		
                                    echo "<tr>";
                                    echo "<td>".$res['act_id']."</td>";
                                    echo "<td>".$res['act_title']."</td>";
                                    echo "<td>".$res['act_content']."</td>";
                                    echo "<td>".$res['act_date']."</td>";
                                    echo "<td>".$res['act_deadline']."</td>";
                                    echo "<td>".$res['act_announcer']."</td>";
                                    echo "<td><button type='button' class='download_btn'>下載報名表</button></td>";
                                    echo "</tr>";		
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-add" role="tabpanel" aria-labelledby="pills-add-tab" style="background-color:#f0f0f0";>
                <div class="container" style="width:25%">
                    <div class="pt-3">
                        <h3>新增活動</h3>
                        <div class="divider-header"></div>
                    </div>
                    <form method="POST" action="actadd.php">
                    <div class="form-group  pt-3">
                            <h5 align=left>活動代碼：</h5>
                            <input type="text" class="form-control" name="act_id" placeholder="">
                        </div>
                        <div class="form-group  pt-3">
                            <h5 align=left>活動名稱：</h5>
                            <input type="text" class="form-control" name="act_title" placeholder="">
                        </div>
                        <div class="form-group">
                            <h5 align=left>活動內容：</h5>
                            <textarea name="act_content" rows="5" cols="30" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <h5 align=left>開放日期：</h5>
                            <input type="date" class="form-control" name="act_date" placeholder="">
                        </div>
                        <div class="form-group">
                            <h5 align=left>截止日期：</h5>
                            <input type="date" class="form-control" name="act_deadline" placeholder="">
                        </div>
                        <div class="form-group">
                            <h5 align=left>發布人代碼：</h5>
                        <select name='announcer' class="form-control">
                        <? $result = mysqli_query($mysqli, "SELECT * FROM administrator");
                                while($res = mysqli_fetch_array($result)) {
                                    echo "<h5 align=left>發布人代碼：</h5>
                                    <option value=$res[ad_id]>$res[ad_id]</option>";
                                }
                        ?>
                        </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg btn-block mt-3" onclick="add_success()">提交</button>
                        <br>
                    </form>
                </div>
            </div>
            <div class="tab-pane fade" id="pills-revise" role="tabpanel" aria-labelledby="pills-edit-tab">
                <div class="container">
                    <table id="activity_edit" class="datatable table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                            <th style="width:50px;">#</th>
                                <th style="width:150px;">活動名稱</th>
                                <th>活動內容</th>
                                <th>活動發布人</th>
                                <th style="width:120px;">開放日期</th>
                                <th style="width:120px;">截止日期</th>
                                <th style="width:140px;">功能</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                                $result = mysqli_query($mysqli, "SELECT * FROM activity"); 
                                while($res = mysqli_fetch_array($result)) { 		
                                    echo "<tr>";
                                    echo "<td>".$res['act_id']."</td>";
                                    echo "<td>".$res['act_title']."</td>";
                                    echo "<td>".$res['act_content']."</td>";
                                    echo "<td>".$res['act_date']."</td>";
                                    echo "<td>".$res['act_deadline']."</td>";
                                    echo "<td>".$res['act_announcer']."</td>";
                                    echo "<td><button type='button' class='edit_btn' onclick='location.href=\"activity_edit.php?id=$res[act_id]\"'>修改</button>";
                                    echo "<button type='button' class='delete_btn'  onclick='location.href=\"delete.php?id=$res[act_id]&tb=activity&back=activity_management&col=act_id\"'>刪除</button></td>";
                                    echo "</tr>";		
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </center>
    <br><br>
    <!-- Footer -->
    <footer class="page-footer font-small blue pt-4" style="background-color:#CBAB7A;">
                <div class="text-center py-5 text-light">
                    FJUxIM
                </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $('#activitylist').DataTable();
        });
        $(document).ready(function () {
            $('#activity_edit').DataTable();
        });
    </script>
    <script>
        function add_success() {
            alert("新增活動成功!將轉至原頁面");
        }
    </script>
</body>

</html>