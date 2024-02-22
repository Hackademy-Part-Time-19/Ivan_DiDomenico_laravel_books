<x-layout>
    
    <h2>Modifica il libro</h2>
    
     
    @if(session()->has('success'))
    <h5 class="text-primary">{{session('success')}}</h5>
    @endif
    <form action="{{route('books.update',$books->id)}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value={{$books->title}}>
            @error('title')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="year" class="form-label">Anno di pubblicazione</label>
            <input type="integer" class="form-control" id="year" name="year" value={{$books->year}}>
            @error('year')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="genre" class="form-label">Genere</label>
            <input type="text" class="form-control" id="genre" name="genre" value={{$books->genre}}>
            @error('genre')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" value={{$books->description}}>
            @error('description')<span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="mb-3">
            <button type="submit" class="btn btn-primary">Modifica</button> 
        </div>
    </form>
    
</x-layout>