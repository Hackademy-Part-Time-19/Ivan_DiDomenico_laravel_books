<x-layout>
    
    <h1>Dettaglio libro {{$books['id']}}</h1>
    
   <div class="card" style="width: 18rem;">
        <div class="card-body">
            <h4 class="card-title">{{$books['title']}}</h4>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$books['genre']}}</h6>
            <h6 class="card-subtitle mb-2 text-body-secondary">{{$books['year']}}</h6>
            <p class="card-text">{{$books['description']}}</p> 
            <a href="#" class="card-link">Modifica</a>
            <a href="#" class="text-danger" class="card-link">Cancella</a>
        </div>
        
 
    </x-layout>