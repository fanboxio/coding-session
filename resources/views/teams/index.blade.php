@extends('layouts.app')

@section('content')

    <list :data="$teams" route="teams.show"></list>

@endsection
