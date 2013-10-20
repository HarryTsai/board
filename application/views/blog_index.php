<table>

<?php
                // iterate result
                foreach ($query->result() as $row)
                {
			echo '<tr>';
                        echo '<td>'.$row->blog_id.'</td>';
                        echo '<td>'.$row->blog_title.'</td>';
                        echo '<td>'.$row->blog_description.'</td>';
                        echo '<td><a href="../blog/'.$row->blog_id.'/delete">delete</a></td>';
			echo '</tr>';
                }

?>

</table>
