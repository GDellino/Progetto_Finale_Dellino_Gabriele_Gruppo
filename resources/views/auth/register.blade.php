<x-layout>
    <div class="container-fluid  container-custom   hNav">
        <div class="row my-3 row-log">
            <div class="col-12 py-5">
                <h1 class="display-4 text-center">Registrati</h1>
            </div>
        </div>

        <div class="row justify-content-center pb-5 my-3">
            <div class="col-12 col-md-6 ">
                <img class="img-fluid" src="/storage/images/michele.png" alt="">
            </div>
            <div class="col-12 col-md-6 ">
                <form action="{{ route('register') }}" method="POST" class="p-5 login-color w-75 rounded-3 form-color" >
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <div class="position-relative">
                            <span class="material-symbols-outlined">
                                person
                                </span>
                        <input type="text"  placeholder="Mario Rossi" class="form-control @error('name') is-invalid @enderror shadow" id="name" name="name">
                        @error('name')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <div class="position-relative">
                            <span class="material-symbols-outlined">
                                mail
                            </span>
                        <input type="email"  placeholder="mariorossi@email.it" class="form-control @error('email') is-invalid @enderror shadow" id="email" name="email">
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
                        <input type="password" placeholder="..........." class="form-control @error('password') is-invalid @enderror shadow" id="password" name="password">
                        @error('password')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <div class="position-relative">
                            <span class="material-symbols-outlined">
                                lock
                            </span>
                        <input type="password" placeholder="..........." class="form-control @error('password_confirmation') is-invalid @enderror shadow" id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                        </div>
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <button type="submit" class="btn  colorRegister">Continua</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
