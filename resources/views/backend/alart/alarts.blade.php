@if ($errors->any())
<div class="alert alert-danger mt-4">
    <ul class="list-unstyled">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif


@if(session()->has('success'))
<div class="alert alert-success mt-4" role="alert">
    {{session('success')}}
</div>
@endif
