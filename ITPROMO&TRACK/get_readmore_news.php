<?php

if(isset($_POST['id'])){
  $rows = array();
  $id = $_POST['id'];

require 'menu/connect.php';


  $sql = "SELECT   news_topic.news_id,news_topic.news_topic, news_topic.news_detail, news_topic.news_date,member.member_fullname
                           FROM news_topic,member 
                           WHERE news_topic.member_id=member.member_id
                           ORDER BY news_topic.news_id = '$id'";




  if($rs = $db->query($sql)){
    while($row = $rs->fetch_object()){
      $rows[] = $row;
    }
    $db->close();
    echo json_encode($rows);
  }else{
    echo $db->error;
    $db->close();
  }
}

?>

