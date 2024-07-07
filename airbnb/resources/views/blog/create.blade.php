@extends('base')

@section('title', 'Ajouter un article')

@section('content')

    <form action="" method="post">
        @csrf
        <div>
            <input type="text" name="title" value="Article de demonstration">
            @error('title')
            {{ $message }}
            @enderror
        </div>
        <div>
            <textarea  name="content">Contenu de démonstration</textarea>
            @error('content')
            {{ $message }}
            @enderror
        </div>
        <button>Enregistrer</button>
    </form>
@endsection