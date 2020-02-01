@extends('layout.master')


@section('title', 'Home')



@section('content')

<div class="container">



@foreach($articles as $article)

<p>{{$article->title}}</p>
<p>{{$article->body}}</p>

@endforeach

</div>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Modi deleniti numquam porro dolorem expedita consequuntur error laboriosam aspernatur et, cumque voluptates provident sunt similique adipisci, atque aperiam quis voluptas reprehenderit.</p>

<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptas suscipit ut earum rerum ea excepturi, eum eos iste obcaecati eaque beatae rem ipsum nesciunt at nam. Dolor culpa iusto distinctio.</p>


@endsection