<!DOCTYPE html> <html lang="en"> <head> <meta charset="utf-8" /> <meta name="viewport" content="width=device-width,
  initial-scale=1" /> <title>Laravel CRUD </title> <link
  href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" /> <link
  rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" /> <link
  rel="stylesheet" href="{{asset('css/style.css')}}" />
</head> <body> <!-- As a link --> <nav class="navbar navbar-light bg-dark">
<div class="container-fluid d-flex jusitfy-content-between">
  <a class="navbar-brand text-light" href="#">Laravel CRUD</a>
  <div class="nav-item">
    <a class="navbar-brand text-light fs-4" href="{{route('logout')}}"><i class="bi bi-box-arrow-in-left"></i></a>
  </div>
</div>
</nav>
<div class="container mt-4">
  <div class="row">
    @if($message=Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <strong>{{$message}}</strong>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    @yield('main')
  </div>
</div>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
</body>

</html>