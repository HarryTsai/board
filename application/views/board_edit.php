<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>留言修改</title>
</head>

<body>
<H1>留言修改</H1>
<hr/>
<?php
foreach ($query->result() as $row)
{
?>


	<form name="form1" method="POST" action="/ci/index.php/board/<?php echo $row->id; ?>/update">
                姓名：<input type="text" name="name" id="name" value="<?php echo $row->name; ?>"><br>
                郵件：<input type="text" name="email" id="email" value="<?php echo $row->email; ?>"><br>
                主題：<input type="text" name="subject" id="subject" value="<?php echo $row->subject; ?>"><br>
                內容：<textarea rows=7 name="content" id="content" > <?php echo $row->content; ?> </textarea><br>
                <input type="submit" name="Submit" value="送出" >
                <input type="Reset" name="Reset" value="重新填寫">
        </form>
<?php
}?>

</body>
</html>
