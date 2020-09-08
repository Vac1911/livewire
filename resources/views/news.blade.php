@extends('layouts.app')

@section('jumbotron')
    <section class="jumbotron rounded-0 text-center bg-secondary">
        <div class="container">
            <h1>Browse Articles</h1>
            <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod. Massa enim nec dui nunc mattis enim ut tellus elementum.</p>
{{--            <p>--}}
{{--                <a href="#" class="btn btn-primary my-2">Main call to action</a>--}}
{{--                <a href="#" class="btn btn-secondary my-2">Secondary action</a>--}}
{{--            </p>--}}
        </div>
    </section>
{{--    <div class="position-relative">--}}
{{--        <div class="shape shape-fluid-x shape-top text-white">--}}
{{--            <div class="shape-img pb-8">--}}
{{--                <svg viewBox="0 0 100 50" preserveAspectRatio="none" style="left: 0;"><path d="M0 25h25L75 0h25v50H0z" fill="var(--light)"></path></svg>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection

@section('main')
    <livewire:article.browse></livewire:article.browse>
@endsection
