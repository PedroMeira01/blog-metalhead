@include('partials.header')

<section>
    <h1>Bem vindo ao meu blog sobre Heavy Metal</h1>

    <ul>
    @foreach ($posts as $post)
        <li>{{ $post->title }}</li>
    @endforeach
    </ul>
</section>

@include('partials.footer')
