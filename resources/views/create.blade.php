<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container">
	<div class="row">

	    <div class="col-md-8 col-md-offset-2">

    		<h1>Create post</h1>

    		<form action="{{route('save')}}" method="POST">
    			@csrf

    		    <div class="form-group has-error">
    		        <label for="slug">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" />
    		    </div>

    		    <div class="form-group">
    		        <label for="title">Slug <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="slug" />
    		    </div>

    		    <div class="form-group">
    		        <label for="description">Content</label>
    		        <textarea rows="5" class="form-control" name="content" ></textarea>
    		    </div>

    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Create
    		        </button>
    		    </div>

    		</form>
		</div>

	</div>
</div>
</body>
</html>
