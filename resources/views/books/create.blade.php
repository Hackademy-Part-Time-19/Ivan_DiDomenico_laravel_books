<x-layout>
    
    <h2>Inserisci un nuovo libro</h2>
    
    @if(session()->has('success'))
    <h5 class="text-primary">{{session('success')}}</h5>
    @endif
    <form action="{{route('books.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title">
            @error('title')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno di pubblicazione</label>
            <input type="integer" class="form-control" id="year" name="year">
            @error('year')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre">
            @error('genre')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description">
            @error('description')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Inserisci</button> 
        </div>
    </form>
    
</x-layout>