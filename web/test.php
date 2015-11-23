<?php
define("HOSE",'127.0.0.1');
define("NAME",'root');
define("PASSWORD",'');
define("DBNAME",'blq');
class Test{
    private static $con = "";

    function __construct()
    {
        if (!extension_loaded('mysqli')) {
            throw_exception("Db Error: mysqli is not install");
        }
    }

    /*
     * 连接数据库
     * */
    function connect()
    {
        try {
            if (!(self::$con)) {
                self::$con = mysqli_connect(HOSE, NAME, PASSWORD, DBNAME);
            }
            mysqli_set_charset(self::$con,'utf8');
            return self::$con;
        } catch (Exception $e) {
            die("操作错误！");
            exit();
        }
    }
}
function mb_unserialize($data) {
    $out = preg_replace('!s:(\d+):"(.*?)";!e', "'s:'.strlen('$2').':\"$2\";'", $data);
    return unserialize($out);
}
$test = new Test();
$con = $test->connect();
$sql = 'select * from qs_kc';
$query = mysqli_query($con, $sql);
mysqli_close($con);
$arr = [];
while($arr[] = $query->fetch_assoc());
foreach($arr as $k=>$v){
    $arr[$k]['kc'] = mb_unserialize($v['kc']);
}
print_r($arr);
?>