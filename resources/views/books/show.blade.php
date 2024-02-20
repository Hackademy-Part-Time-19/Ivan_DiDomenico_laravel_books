<x-layout>
    
    <h1>Dettaglio libro {{$libri['id']}}</h1>
    
   <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title">{{$libri['title']}}</h4>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$libri['genre']}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$libri['year']}}</h6>
            <p class="card-text">{{$libri['description']}}</p> 
            <a href="#" class="card-link">Modifica</a>
            <a href="#" class="text-danger" class="card-link">Cancella</a>
        </div>
        
 
    </x-layout>