<nav class="hk-breadcrumb" aria-label="breadcrumb">
    <ol class="breadcrumb breadcrumb-light bg-transparent">
        @foreach($breadcrumb as $bcrumb)
            @if($bcrumb['is_active'])
                <li class="breadcrumb-item active"><a href="{{$bcrumb['url']}}">{{$bcrumb['name']}}</a></li>
            @else
                <li class="breadcrumb-item"><a href="{{$bcrumb['url']}}">{{$bcrumb['name']}}</a></li>
            @endif
        @endforeach
    </ol>
</nav>