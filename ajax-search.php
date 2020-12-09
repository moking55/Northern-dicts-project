<?php
require_once('config.php');
 
function get_query($conn , $term){ 
 $query = "SELECT * FROM vocabs WHERE thai_word LIKE '%".$term."%' ORDER BY thai_word ASC";
 $result = mysqli_query($conn, $query); 
 $data = mysqli_fetch_all($result,MYSQLI_ASSOC);
 return $data; 
}
 
if (isset($_GET['term'])) {
 $getQuery = get_query($conn, $_GET['term']);
 $queryList = array();
 foreach($getQuery as $keyword){
 $queryList[] = $keyword['thai_word'];
 }
 echo json_encode($queryList);
}
?>