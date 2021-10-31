<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,minimum-scale=1">
    <title>作业小平台--后台</title>
    <link rel="stylesheet" href="css/masiv.min.css">
    <link rel="stylesheet" href="css/iconfont.css">
    <link rel="stylesheet" href="./css/weui.css"/>
    <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/css/mdui.min.css"
            integrity="sha384-cLRrMq39HOZdvE0j6yBojO4+1PrHfB7a9l5qLcmRm/fiWXYY+CndJPmyu5FV/9Tw"
            crossorigin="anonymous"
    />

</head>
<body>
<!-- 主要-->

<div class="mdui-appbar">
    <div class="mdui-toolbar mdui-color-theme">
        <a href="javascript:" class="mdui-btn mdui-btn-icon"><i class="mdui-icon material-icons">menu</i></a>
        <a href="javascript:" class="mdui-typo-headline">作业平台</a>
    </div>
</div>
<div class="cols">

    <div class="col-x">


        <form action="./next.php" method="post">
            <!--语文-->
            <div class="weui-form__control-area">
                <div class="weui-cells__group weui-cells__group_form">
                    <div class="weui-cells__title">语文作业</div>
                    <div class="weui-cells weui-cells_form">
                        <div class="weui-cell ">
                            <div class="weui-cell__bd">
                                <label>
                                    <textarea class="weui-textarea" placeholder="请输入作业" rows="3"
                                              name="chinese"></textarea>
                                </label>
                                <div class="weui-textarea-counter">多个作业请换行</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--数学-->
            <div class="weui-form__control-area">
                <div class="weui-cells__group weui-cells__group_form">
                    <div class="weui-cells__title">数学作业</div>
                    <div class="weui-cells weui-cells_form">
                        <div class="weui-cell ">
                            <div class="weui-cell__bd">
                                <label>
                                    <textarea class="weui-textarea" placeholder="请输入作业" rows="3" name="math"></textarea>
                                </label>
                                <div class="weui-textarea-counter">多个作业请换行</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--english-->
            <div class="weui-form__control-area">
                <div class="weui-cells__group weui-cells__group_form">
                    <div class="weui-cells__title">英语作业</div>
                    <div class="weui-cells weui-cells_form">
                        <div class="weui-cell ">
                            <div class="weui-cell__bd">
                                <label>
                                    <textarea class="weui-textarea" placeholder="请输入作业" rows="3"
                                              name="english"></textarea>
                                </label>
                                <div class="weui-textarea-counter">多个作业请换行</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--phy-->
            <div class="weui-form__control-area">
                <div class="weui-cells__group weui-cells__group_form">
                    <div class="weui-cells__title">物理作业</div>
                    <div class="weui-cells weui-cells_form">
                        <div class="weui-cell ">
                            <div class="weui-cell__bd">
                                <label>
                                    <textarea class="weui-textarea" placeholder="请输入作业" rows="3" name="phy"></textarea>
                                </label>
                                <div class="weui-textarea-counter">多个作业请换行</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--hua-->
            <div class="weui-form__control-area">
                <div class="weui-cells__group weui-cells__group_form">
                    <div class="weui-cells__title">化学作业</div>
                    <div class="weui-cells weui-cells_form">
                        <div class="weui-cell ">
                            <div class="weui-cell__bd">
                                <label>
                                    <textarea class="weui-textarea" placeholder="请输入作业" rows="3" name="hua"></textarea>
                                </label>
                                <div class="weui-textarea-counter">多个作业请换行</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--shen-->
            <div class="weui-form__control-area">
                <div class="weui-cells__group weui-cells__group_form">
                    <div class="weui-cells__title">生物作业</div>
                    <div class="weui-cells weui-cells_form">
                        <div class="weui-cell ">
                            <div class="weui-cell__bd">
                                <label>
                                    <textarea class="weui-textarea" placeholder="请输入作业" rows="3" name="shen"></textarea>
                                </label>
                                <div class="weui-textarea-counter">多个作业请换行</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--other-->
            <div class="weui-form__control-area">
                <div class="weui-cells__group weui-cells__group_form">
                    <div class="weui-cells__title">其他</div>
                    <div class="weui-cells weui-cells_form">
                        <div class="weui-cell ">
                            <div class="weui-cell__bd">
                                <label>
                                    <textarea class="weui-textarea" placeholder="请输入" rows="3" name="other"></textarea>
                                </label>
                                <div class="weui-textarea-counter">多条请换行</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="weui-cell weui-cell_active">
                <div class="weui-cell__hd"><label class="weui-label">日期</label></div>
                <div class="weui-cell__bd">
                    <label for="date1"></label><input id="date1" class="weui-input" placeholder="留空自动 在下方可以快速选择"
                                                      name="date"/>
                </div>
            </div>
            <a href="javascript:" class="weui-btn weui-btn_default" id="showDatePicker">日期选择器</a>
            <br>
            <button class="weui-btn weui-btn_primary" type="submit" id="showTooltips">提交</button>
            <br><br>
        </form>


    </div>

</div>
<script src="js/masiv.min.js"></script>
<script
        src="https://cdn.jsdelivr.net/npm/mdui@1.0.1/dist/js/mdui.min.js"
        integrity="sha384-gCMZcshYKOGRX9r6wbDrvF+TcCCswSHFucUzUPwka+Gr+uHgjlYvkABr95TCOz3A"
        crossorigin="anonymous"
></script>
<script src="./js/weui.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="js/input.min.js"></script>
<script type="text/javascript">
    $('#showDatePicker').on('click', function () {
        weui.datePicker({
            start: 2010,
            end: new Date().getFullYear(),
            onChange: function (result) {
                console.log(result);
            },
            onConfirm: function (result) {
                console.log(result);
                var nnn = result.toString().replace(/,/g, "-")
                document.getElementById("date1").value = nnn;
            },
            title: '多列选择器'
        });
    });
</script>
</body>
</html>

