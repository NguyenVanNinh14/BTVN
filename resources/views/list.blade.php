<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Danh sách</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>

        <table border ="1">
        {{csrf_field()}}
        <tr>

            <th>Title</th>
            <th>Slug</th>
            <th>Content</th>
            <th><a href="them">Thêm</a></th>
        </tr>
        @foreach($list as $value)

        <tr>
            <td>{{$value['title']}}</td>
            <td>{{$value['slug']}}</td>
            <td>{{$value['content']}}</td>
            <td><a href="sua/{{$value['id']}}">Sửa</a> |
                <a href="xoa/{{$value['id']}}">Xóa</a>
            </td>


        </tr>

        @endforeach
        </table>
    </body>
</html>
