
<a href="{{ route('texts.create') }}">新規登録</a>

@if(session('flash_message'))
  <div>{{ session('flash_message') }}</div>
@endif

@foreach ($texts as $text)
	<p>
	<a href="{{ route('texts.show', [ 'id' => $text->id ]) }}">
	{{ $text->id  }}
	</a>
	: {{ $text->title  }}
	: {{ $text->content }}
	: {{ $text->email }}
	: {{ $text->price }}
	: {{ $text->is_visible }}
	</p>
@endforeach
