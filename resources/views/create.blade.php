<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form action="{{route('save')}}" method = "POST">
        {{csrf_field()}}
        <h1>Thêm</h1>
        <label>Title</label><br>
        <input type="text" name ="title"><br>
        <label>Slug</label><br>
        <input type="text" name ="slug"><br>
        <label>Content</label><br>
        <input type="text" name ="content"><br>
        <br>
        <input type="submit" value="thêm">
        </form>
    </body>
</html>
