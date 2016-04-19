<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>报名者名单</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css" />
    </head>

    <body>
        <div id="top" style="width: 100%; height: 460px;">
            <img src="img/first_match_head.gif"  alt="第一届月球基地竞赛" align="center" style="width: 100%; height: 100%;"/>
        </div>
        <div id="content" style="width: 60%; height: auto; margin: 40px auto auto auto;">
            <h1 align="center" style="font-weight: bold;">报名者一览</h1>
            <form name="registers" action="">
                <table border="1" cellspacing="0" cellpadding="0" class="table table-bordered"  style="margin-top: 20px;">
                    <tr class="active" align="center">
                        <th>昵称</th>
                        <th>奖杯</th>
                        <th>手机号</th>
                        <th>报名赛事</th>
                    </tr>
                    <?php
                    $pdo = new PDO('mysql:host=localhost;dbname=moonmatch;port=3306','root','12345');
                    $pdo->exec('set names utf8');

                    $sql = "select * from `register`";
                    $stmt = $pdo->prepare($sql);
                    $stmt->execute();
                    $result = $stmt->fetchAll(PDO::FETCH_OBJ);
                    foreach ($result as $rs) {
                        $id = $rs->id;
                        $phone = $rs->phone;
                        $nickname = $rs->nickname;
                        $ladder = $rs->ladder;
                        $match = $rs->match;
                        $phone = substr_replace($phone, '****', 3, 4);
                        echo '<tr align="center">';
                        echo '<td>' . $nickname . '</td>';
                        echo '<td>' . $ladder . '</td>';
                        echo '<td>' . $phone . '</td>';
                        echo '<td>第 ' . $match . ' 届比赛</td>';
                        echo '</tr>';
                    }
                    ?>
                </table>
            </form>
            <input type="submit" class="btn btn-warning" value="返回" onclick="javascript:window.location.href='register.php'" style="width: 80%; height: auto; align-content: center; margin: 0 10% 40px;"/>
        </div>
        <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    </body>
</html>
