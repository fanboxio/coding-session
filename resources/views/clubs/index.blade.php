@extends('layouts.app')

@section('content')

    <list :data="$clubs" route="clubs.show"></list>

@endsection
