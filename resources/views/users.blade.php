@include('header')
<div class="container mt-5">
    <h1>{{$titulo}}</h1>
    <hr>
    @if(!empty($users))
    <ul>
        @foreach ($users as $user)
            <li>{{ $user }}</li>
        @endforeach
    </ul>
        @else
    <p>No hay nada men</p>
        @endif
</div>
@include('footer')
