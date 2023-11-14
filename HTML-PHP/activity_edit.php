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

    <title>修改活動</title>
</head>

<?php
include("config.php");

$id = $_GET['id'];

$result = mysqli_query($mysqli, "SELECT * FROM activity WHERE act_id='$id'"); 
while($res = mysqli_fetch_array($result))
{
    $title = $res['act_title'];
	$content = $res['act_content'];
    $ndate = $res['act_date'];
    $deadline = $res['act_deadline'];
    $announcer = $res['act_announcer'];
}
?>
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
                        <a class="nav-link" href="index.html">Home<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="administration.php">回專區</a>
                    </li>
                    <li class="nav-item active">
                        <a class="nav-link" href="member_management.php">會員管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="news_management.php">消息管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="activity_management.php">活動管理</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="level_management.php">權限管理</a>
                    </li>
            </div>
        </nav>
    </div>
<center>
    <div class="container" style="width:30%">
        <div class="pt-3">
            <h3>修改消息</h3>
            <div class="divider-header"></div>
        </div>
        <form method="POST" action=activity_edit2.php?>
            <div class="form-group  pt-3">
                <h5 align=left>活動代碼：</h5>
                <input type="text" class="form-control" value=<?php echo $id?> readonly name=id>
            </div>
            <div class="form-group">
                <h5 align=left>標題：</h5>
                <input type="text" class="form-control" value=<?php echo $title?> name=title>
            </div>
            <div class="form-group">
                <h5 align=left>內容：</h5>
                <textarea name="content" rows="5" cols="30" class="form-control"><?php echo $content?></textarea>
            </div>
            <div class="form-group">
                <h5 align=left>開放日期：</h5>
                <input type="date" class="form-control" value=<?php echo $ndate?> name=ndate>
            </div>
            <div class="form-group">
                <h5 align=left>截止日期：</h5>
                <input type="date" class="form-control" value=<?php echo $deadline?> name=deadline>
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
</center>
<script>
    function add_success() {
        alert("修改消息成功!將轉至原頁面");
    }
</script>