@extends('layouts.app')

@section('content')

    <list :data="$player" route="players.show"></list>

@endsection
