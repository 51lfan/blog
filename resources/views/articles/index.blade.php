@extends('layouts.app')
@section('title')
    首页
@stop
@section('content')
    <section class="section">
        <div class="container is-max-widescreen">
            <div class="columns">
                <main class="column is-9">
                    @include('components/article_list',$articles)
                    @if($articles->total()>10)
                    <div class="box" >
                        {!! $articles->appends(['column_id'=>request()->get('column_id')])->links() !!}
                    </div>
                    @endif
                </main>
                <aside class="column is-3">
                    @include('components/aside')
                </aside>
            </div>
        </div>
    </section>
@stop
