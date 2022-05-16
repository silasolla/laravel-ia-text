
<h1>こんにちは {{ $user->name }} さん</h1>
<h2>受講科目一覧</h2>
<ul>
@foreach($user->lectures as $lecture)
	<li>{{ $lecture->name }}</li>
@endforeach
</ul>
<a href="{{ route('lectures.edit') }}">編集</a>
