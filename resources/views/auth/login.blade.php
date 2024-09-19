<x-layout>
    <div class="container">
        <div class="row row-log">
            <div class="col-12 text-center my-5">
                <h1>Accedi</h1>
            </div>
        </div>

        <div class="row justify-content-center align-items-center mb-5 ">
            <div class="col-12 col-md-4 vh-50">
                <form action="{{ route('login') }}" method="POST" class="shadow p-5  rounded-3 login-color">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email </label>
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email"
                            name="email">
                        @error('email')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            id="password" name="password">
                        @error('password')
                            <p class="fst-italic text-danger">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-form">Continua</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


</x-layout>
