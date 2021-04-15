<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Sửa</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="{{route('save2')}}" method = "POST">
        {{csrf_field()}}
        <h1>Sửa</h1>
        <input type="hidden" name ="id" value =" {{$update['id']}}">
        <label>Title</label><br>
        <input type="text" name ="title" value =" {{$update['title']}}"><br>
        <label>Slug</label><br>
        <input type="text" name ="slug" value ="{{$update['slug']}} " ><br>
        <label>Content</label><br>
        <input type="text" name ="content" value ="{{$update['content']}} "><br>
        <br>
        <input type="submit" value="Sửa" >
        </form>
    </body>
</html>
