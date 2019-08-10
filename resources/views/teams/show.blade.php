@extends('layouts.app')

@section('content')

    <list :data="$team->groups" route="playergroups.show"></list>

@endsection
