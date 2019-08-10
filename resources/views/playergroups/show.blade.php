@extends('layouts.app')

@section('content')

    <list :data="$group->players" route="players.show"></list>

@endsection
