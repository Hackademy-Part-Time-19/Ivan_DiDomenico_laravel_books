<x-layout>
    
    <h1>Libri</h1>
    
    @foreach ( $libri as $chiave => $libro )
    
    <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title">{{$libro['title']}}</h4>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$libro['genre']}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$libro['year']}}</h6>
            <p class="card-text">{{$libro['description']}}</p> 
            <a href={{route('books.show',$libro['id'])}} class="card-link"> Dettaglio</a>
            <a href="#" class="card-link">Modifica</a>
            <a href="#" class="text-danger" class="card-link">Cancella</a>
        </div>
        
     @endforeach
    </x-layout>