<?php
/**
 * User: Gavin
 * Mail: GavinChangCn@163.com
 * Date: 2016/4/19 0019
 * Time: 10:55
 */
if(isset($_POST["submit"]) && $_POST["submit"] == "报名") {
    $phone = $_POST["phone"];
    $nickname = $_POST["nickname"];
    $ladder = $_POST["ladder"];
    if($phone == "" || $nickname == "" || $ladder == "") {
        echo "<script>alert('你倒是输全信息啊！'); history.go(-1);</script>";
    } else if (strlen($phone) < 11) {
        echo "<script>alert('没有这样的手机号吧？！'); history.go(-1);</script>";
    } else {
        $pdo = new PDO('mysql:host=localhost;dbname=moonmatch;port=3306','root','12345');
        $pdo->exec('set names utf8');

        $sql = "select r.phone from register as r where r.phone = '$_POST[phone]'";
        $stmt = $pdo->prepare($sql);
        $stmt->execute();
        $rows = $stmt->fetch(PDO::FETCH_NUM);
        echo $rows;
        if ($rows) {
            echo "<script>alert('报名过了就别闹，这个手机号已经存在了！'); history.go(-1);</script>";
        } else {
            $sql = "select r.nickname from register as r where r.nickname = '$_POST[nickname]'";
            $stmt = $pdo->prepare($sql);
            $stmt->execute();
            $rows = $stmt->fetch(PDO::FETCH_NUM);
            if ($rows) {
                echo "<script>alert('报名过了就别闹，这个昵称已经存在了！'); history.go(-1);</script>";
            } else {
                $sql = "INSERT INTO `moonmatch`.`register` (`phone`, `nickname`, `ladder`, `match`) VALUES ('$_POST[phone]','$_POST[nickname]','$_POST[ladder]','1')";
                $result = $pdo->exec($sql);
                if($result) {
                    echo "<script>location.href='registers.php';</script>";
                } else {
                    echo "<script>alert('系统繁忙，请稍候！'); history.go(-1);</script>";
                }
            }
        }
    }
} else {
    echo "<script>alert('提交未成功！'); history.go(-1);</script>";
}
?>