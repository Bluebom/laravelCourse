@extends('layouts.app')
@section('content')

    <h1>contact Page</h1>
    <p>Mentira po</p>

    @if (count($people))

    <ul>
        @foreach($people as $person)
        <li>{{$person}}</li>

        @endforeach
    </ul>
    @endif

@endsection

@section('footer')
    <h2>Footer</h2>
<script>
    alert('Olá!');
</script>
@endsection