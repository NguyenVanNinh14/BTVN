@extends('bai3')
@section('content')
            @foreach($searchs as $search)
                <table>
                   {{search->title}}"<br>
                    {{search->content}}>
                </table>
            @endforeach

@endsection
