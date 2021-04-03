<div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
        <h1 class="display-4 font-italic">Title of a longer featured blog post</h1>
        <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this post’s contents.</p>
        <p class="lead mb-0"><a href="#" class="text-white font-weight-bold">Continue reading...</a></p>
    </div>
</div>

<div class="row mb-2">

    @foreach ($tops as $top)

    <div class="col-md-6">
        <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
            <div class="col p-4 d-flex flex-column position-static">
                <strong class="d-inline-block mb-2 text-primary">{{$top->category->name}}</strong>
                <h3 class="mb-0">Featured post</h3>
                <div class="mb-1 text-muted">{{date('M y',strtotime($top->created_at)) }}</div>
                <p class="card-text mb-auto">{{$top->title}}</p>
                <a href="#" class="stretched-link">Continue reading</a>
            </div>
            <div class="col-auto d-none d-lg-block">
                <img src="{{$top->photo}}" alt="" width="200" height="250">

            </div>
        </div>
    </div>
    @endforeach

</div>
