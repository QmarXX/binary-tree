@extends('layout')

@section('content')
    <div class="binary-tree">
        @include('parts.level', ['node' => $treeStructure]);
    </div>
@endsection
