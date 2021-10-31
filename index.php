<html lang="zh">
<head>
    <?php header('Access-Control-Allow-Origin: *'); ?>
    <meta charset="utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no"/>
    <meta name="renderer" content="webkit"/>
    <meta name="force-rendering" content="webkit"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>作业小平台</title>
    <link rel="stylesheet" href="css/masiv.min.css">
    <link rel="stylesheet" href="./css/weui.css"/>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
            integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
            crossorigin="anonymous"
    />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="js/masiv.min.js"></script>
    <script
            src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"
            integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A"
            crossorigin="anonymous"
    ></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
            integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
            crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(function () {
            var $toast = $('#toast');
            $('#showToast').on('click', function () {
                if ($toast.css('display') !== 'none') return;

                $toast.fadeIn(100);
                setTimeout(function () {
                    $toast.fadeOut(100);
                }, 2000);
            });
        });

    </script>

</head>
<body class="mdui-drawer-body-left mdui-bottom-nav-fixed mdui-theme-primary-white">
<!-- 主要-->
<div class="mdui-drawer " id="left-drawer">
    <ul class="mdui-list">
        <li class="mdui-list-item mdui-ripple mdui-list-item-active">首页</li>
        <a href="./admin.php" class="mdui-list-item mdui-ripple">后台</a>

    </ul>
</div>

<div class="mdui-appbar">
    <div class="mdui-toolbar mdui-color-theme">
        <button class="mdui-btn mdui-btn-icon" mdui-drawer="{target: '#left-drawer'}"><i
                    class="mdui-icon material-icons">menu</i></button>
        <a href="javascript:" class="mdui-typo-headline">作业平台</a>
    </div>
</div>
<div class="mdui-container-fluid">

</div>
<div class="col-x">
    <article class="article">
        <br>
        <h2>作业内容</h2>
        <br>


        <br>
        <h3>今天</h3>
        <br>
        <?php
        require("con.php");
        cha(date("Y-n-j"), 0);
        ?>
        <br>
        <p>没有显示作业？</p>
        <a href="javascript:" class="weui-btn weui-btn_default" id="showToast">反馈</a>
        <div id="toast" style="display: none;">
            <div class="weui-mask_transparent"></div>
            <div class="weui-toast">
                <i class="weui-icon-success-no-circle weui-icon_toast"></i>
                <p class="weui-toast__content">反馈成功！</p>
            </div>
        </div>


        <h3>历史</h3>


        <br>
        <?php
        $now = 0;
        $be = date("Y-n-j");
        $be = date('Y-n-j', strtotime("$be -1 day"));
        while ($now < 5) {
            cha($be, 3);
            $now++;
            $be = date('Y-n-j', strtotime("$be -1 day"));
        }
        ?>


        <div class="weui-msg__extra-area">
            <div class="weui-footer">
                <p class="weui-footer__text">Copyright &copy; 2021 ccrice</p>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
                integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
                crossorigin="anonymous"></script>
    </article>
</div>
<div class="mdui-bottom-nav mdui-bottom-nav-text-auto mdui-color-white mdui-bottom-nav-scroll-hide mdui-text-color-white-* ">
    <a href="javascript:" class="mdui-ripple mdui-bottom-nav-active">
        <i class="mdui-icon material-icons">book</i>
        <label>作业</label>
    </a>
    <a href="javascript:" class="mdui-ripple">
        <i class="mdui-icon material-icons">alarm</i>
        <label>通知</label>
    </a>

</div>


</body>

</html>
