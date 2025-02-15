<x-layout>
    <div class="container-fluid container-custom hNav">
        <div class="row row-log p-3">
            <div class="col-12 my-4 ">
                <h1 class="text-center h1Regiser display-4 ">{{__('ui.login')}}</h1>
            </div>
        </div>

        <div class="row mb-5 ">
            <div class="col-12 col-md-6 mb-5 d-flex align-items-center justify-content-center ">
                <img class="img-fluid rounded-5 " src="images/login.png" alt="labrador">
            </div>
            <div class="col-12 col-md-6">
                        <form action="{{ route('login') }}" method="POST"
                            class="  rounded-5 d-flex flex-column  justify-content-center  fotLog ">
                            @csrf
                            <div class="mb-3 ">
                                <label for="email" class="form-label ">Email</label>
                                <div class="position-relative">
                                    <span class="material-symbols-outlined">
                                        mail
                                    </span>
                                    <input type="email" class="form-control shadow @error('email') is-invalid @enderror"
                                        placeholder="mariorossi@email.it" id="email" name="email">
                                    @error('email')
                                        <p class="fst-italic text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="position-relative">
                                    <span class="material-symbols-outlined">
                                        lock
                                    </span>
                                    <input type="password"
                                        class="form-control shadow @error('password') is-invalid @enderror pb-2" id="password"
                                        name="password" placeholder="...........">
                                    @error('password')
                                        <p class="fst-italic text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-form  ">{{__('ui.continue')}}</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



</x-layout>
