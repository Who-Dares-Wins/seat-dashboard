@extends('web::layouts.grids.12')

@section('title', 'Dashboard')
@section('page_header', 'Dashboard')

@section('content')
  <div>
    <p class="lead text-muted">
      Good day, {{ auth()->user()->name }}.<br />
    </p>

    <p>In the future this portal will serve as a quick glance at your monthly performance, as well as other important updates from SAS Command. We've also started building out a knowledge base of valuable information to benefit you.</p>

    <br>

    <h3>Latest from the knowledge base</h3>

    <div id="app" class="wiki">
      <div class="panel panel-default" style="width: 18rem;" v-for="post in fetchedPosts">
        <div class="panel-heading">
          <h3 class="panel-title">@{{post.title}}</h3>
        </div>

        <div class="panel-body">
          <p class="card-text">@{{post.excerpt}}</p>
          <a :href="post.url" target="_blank" class="btn btn-primary">Read</a>
        </div>
      </div>
    </div>
  </div>
@stop

@push('head')
  <link rel="stylesheet" href="{{ asset('web/css/dashboard.css') }}" />
@endpush

@push('javascript')
  <script type="text/javascript" src="https://unpkg.com/@tryghost/content-api"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script type="text/javascript" src="{{ asset('web/js/home.js') }}"></script>
@endpush
