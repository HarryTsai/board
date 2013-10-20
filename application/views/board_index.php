<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html" charset="utf-8"</meta>
    <title>留言板</title>
    <!-- Bootstrap -->
    <link href="/ci/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/ci/assets/js/html5shiv.js"></script>
      <script src="/ci/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div class="page-header">
    <h1>留言板<small>theme by bootstrap</small></h1>
</div>


<div classs="row">
<div class="col-md-2">
<ul class="nav nav-pills nav-stacked">
<li class="active"><a href="../board/newdata">
  <span class="glyphicon glyphicon-star"></span> 新留言
</a></li>
</ul>
</div>
<div class="col-md-10">
<?php foreach ($query->result() as $row) { ?>

<blockquote>
  <p><?php echo $row->content;?></p>
  <small><?php echo $row->subject;?> <cite title="Source Title"><?php echo $row->putdate;?></cite></small>
</blockquote>
<a class="btn btn-default btn-xs" href="../board/<?php echo $row->id; ?>/delete">
  <span class="glyphicon glyphicon-remove"></span> 刪除留言
</a>

<a class="btn btn-default btn-xs" href="../board/<?php echo $row->id; ?>/edit">
  <span class="glyphicon glyphicon-edit"></span> 修改
</a>

<?php } ?>

</div>
</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/ci/bootstrap/dist/js/bootstrap.min.js"></script>

</body>
</html>
