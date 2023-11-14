<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB"
        crossorigin="anonymous">
    <link rel="stylesheet" href="css/boxanimation.css">
    <style>
        body{
            font-family: 微軟正黑體;
            background-image: url(img/bg1.jpg);
            background-size: cover;
            background-position: center 35px;
            background-repeat:inherit;
        }
        .navbar-nav > li{
            margin-left:5px;
        }
        .divider-header{
	    display: block;
	    width: 110px;
	    height: 2px;
	    margin: 0 auto;
	    margin-bottom: 30px;
        background-color: #BA9A69;
    }
    .glass{
        position: relative; 
        background: hsla(0,0%,100%,.7); 
        overflow: hidden;
    }
    bg{
        position: fixed;
    }
        </style>


    <title>管理員專區</title>
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
                    <li class="nav-item">
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
    <!--Section-->
    <div style="margin-top: 10%;">
        <section id="about" class="p-4 glass">
            <h1 class="text-center"><strong>管理員專區</strong></h1>
            <div class="divider-header"></div>
            <div class="row">
                <div class="col-md-3 text-center aboutbox">
                    <a href="member_management.php" style="color: inherit;text-decoration: none;">
                        <img src="img/member_set.png" alt="" width="180px" height="180px">
                        <h3 class="p-3">會員管理</h3>
                    </a>
                </div>
                <div class="col-md-3 text-center aboutbox">
                    <a href="news_management.php" style="color: inherit;text-decoration: none;">
                        <img src="img/news.png" alt="" width="180px" height="180px">
                        <h3 class="p-3">消息管理</h3>
                    </a>
                </div>
                <div class="col-md-3 text-center aboutbox">
                    <a href="activity_management.php" style="color: inherit;text-decoration: none;">
                        <img src="img/events.png" alt="" width="180px" height="180px">
                        <h3 class="p-3">活動管理</h3>
                    </a>
                </div>
                <div class="col-md-3 text-center aboutbox">
                    <a href="level_management.php" style="color: inherit;text-decoration: none;">
                        <img src="img/admin_level.png" alt="" width="180px" height="180px">
                        <h3 class="p-3">權限管理</h3>
                    </a>
                </div>

            </div>
        </section>
    </div>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T"
        crossorigin="anonymous"></script>
</body>

</html>