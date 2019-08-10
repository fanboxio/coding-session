@extends('layouts.app')

@section('content')

    <list :data="$club->teams" route="teams.show"></list>

@endsection
