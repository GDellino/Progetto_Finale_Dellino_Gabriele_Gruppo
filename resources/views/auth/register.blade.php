<x-layout>
    <div class="container">
        <div class="row my-5 row-log">
            <div class="col-12 py-5">
                <h1 class="display-4 text-center">Registrati</h1>
            </div>
        </div>

        <div class="row justify-content-center pb-5 my-5">
            <div class="col-4 ">
                <form action="{{ route('register') }}" method="POST" class="p-5 login-color shadow rounded-3" >
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Nome</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name">
                        @error('name')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror " id="email" name="email">
                        @error('email')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror " id="password" name="password">
                        @error('password')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password</label>
                        <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror " id="password_confirmation" name="password_confirmation">
                        @error('password_confirmation')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center my-3">
                        <button type="submit" class="btn btn-form">Continua</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layout>
