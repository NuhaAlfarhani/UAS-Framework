@section('title', 'Login')

@section('loginForm')

<!-- Pills content -->
<div style="width: 75%; position:relative">
  <div class="row justify-content-center mt-5" style="margin-left: -100%; margin-right:-100%">
    <div class="col-lg-4">
      <div class="card">
        <div class="card-header" style="background-color:rgba(63, 67, 102, 0.562)">
          <h1 class="card-title" style="text-align: center">Login</h1>
        </div>
        <div class="card-body" style="background-color: #D0C9C0">
          @if(Session::has('error'))
          <div class="alert alert-danger" role="alert">
            {{ Session::get('error') }}
          </div>
          @endif
          <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" name="email" class="form-control" id="email" placeholder="Name@email.com" required>
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
            </div>
            <div class="mb-3">
              <div class="d-grid">
                <button class="btn btn-primary" style="background-color: #9BA4B5; border-color:#9BA4B5">Login</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Pills content -->
@endsection


@include('banner')
@include('sidebar')