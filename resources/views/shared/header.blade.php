@foreach($rubricsDict as $rubric)
    <li><a href="{{ route('rubric', ['rubric' => $rubric->slug])  }}">{{ $lang }} - {{ $rubric->name }}</a></li>
@endforeach