@if(session('flash_message'))
  <div>{{ session('flash_message') }}</div>
@endif

@foreach ($texts as $text)
	{{ $text->title  }}
	{{ $text->content }}
	{{ $text->email }}
	{{ $text->price }}
	{{ $text->is_visible }}
@endforeach
