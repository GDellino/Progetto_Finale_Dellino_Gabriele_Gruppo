<x-layout>
    <div class="container-fluid min-vh-100 container-custom mb-5">
        <div class="row row-log">
            <div class="col-12 mt-5 ">
                <h1 class="text-center">Accedi</h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center mb-5  ">
            <div class="col-12 col-md-5 d-flex justify-content-center align-items-center p-5">
                        <form action="{{ route('login') }}" method="POST"
                            class=" p-5 rounded-5 form-color d-flex flex-column justify-content-center">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label ">Email</label>
                                <div class="position-relative">
                                    <span class="material-symbols-outlined">
                                        mail
                                    </span>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror"
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
                                        class="form-control @error('password') is-invalid @enderror pb-2" id="password"
                                        name="password" placeholder="...........">
                                    @error('password')
                                        <p class="fst-italic text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                            </div>
                            <div class="d-flex justify-content-center">
                                <button type="submit" class="btn btn-form">Continua</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>



</x-layout>
