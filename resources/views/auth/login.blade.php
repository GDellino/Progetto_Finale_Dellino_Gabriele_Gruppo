<x-layout>
<div class="container">
      <div class="row">
            <div class="col-12">
                  Login
            </div>
      </div>

      <div class="row">
            <div class="col-12">
                  <form action="{{route('login')}}" method="POST">
                        @csrf
                        <div class="mb-3">
                          <label for="email" class="form-label">Email </label>
                          <input type="email" class="form-control" id="email" name="email" >
                        </div>
                        <div class="mb-3">
                          <label for="password" class="form-label">Password</label>
                          <input type="password" class="form-control" id="password"  name="password">
                        </div>
                        <button type="submit" class="btn btn-primary">Accedi</button>
                      </form>
            </div>
      </div>
</div>


</x-layout>