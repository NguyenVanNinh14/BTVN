@extends('bai3')
@section('content')
            @foreach($bai3 as $search)
                <table>
                   <input type="text" name ="title" value ="{{search->title}}"><br>
                   <input type="text" name = "content" value = "{{search->content}">
                </table>
            @endforeach

@endsection
