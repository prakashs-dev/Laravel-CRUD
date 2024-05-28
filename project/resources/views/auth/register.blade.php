@extends("layouts.default")
@section("title","Register")
@section("content")

<div class="container-reg">
      <form action="{{route('register.post')}}" method="POST" id="form-use-reg" enctype="multipart/form-data">
        @csrf
        <h2 class="text-center mb-3">Register</h2>
        <div class="row mb-2">
          <div class="col-md-6">
            <label for="fname" class="form-label">First Name</label>
            <input
              type="text"
              name="fname"
              id="fname"
              class="form-control @if($errors->has('fname')) {{'is-invalid'}} @endif"
              placeholder="First Name"
              value="{{old('fname')}}"
            />
            @if($errors->has('fname'))
            <div class="invalid-feedback">
                {{$errors->first('fname')}}
            </div>
            @endif
          </div>
          <div class="col-md-6">
            <label for="lname" class="form-label">Last Name</label>
            <input
              type="text"
              name="lname"
              id="lname"
              class="form-control @if($errors->has('lname')) {{'is-invalid'}} @endif"
              placeholder="Last Name"
              value="{{old('lname')}}"
            />
            @if($errors->has('lname'))
            <div class="invalid-feedback">
                {{$errors->first('lname')}}
            </div>
            @endif
          </div>
        </div>

        <div class="row mb-3">
          <div class="col-md-6">
            <label for="username" class="form-label">User Name</label>
            <input
              type="text"
              name="username"
              id="username"
              class="form-control @if($errors->has('username')) {{'is-invalid'}} @endif"
              placeholder="User Name"
              value="{{old('username')}}"
            />
            @if($errors->has('username'))
            <div class="invalid-feedback">
                {{$errors->first('username')}}
            </div>
            @endif
          </div>
          <div class="col-md-6">
            <label for="mail" class="form-label">Email</label>
            <input
              type="email"
              name="email"
              id="email"
              class="form-control @if($errors->has('email')) {{'is-invalid'}} @endif"
              placeholder="Email address"
              value="{{old('email')}}"
            />
            @if($errors->has('email'))
            <div class="invalid-feedback">
                {{$errors->first('email')}}
            </div>
            @endif
          </div>
        </div>

        <div class="form-row d-flex justify-content-center mb-3">
          <div class="form-group col-md-4">
            <label for="country">Country</label>
            <select class="form-select @if($errors->has('country')) {{'is-invalid'}} @endif" aria-label="Default select example" name="country">
              <option value="">Select Country</option>
              <option value="india">India</option>
              <option value="usa">USA</option>
              <option value="london">London</option>
            </select>
            @if($errors->has('country'))
            <div class="invalid-feedback">
                {{$errors->first('country')}}
            </div>
            @endif
          </div>

          <div class="form-group col-md-4 mx-1">
            <label for="state">State</label>
            <select class="form-select @if($errors->has('state')) {{'is-invalid'}} @endif" aria-label="Default select example" name="state">
              <option value="">Select State</option>
              <option value="tamilnadu">Tamil Nadu</option>
              <option value="new york">New York</option>
              <option value="arizona">Arizona</option>
            </select>
            @if($errors->has('state'))
            <div class="invalid-feedback">
                {{$errors->first('state')}}
            </div>
            @endif
          </div>

          <div class="form-group col-md-4">
            <label for="city">City</label>
            <select class="form-select @if($errors->has('city')) {{'is-invalid'}} @endif" aria-label="Default select example" name="city">
              <option value="">Select City</option>
              <option value="chennai">Chennai</option>
              <option value="agra">Agra</option>
              <option value="new delhi">New Delhi</option>
            </select>
            @if($errors->has('city'))
            <div class="invalid-feedback">
                {{$errors->first('city')}}
            </div>
            @endif
          </div>
        </div>

        <div class="row">
            <label class="form-check-label mb-3">Language</label>
          <div class="col-md-12 d-flex justify-content-between">
              <label class="form-check-label" for="tamil"><input type="checkbox" class="form-check-input mx-2" value="tamil" name="languages[]">Tamil</label>
              <label class="form-check-label" for="english"><input type="checkbox" class="form-check-input mx-2" value="english" id="english" name="languages[]">English</label>
              <label class="form-check-label" for="hindi"><input type="checkbox" class="form-check-input mx-2" value="hindi" id="hindi" name="languages[]">Hindi</label>
          </div>
        </div>

        <div class="row mb-2">
          <div class="col-md-12">
            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control @if($errors->has('password')) {{'is-invalid'}} @endif" id="password" name="password" />
            @if($errors->has('password'))
            <div class="invalid-feedback">
                {{$errors->first('password')}}
            </div>
            @endif
          </div>
        </div>

        <div class="mt-3 ">
          <button type="submit" class="btn btn-primary">Sign up</button>
        </div>
      </form>
    </div>

@endsection
