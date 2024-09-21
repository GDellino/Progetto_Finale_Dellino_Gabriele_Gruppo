<form wire:submit="save" class="shadow p-4 rounded-3 form-color">
    @if (session()->has('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">Titolo</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
            wire:model.blur="title">

        @error('title')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione </label>
        <textarea wire:model.blur="description" class="form-control @error('description') is-invalid @enderror" id="description"
            cols="30" rows="10"></textarea>

        @error('description')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
            wire:model.blur="price">

        @error('price')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-3">
        <select wire:model="category" id="category" class="form-control @error('price') is-invalid @enderror">
            <option value="">Seleziona Categoria</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

        </select>
        @error('category')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror


    </div>
    <div class="d-flex justify-content-center py-3">
        <button type="submit" class="btn btn-warning">Pubblica</button>

    </div>
</form>
