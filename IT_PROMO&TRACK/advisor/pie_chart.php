<?php
require '../menu/connect.php';

  $sql = "SELECT advisergroup.*,  files.files_status,files.pf,files.files_id,files.files_filename_proposal,files.Owner,advisergroup.advisergroup_topic,advisergroup.advisergroup_id,partnergroup.group_id,partnergroup.group_number FROM advisergroup
                      LEFT JOIN files ON advisergroup.advisergroup_id = files.advisergroup_id
                    LEFT JOIN partnergroup ON advisergroup.group_id = partnergroup.group_id
                    LEFT JOIN member ON advisergroup.member_id = member.member_id
                    WHERE advisergroup.member_id    
                           ";



$query = mysql_query($sql);
while($result = mysql_fetch_array($query))
{
  $rows[]=array("c"=>array("0"=>array("v"=>$result['Owner'],"f"=>NULL),"1"=>array("v"=>(int)$result['pf'],"f" =>NULL)));
  
}

echo $format = '{
"cols":
[
{"id":"","label":"Owner","pattern":"","type":"string"},
{"id":"","label":"pf","pattern":"","type":"number"}
],
"rows":'.json_encode($rows).'}';

	

?>








