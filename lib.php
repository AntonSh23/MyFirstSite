<?php
header("Content-Type: text/html; charset=utf-8");
function match_pass($pass ,$rpass){
    if ($pass == $rpass){
        return 'TRUE';
    }
    else {
        return 'FALSE';
    }
}

function create_new_test_pass($user_mark1){
    connection ();
    mysql_query(" SET NAMES 'utf8'");
    $user_name = $_SESSION["user"];
    $date = date("Y-m-d H:i:s");
    $user_mark = $user_mark1;
    mysql_query("INSERT INTO stats (user_name, mark, date) VALUES ('$user_name', '$user_mark', '$date')")or die("Invalid query: " . mysql_error());
}

function echo_all_db_user_data(){
    connection();
    mysql_query(" SET NAMES 'utf8'");
    $user_name = $_SESSION["user"];
    $result_query = mysql_query("SELECT user_name, mark, date FROM stats WHERE user_name='$user_name'");
    $row = mysql_fetch_array($result_query);
    do{
        printf("<p><table id='restab'>
                                        <tr>
                                            <td colspan='2'><strong>%s %s</strong></td>
                                        </tr>
                                        <tr>
                                             <td>Оценка:</td>
                                             <td>%s</td>
                                        </tr>
                                        <tr>
                                            <td>Дата сдачи</td>
                                            <td>%s</td>
                                        </tr>
                 </table></p>",$row['user_name'], $row['id_stat'],$row['mark'] ,$row['date']); }
    while($row = mysql_fetch_array($result_query));
}

function connection (){
    $connect = mysql_connect('localhost', 'my_db_user', '1234' ) or die(mysql_error());
    mysql_select_db('inttests');
}