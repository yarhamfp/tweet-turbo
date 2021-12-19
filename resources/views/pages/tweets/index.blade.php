@extends('layouts.app')

@section('title')
    Tweets
@endsection

@section('content')
    <div class="row">
        <div class="col-3">
            <!-- Sidebar-->
            <div class="border-end bg-white" id="sidebar-wrapper">
                <div class="list-group list-group-flush">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Home</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Explore</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Notifications</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Messages</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Bookmarks</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Lists</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!">Profile</a>
                </div>
            </div>
        </div>
        <div class="col-6">
            @include('pages.tweets._form')
        </div>
        <div class="col-3">
            <div class="card bg-light mb-3" style="max-width: 18rem;">
                <div class="card-header">What's happening</div>
                <div class="card-body">
                    <h5 class="card-title">Light card title</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
