@extends('layout.base')

@section('content')
<div class="homeTitle">
    <h1 class="title">Bookshelf</h1>
</div>

<div class="shelfTitle">
    <h2>Novel Bookshelf</h2>
    <div class="containerBook">
        @foreach ($books as $book)
        <ul>
            <li class="novelImg"><img src="{{ $book->imgLink }}" alt=""></li>
            <li class="bookTitle">{{ $book->bookName }}</li>
            <li class="year">{{ $book->year }}</li>
            <li class="author">{{ $book->author }}</li>
        </ul>
        @endforeach    
    </div>
</div>
<form class="formComment" action="/bookshelf" method="POST">
    @csrf
    <img src="https://img.icons8.com/ios/100/gender-neutral-user--v1.png" alt="Profile Logo"/>
    <div class="commentSent">
        <input name="comment" id="comment" type="text" placeholder="Leave a comment here...." required="">
        <button type="submit">
            <img src="https://img.icons8.com/ios-glyphs/90/sent.png" alt="sent"/>
    </div>
    </button>
</form>
<div class="commentCont">
    @foreach ($comments as $comment)
    <div class="comment">
        <div class="profileLogo">
            <img src="https://img.icons8.com/ios/100/gender-neutral-user--v1.png" alt="Profile Logo"/>
        </div>
        <div class="usnComment">
        @foreach ($users as $user)
            @if ($comment->user_id == $user->id)
                <span>{{ $user->username }}</span>
                <small>{{ $user->email }}</small>   
            @endif
        @endforeach
        <article>{{ $comment->comment }}</article>
        </div>
        <div class="commentDate">
            <span>{{ $comment->date}}</span>
            <small>{{ $comment->created_at->setTimezone('Asia/Makassar')->format('H:i:s') }}</small>
        </div>
    </div>
    @endforeach
</div>
@endsection