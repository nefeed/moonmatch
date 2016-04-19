<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>第一届月球基地竞赛报名</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    </head>

    <body>
        <div id="top" style="width: 100%; height: 460px;">
            <img src="img/first_match_head.gif"  alt="第一届月球基地竞赛" align="center" style="width: 100%; height: 100%;"/>
        </div>
        <div id="content" style="width: 60%; height: auto; margin: 60px auto auto auto;">
            <form action="check.php" method="post">
                <div class="form-group">
                    <label for="phone">手机：</label>
                    <input type="text" class="form-control" name="phone" id="phone" placeholder="快输你的手机号" />
                </div>
                <div class="form-group">
                    <label for="nickname">昵称：</label>
                    <input type="text" class="form-control" name="nickname" id="nickname" placeholder="快告诉我你的昵称" />
                </div>
                <div class="form-group">
                    <label for="ladder">奖杯：</label>
<!--                    <input type="text" class="form-control" name="ladder" id="ladder" placeholder="你那点杯数，不要吝啬" />-->
                    <select type="text" class="form-control" name="ladder" id="ladder" placeholder="选择你达到过的最大高度吧，骚年"  >
                        <option value="" disabled selected hidden>选择你达到过的最大高度吧，骚年</option>
                        <option value="1500以下">不到1500的新玩</option>
                        <option value="1500以上">1500以上的老鸟</option>
                        <option value="2000以上">2000以上的怪物</option>
                    </select>
                </div>
                <div class="btn-group" role="group" aria-label="报名功能按键" style="width: 80%; margin: 40px 10% 40px;">
                    <input type="submit" name="submit" class="btn btn-success" value="报名" style="width: 50%;" />
                    <input type="button" class="btn btn-info" value="报名列表" onclick="javascript:window.location.href='registers.php'" style="width: 50%;"/>
                </div>
            </form>
        </div>
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
