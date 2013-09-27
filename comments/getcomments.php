<?php
session_start();
if(true){
    header('Cache-control:no-cache');
    $db=mysql_connect("localhost","root","hjk20121217");
    mysql_select_db("igem2013_comments",$db);
    $data= mysql_query('SELECT * FROM comments WHERE id="'.$_GET['id'].'" ORDER BY  `comments`.`comment_time` DESC');
    while ($row = mysql_fetch_assoc($data)) {
        echo '<div class="media"><div class="media-body"><h4 class="media-heading">';
        echo $row['comment_by'];
        echo '</h4>'.$row['comment_content'].'</div></div>';
        echo '<p class="text-right"><small><em>'.$row['comment_time'].'</em></small></p>';
    }
    mysql_close($db); 
}

?>
