@extends('layouts.app')

@section('content')

    <list :data="$groups" route="playergroups.show"></list>

@endsection
