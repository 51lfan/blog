@foreach($articles as $key=>$value)
    <div class="box is-flex">
        <time class="ml-1 mr-1 tag is-light is-small">{{$value->created_at->toDateString()}}</time>
        <a class="is-flex" href="{{ $value->link() }}" title="{{$value->title}}">
            {{$value->title}}
        </a>
    </div>
@endforeach
