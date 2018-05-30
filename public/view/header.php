<nav class="navbar progress-bar-danger" style="border-radius: 0">
    <div class="container">
        <a class="navbar-brand" style="color: #fff;" href="">后盾网学生管理系统</a>
        <ul class="nav navbar-nav" style="float: right;">
<!--            <li class="active">-->
<!--                <a href="">homepage</a>-->
<!--            </li>-->
            <li>
                <span class="namse">
                <?php
                        if(isset($_SESSION['username'])){
                            echo $_SESSION['username'];
                            ?>
                            </span>
            </li>


            <li>
                            <a href="index.php?s=admin/login/logout" style="color: #fff;"><span style="color: red">

             </span>&nbsp;&nbsp;退出</a>
            </li>
                <?php
                        }else{
                  ?>
                <a href="" style="color: #fff;">登录</a>
                <?php
                }

                        ?>




        </ul>
    </div>
</nav>