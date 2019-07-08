@extends('web::layouts.grids.12')

@section('title', 'Knowledge Base')
@section('page_header', 'Knowledge Base')

@section('content')
  <div id="kb">
    <div>
      <p class="lead text-muted">
        Knowledge is power, young Raven.<br />
      </p>
    </div>

    <table class="table table-hover table-condensed">
      <tbody>
        <tr>
          <th>Title</th>
          <th>Author</th>
          <th>Date</th>
          <th>Category</th>
        </tr>

        <tr v-for="post in fetchedPosts" @click="openPost(post)">
          <!-- <td>
            <a href="https://auth.whodareswins.space/configuration/access/roles/edit/1" type="button" class="btn btn-primary btn-xs">
              Edit
            </a>
            <a href="https://auth.whodareswins.space/configuration/access/roles/delete/1" type="button" class="btn btn-danger btn-xs">
              Delete
            </a>
          </td> -->
          <td>@{{post.title}}</td>
          <td>@{{post.primary_author.name}}</td>
          <td>@{{post.created_at}}</td>
          <td>@{{post.primary_tag.name}}</td>
        </tr>
      </tbody>
    </table>
  </div>
@stop

@push('head')
  <link rel="stylesheet" href="{{ asset('web/css/dashboard.css') }}" />
@endpush

@push('javascript')
  <script type="text/javascript" src="https://unpkg.com/@tryghost/content-api"></script>
  <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script type="text/javascript" src="{{ asset('web/js/kb.js') }}"></script>
@endpush
