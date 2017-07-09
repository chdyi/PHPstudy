<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/7/9
 * Time: 20:55
 */

$con = @mysqli_connect('localhost','root','','myapp');

//if(mysqli_connect_errno($con)) {
//    echo "连接 MySQL 失败: " . mysqli_connect_error();
//}
//    mysqli_select_db($con, 'test');
//    $sql = "SELECT * FROM `users` WHERE id=1";
//    $sql = "SELECT id ,name FROM users WHERE name='zhanshang'";
//    $result = mysqli_query($con,$sql);
//  if( mysqli_num_rows($result) )
//   {

//    $result_arr = mysqli_fetch_array($result);
//    }else{
//       mysqli_error($conn);
//   }

//    $result_arr = mysqli_fetch_array($result,MYSQLI_ASSOC);
//    print_r($result_arr);
//}else{
//    echo '连接失败';
//}
//    echo '数据条数'.mysqli_num_rows($result);

//     $data_count = mysqli_num_rows($result);
//     for($i=0;$i<$data_count;$i++){
//         print_r(mysqli_fetch_array($result));
//     }

//     $result = mysqli_query($con,"SELECT COUNT(*) FROM users");
if($con){
    $result = mysqli_query($con,"SELECT * FROM 'users'");
    if($result){
        $result_arr =mysqli_fetch_array($result);
        echo '数据条数'.$result_arr[0];
    }else{
        echo '查询失败';
    }
}else{
   echo '连接失败';
}




////使用面向对象进行数据库的连接，在创建对象的时候就自动的连接数据
//$con = @new mysqli('localhost', 'root', '', 'myapp');
////判断数据库是否连接
//if ( $con -> connect_errno) {
//    die('连接失败'.$mysqli -> connect_error);
//}
////设置字符集
//$con -> set_charset('utf8');
////编写sql语句并执行
//$sql = "SELECT * FROM `users`";
////发送sql语句并执行，如果是select语句，返回的是一个对象，其他的返回来一个boolean.
//$res = $con -> query($sql);
//
//echo'<pre>';
////使用$res对象里面的fetch_assoc()取出里面的数据.
// while($row = $res->fetch_assoc()){
//  var_dump($row);
// }
// //使用fetch_row()方法
// while($row = $res -> fetch_row()){
//  var_dump($row);
// }
//
////使用fetch_array();
// while($row = $res -> fetch_array()){
//  var_dump($row);
// }
//
////fetch_object();
//while($row = $res -> fetch_object()){
//    var_dump($row);
//}
//
//$res -> free();
//$con -> close();

//    $con -> query('set names utf8');
//    $result = $con -> query('SELECT * FROM `users`');
//    if ( $result -> num_rows ) {
//        $result_arr = $result -> fetch_assoc();
//        print_r( $result_arr );
//    } else {
//        echo '没有数据';
//    }
//} else {
//    echo '数据库连接失败：', mysqli_connect_error();
//}