@extends("layouts.default")
@section("title","Login")
@section("content")

<div class="container">
      <form action="{{route('login.post')}}" method="POST" id="form-use" >
        @csrf
        <h3 class="text-center mb-3">Login</h3>
        <div class="col-md-12">
          <div class="row mb-4">
            <label for="email" class="form-label">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control @if($errors->has('email')) {{'is-invalid'}} @endif"
              value="{{old('email')}}"
              placeholder="Email address"
              autofocus
            />
            @if($errors->has('email'))
            <div class="invalid-feedback">
                {{$errors->first('email')}}
            </div>
            @endif
          </div>
          <div class="row mb-5">
            <label for="password" class="form-label">Password</label>
            <input
              type="password"
              name="password"
              id="password"
              class="form-control @if($errors->has('password')) {{'is-invalid'}} @endif"
              placeholder="Password"
            />
            @if($errors->has('password'))
            <div class="invalid-feedback">
                {{$errors->first('password')}}
            </div>
            @endif
          </div>
        </div>
        
        <div class="col-md-12">
          <div class="row mb-4">
            <button type="submit" class="btn btn-primary">Sign In</button>
          </div>
        </div>
        <div class="text-center">
          <p>Are you new member ? <a href="{{route('register.post')}}" class="fs-6">Register</a></p>
        </div>
      </form>
    </div>

@endsection