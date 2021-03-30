@extends('layouts.master')
@section('title','Home')

@section('container')


  <main role="main" class="container">
    <div class="row">
      <div class="col-md-8 blog-main">
        <h3 class="pb-4 mb-4 font-italic border-bottom">
          From the Firehose
        </h3>


        <div class="blog-post">
          <h2 class="blog-post-title">Another blog post</h2>
          <p class="blog-post-meta">December 23, 2013 by <a href="#">Jacob</a></p>

          <p>I am ready for the road less traveled. Already <a href="#">brushing off the dust</a>. Yeah, you're lucky if you're on her plane. I used to bite my tongue and hold my breath. Uh, She’s a beast. I call her Karma (come back). Black ray-bans, you know she's with the band. I can't sleep let's run away and don't ever look back, don't ever look back.</p>
          <blockquote>
            <p>Growing fast into a <strong>bolt of lightning</strong>. Be careful Try not to lead her on</p>
          </blockquote>
          <p>I'm intrigued, for a peek, heard it's fascinating. Oh oh! Wanna be a victim ready for abduction. She's got that international smile, oh yeah, she's got that one international smile. Do you ever feel, feel so paper thin. I’m gon’ put her in a coma. Sun-kissed skin so hot we'll melt your popsicle.</p>
          <p>This is transcendental, on another level, boy, you're my lucky star.</p>
        </div><!-- /.blog-post -->
      </div><!-- /.blog-main -->

      <aside class="col-md-4 blog-sidebar">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="font-italic">About</h4>
          <p class="mb-0">Saw you downtown singing the Blues. Watch you circle the drain. Why don't you let me stop by? Heavy is the head that <em>wears the crown</em>. Yes, we make angels cry, raining down on earth from up above.</p>
        </div>

        <div class="p-4">
          <h4 class="font-italic">Archives</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">March 2014</a></li>
            <li><a href="#">February 2014</a></li>
            <li><a href="#">January 2014</a></li>
            <li><a href="#">December 2013</a></li>
            <li><a href="#">November 2013</a></li>
            <li><a href="#">October 2013</a></li>
            <li><a href="#">September 2013</a></li>
            <li><a href="#">August 2013</a></li>
            <li><a href="#">July 2013</a></li>
            <li><a href="#">June 2013</a></li>
            <li><a href="#">May 2013</a></li>
            <li><a href="#">April 2013</a></li>
          </ol>
        </div>

        <div class="p-4">
          <h4 class="font-italic">Elsewhere</h4>
          <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </aside><!-- /.blog-sidebar -->

    </div><!-- /.row -->

  </main><!-- /.container -->

  <footer class="blog-footer">
    <p>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <p>
      <a href="#">Back to top</a>
    </p>
  </footer>
@endsection
