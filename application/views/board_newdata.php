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
    <div class="page-header">
        <h1>新增留言 <small>Say something~</small></h1>
    </div>

    <div class="row">

    <div class="col-md-2">
	<ul class="nav nav-pills nav-stacked">
		<li class="active"><a href="../board/index">
  			<span class="glyphicon glyphicon-step-backward"></span> 回留言版
		</a></li>
	</ul>
    </div>
   
    <div class="col-md-10">
    <form name="form1" class="form-horizontal" role="form"  method="POST" action="../board/create">
	<div class="form-group">
                <label for="name" class="col-md-2 control-label">姓名：</label>
                <div class="col-md-4">
                        <input type="text" name="name" class="form-control" id="name" placeholder="輸入姓名...">
                </div>
        </div>

	<div class="form-group">
    		<label for="email" class="col-md-2 control-label">Email：</label>
    		<div class="col-md-4">
      			<input type="email" name="email" class="form-control" id="email" placeholder="輸入Email...">
    		</div>
  	</div>
	<div class="form-group">
                <label for="subject" class="col-md-2 control-label">主題：</label>
                <div class="col-md-4">
                        <input type="text" name="subject" class="form-control" id="subject" placeholder="輸入主題...">
                </div>
        </div>
	<div class="form-group">
                <label for="content" class="col-md-2 control-label">內容：</label>
                <div class="col-md-4">
			<textarea rows=4 class="form-control"  name="content" id="content"></textarea>
                </div>
        </div>
	 <div class="col-md-4"></div>
	 <div class="col-md-4">
		<input type="submit" class="btn btn-primary btn-sm"  name="Submit" value="送出" >
		<input type="Reset" class="btn btn-primary btn-sm"  name="Reset" value="重新填寫">
	</div>
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
