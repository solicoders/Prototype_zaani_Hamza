@extends('layouts.layout')
@section('content')
   @foreach($likes as $like)
<div class="row">
    <div class="card col-lg-3 col">
        <div class="card-body box-profile">
            <h3 class="profile-username text-center">{{ $like->nom }}</h3>
            <p class="text-muted text-center">{{ $like->utilisateur }}</p>
            <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                    <b>Date de création</b> <a class="float-right">{{ $like->Date_de_création }}</a>
                </li>
                <li class="list-group-item">
                    <b>Date de modification</b> <a class="float-right">{{ $like->Date_de_création }}</a>
                </li>
                <li class="list-group-item">
                    <b>Référence</b> <a class="float-right">{{ $like->utilisateur }}</a>
                </li>
            </ul>
            <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
        </div>
    </div>
</div>
    @endforeach
@endsection
    
