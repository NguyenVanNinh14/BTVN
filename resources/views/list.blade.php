<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Hello, Bootstrap Table!</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.css">
</head>
<body>
    <h1>Danh sach</h1>
    <table data-toggle="table">
    @csrf
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Slug</th>
            <th>Content</th>
            <th><a href="{{route('create')}}">Thêm</a></th>
        </tr>
    </thead>

    <tbody>
    @foreach($list as $value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->title}}</td>
            <td>{{$value->slug}}</td>
            <td>{{$value->content}}</td>
            <td><a class="btn btn-warning" href="{{route('edit',$value['id'])}}">Sửa</a> |
                <a onclick="return window.confirm('Bạn muốn xóa không');" class="btn btn-danger delete-post"  href="{{route('delete',$value['id'])}}">Xóa</a>

            </td>
        </tr>
    @endforeach
    </tbody>

    </table>

    @if($list->nextPageUrl())
    <div class="d-flex justify-content-end p-3">
        <a class="btn btn-primary" href="{{ $list->nextPageUrl() }}">Older Posts &rarr;</a>
    </div>
    @else
    <div class="d-flex justify-content-end p-3">
        <a class="btn btn-primary" href="{{ $list->previouspageUrl() }}">Previous Posts &rarr;</a>
    </div>
    @endif



    <script src="https://cdn.jsdelivr.net/npm/jquery/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-table@1.18.3/dist/bootstrap-table.min.js"></script>
</body>
</html>
