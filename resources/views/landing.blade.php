@extends('layouts.app')

@section('jumbotron')
    <div id="myCarousel" class="carousel slide" data-ride="carousel" xmlns:livewire="http://www.w3.org/1999/html">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="carousel-caption container text-left">
                    <h1>Example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="carousel-caption container text-left">
                    <h1>Another example headline.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
                </div>
            </div>
            <div class="carousel-item">
                <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
                <div class="carousel-caption container text-right">
                    <h1>One more for good measure.</h1>
                    <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
                    <p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('main')
    <livewire:article.search />
{{--    @for ($i = 0; $i < 12; $i++)--}}
{{--    <div class="card rounded-top-left rounded-bottom-right mb-6 border-dark">--}}
{{--        <div class="card-body">--}}
{{--            <div class="w-50">--}}
{{--                <h1 class="display-4 font-italic">Title of a longer featured blog article</h1>--}}
{{--                <p class="lead my-3">Multiple lines of text that form the lede, informing new readers quickly and efficiently about what’s most interesting in this article’s contents.</p>--}}
{{--                <p class="lead mb-0"><a href="#" class="font-weight-bold">Continue reading...</a></p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="row mb-6">--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="card row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">--}}
{{--                <div class="col p-4 d-flex flex-column position-static">--}}
{{--                    <strong class="d-inline-block mb-2 text-primary">World</strong>--}}
{{--                    <h3 class="mb-0">Featured article</h3>--}}
{{--                    <div class="mb-1 text-muted">Nov 12</div>--}}
{{--                    <p class="card-text mb-auto">This is a wider card with supporting text below as a natural lead-in to additional content.</p>--}}
{{--                    <a href="#" class="stretched-link">Continue reading</a>--}}
{{--                </div>--}}
{{--                <div class="col-auto d-none d-lg-block">--}}
{{--                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-6">--}}
{{--            <div class="card row no-gutters border rounded overflow-hidden flex-md-row shadow-sm h-md-250 position-relative">--}}
{{--                <div class="col p-4 d-flex flex-column position-static">--}}
{{--                    <strong class="d-inline-block mb-2 text-success">Design</strong>--}}
{{--                    <h3 class="mb-0">Article title</h3>--}}
{{--                    <div class="mb-1 text-muted">Nov 11</div>--}}
{{--                    <p class="mb-auto">This is another wide card!</p>--}}
{{--                    <a href="#" class="stretched-link">Continue reading</a>--}}
{{--                </div>--}}
{{--                <div class="col-auto d-none d-lg-block">--}}
{{--                    <svg class="bd-placeholder-img" width="200" height="250" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: Thumbnail"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    @endfor--}}
@endsection
