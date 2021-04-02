@extends('layouts.master')
@section('title','Home')

@section('container')


  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>

@foreach ($airticals as $airtical)

<div class="blog-post">
    <h2 class="blog-post-title">{{$airtical->title}}</h2>
    <p class="blog-post-meta">{{$airtical->created_at->diffForHumans()}} <a href="#">{{$airtical->author->name}}</a> on <a href="#">{{$airtical->Category->name}}</a>&nbsp;Category</p>
</div><!-- /.blog-post -->
@endforeach



{{$airticals->links()}}

      </div><!-- /.blog-main -->

      @include('assets.sidebar')

    </div><!-- /.row -->

  </main><!-- /.container -->

  <footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
@endsection
