<form wire:submit="save" class="shadow p-4 rounded-3 form-color ">
    @if (session()->has('success'))
        <div class="alert alert-success text-center">{{ session('success') }}</div>
    @endif

    <div class="mb-3">
        <label for="title" class="form-label">{{__('ui.title')}}</label>
        <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
            wire:model.blur="title">

        @error('title')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-3">
        <label for="description" class="form-label">{{__('ui.description')}} </label>
        <textarea wire:model.blur="description" class="form-control @error('description') is-invalid @enderror" id="description"
            cols="30" rows="10"></textarea>

        @error('description')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-3">
        <label for="price" class="form-label">{{__('ui.price')}}</label>
        <input type="text" class="form-control @error('price') is-invalid @enderror" id="price"
            wire:model.blur="price">

        @error('price')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror

    </div>
    <div class="mb-3">
        <select wire:model="category" id="category" class="form-control @error('price') is-invalid @enderror">
            <option value="">{{__('ui.selectCategory')}}</option>
            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

        </select>
        @error('category')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror


    </div>

    <div class="mb-3">
        <input type="file" wire:model.live="temporary_images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror" placeholder="Img/">
        @error('temporary_images.*')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror

        @error('temporary_images')
            <p class="fst-italic text-danger">{{ $message }}</p>
        @enderror
    </div>

    @if(!empty($images))
        <div class="row">
            <div class="col-12">
                <p>
                    Photo preview:
                </p>
                <div class="row border border-4 border-success rounded shadow py-4">
                    @foreach($images as $key => $image)

                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded" style="background-image: url({{ $image->temporaryUrl() }});">
                            </div>
                            <button type="button" class="btn mt-1 btn-danger" wire:click='removeImage({{$key}})'>X

                            </button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif
    <div class="d-flex justify-content-center py-3">
        <button type="submit" class="btn btn-warning">{{__('ui.publish')}}</button>

    </div>



</form>
