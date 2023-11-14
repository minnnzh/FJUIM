<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" href="css/buttons.css">
    <style>
        body{
        font-family: 微軟正黑體;
        background-color: #34495E;
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

<title>活動報名</title>
</head>

<body>
    <!--Navbar-->
    <div class="header">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="index.php">
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
                        <a class="nav-link" href="member.php">回專區</a>
                    </li>
            </div>
        </nav>
    </div>
    <!--cover-->
    <div class="jumbotron jumbotron-fluid" style="background-color: #CBAB7A;">
        <div class="container">
            <h1 class="display-4 text-secondary">活動報名</h1>
            <h4 class="text-white ml-5">活動詳細資料、報名功能</h4>
        </div>
    </div>
    <!--Nav-->
    <!--PHP-->
    <?php include_once("config.php"); ?>
    <?php
        $id = $_GET['id'];
        $result = mysqli_query($mysqli, "SELECT * FROM activity WHERE act_id = '$id'");  
        $res = mysqli_fetch_array($result);
        $title = $res['act_title'];
        $date = $res['act_date'];
        $deadline = $res['act_deadline'];
        $announcer = $res['act_announcer'];
        $content = $res['act_content']
    ?>
    <!--PHP-->
    <div class="container">
        <table id="activitylist" class="table table-bordered table-hover table-striped" style="background-color:white;">
            <thead>
                <tr>
                    <th style="width:150px;">活動代碼</th>
                    <th>
                        <?php echo $id?>
                    </th>
                </tr>
                <tr>
                    <th style="width:150px;">活動名稱</th>
                    <th>
                        <?php echo $title?>
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th>開放日期</th>
                    <th>
                        <?php echo $date?>
                    </th>

                </tr>
                <tr>
                    <th>截止日期</th>
                    <th>
                        <?php echo $deadline?>
                    </th>
                </tr>
                <!--PHP-->
                <?php
                    $result_2 = mysqli_query($mysqli, "SELECT mem_name FROM (SELECT * FROM administrator ad RIGHT JOIN member m ON m.mem_id = ad.ad_mem_id) temp WHERE ad_id = '$announcer'");
                    $res2 = mysqli_fetch_array($result_2);
                    $name = $res2['mem_name'];
                ?>
                <!--PHP-->
                <tr>
                    <th>活動發布人</th>
                    <th>
                        <?php echo $name?>
                    </th>

                </tr>
                <th colspan="2">詳情</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <pre>
                            <?php echo $content?>
                        </pre>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <div class="container" style="width:35%;">
                            <form method="GET" action="activity_info.html">
                                <div class="form-group">
                                    <label for="applicant_id">學號</label>
                                    <input type="text" class="form-control" name="applicant_id" placeholder="">
                                </div>
                                <div class="form-group">
                                    <label for="applicant_class">系籍</label>
                                    <input type="text" class="form-control" name="applicant_class">
                                </div>
                                <div class="form-group">
                                    <label for="applicant_name">姓名</label>
                                    <input type="text" class="form-control" name="applicant_name">
                                </div>
                                <button type="submit" class="btn btn-primary btn-lg btn-block mt-3" onclick="add_success()">報名</button>
                            </form>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    </header>
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
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

    <script>
        function add_success() {
            alert("新增會員成功!將轉至原頁面");
        }
    </script>
</body>

</html>