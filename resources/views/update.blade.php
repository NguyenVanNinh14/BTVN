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

    		<h1>Update post</h1>

    		<form action="{{route('save2')}}" method="POST">
    			@csrf

                <div class="form-group has-error">
    		        <input type="hidden" class="form-control" name="id" value="{{$update->id}}" />
    		    </div>

                <div class="form-group has-error">
    		        <label for="key_post">Key post <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="key_post" value="{{$update->key_post}}" />
                    @error('key_post')<div class="alert alert-danger">{{ $message }}</div>@enderror
    		    </div>

    		    <div class="form-group has-error">
    		        <label for="title">Title <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="title" value="{{$update->title}}" />
                    @error('title')<div class="alert alert-danger">{{ $message }}</div>@enderror
    		    </div>

    		    <div class="form-group">
    		        <label for="slug">Slug <span class="require">*</span></label>
    		        <input type="text" class="form-control" name="slug"  value="{{$update->slug}}" />
                    @error('slug')<div class = "alert alert-danger">{{ $message }}</div>@enderror
    		    </div>

    		    <div class="form-group">
    		        <label for="content">Content</label>
    		        <input rows="5" class="form-control" name="content" value="{{$update->content}}" />
                    @error('content')<div class = "alert alert-danger">{{ $message }}</div>@enderror
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
