@if(Auth::user()->is_favoriting($user->micropost_id))
    {!! Form::open(['route' => ['favorites.unfavorite', $user->micropost_id], 'method' => 'delete']) !!}
        {!! Form::submit('お気に入りを外す', ['class' => "btn btn-danger btn-block"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['favorites.favorite', $user->micropost_id]]) !!}
        {!! Form::submit('お気に入り★', ['class' => "btn btn-primary btn-block"]) !!}
    {!! Form::close() !!}
@endif