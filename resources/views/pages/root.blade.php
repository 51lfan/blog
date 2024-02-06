@extends('layouts.app')
@section('content')
    <section class="section min-h-screen">
        <div class="container is-max-widescreen">
            <div class="columns">
                <main class="column is-9">
                    @if($articles->total())

                        @include('components.article_list',$articles)
                        @if($articles->total()>10)
                            <div class="box">
                                {!! $articles->links() !!}
                            </div>
                        @endif
                    @else
                        <div class="box">
                            <p class="has-text-centered has-text-warning">~~ 暂无 ~~</p>
                        </div>
                    @endif

                </main>
                <aside class="column is-3">
                    @include('components.aside')
                </aside>
            </div>
        </div>
    </section>
@stop
