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

    		<form action="{{route('save2')}}" method="POST">
    			@csrf

                <div class="form-group has-error">
    		        <input type="hidden" class="form-control" name="id" value="{{$update->id}}" />
    		    </div>

    		    <div class="form-group has-error">
    		        <label for="slug">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" value="{{$update->title}}" />
    		    </div>

    		    <div class="form-group">
    		        <label for="title">Slug <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="slug"  value="{{$update->slug}}" />
    		    </div>

    		    <div class="form-group">
    		        <label for="content">Content</label>
    		        <input rows="5" class="form-control" name="content" value="{{$update->content}}" />
    		    </div>

    		    <div class="form-group">
    		        <button type="submit" class="btn btn-primary">
    		            Edit
    		        </button>
    		    </div>

    		</form>
		</div>

	</div>
</div>
</body>
</html>
