<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://cdn.bootcss.com/jquery/3.2.1/jquery.min.js"></script>
    <style>
        body{
            font-family: 微软雅黑;
        }
    </style>
</head>
<body>
<?php include 'public/view/header.php' ?>
<div class="container">
    <div class="row">
        <?php include 'public/view/left.php' ?>
        <div class="col-lg-9">
            <!-- TAB NAVIGATION -->
            <ul class="nav nav-tabs" role="tablist">
                <li><a href="index.php?s=admin/grade/index">班级列表</a></li>
                <li class="active"><a href="index.php?s=admin/grade/create">添加新班级</a></li>
            </ul>
            <div class="panel panel-default">
                <div class="panel-heading">

                </div>
                <div class="panel-body">
                    <form action="index.php?s=admin/grade/add" method="post" class="form-horizontal" role="form">
                        <div class="form-group">
                            <label for="inputID" class="col-sm-2 control-label">班级名称:</label>
                            <div class="col-sm-10">
                                <input type="text" name="gname" id="inputID" class="form-control" value="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-10 col-sm-offset-2">
                                <button type="submit" class="btn btn-primary">添加</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php include 'public/view/footer.php' ?>
</body>
</html>