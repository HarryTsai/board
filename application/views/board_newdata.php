<!DOCTYPE html>
<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html" charset="utf-8"</meta>
    <title>新增留言</title>
    <!-- Bootstrap -->
    <link href="/ci/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/ci/assets/js/html5shiv.js"></script>
      <script src="/ci/assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<div class="row">

<div class="col-md-4">
</div>
<div class="col-md-8">
<form name="form1" method="POST" action="../board/create">
姓名：<input type="text" name="name" id="name"><br>
郵件：<input type="text" name="email" id="email"><br>
主題：<input type="text" name="subject" id="subject"><br>
內容：<textarea rows=7 name="content" id="content"></textarea><br>
<input type="submit" name="Submit" value="送出" >
<input type="Reset" name="Reset" value="重新填寫">
</form>
</div>
</div>
<hr/>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/ci/bootstrap/dist/js/bootstrap.min.js"></script>
</body>
</html>
