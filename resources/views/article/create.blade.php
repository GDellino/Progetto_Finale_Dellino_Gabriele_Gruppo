<x-layout>
    <div class="container-fluid min-vh-100 d-flex flex-column hNav container-custom   ">
        {{-- <div class="row row-log ">
        </div> --}}
        <div class="row row-log d-flex justify-content-center p-3">
            <div class="col-12 py-4">
                <h1 class="text-center pb-5">{{__('ui.publishAd')}}</h1>
            </div>
         <div class="col-12 col-md-8  ">
            <livewire:create-article-form />
         </div>
        </div>
    </div>

</x-layout>