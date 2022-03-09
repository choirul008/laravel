@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
  <div class="col-lg-5">
    <main class="form-registration">
      <h1 class="h3 mb-3 fw-normal text-center">Form Registrasi</h1>
      <form>
    
        <div class="form-floating">
          <input type="text" name="name" class="form-control rounded-top" id="name" placeholder="Name">
          <label for="name">name</label>
        </div>
        <div class="form-floating">
          <input type="text" name="username" class="form-control" id="username" placeholder="Username">
          <label for="username">Username</label>
        </div>
        <div class="form-floating">
          <input type="email" name="email" class="form-control" id="email" placeholder="nama@example.com">
          <label for="email">Alamat Email</label>
        </div>
        <div class="form-floating">
          <input type="password" name="password" class="form-control rounded-bottom" id="password" placeholder="Password">
          <label for="password">Password</label>
        </div>
    
        <div class="checkbox mb-3">
        
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Daftar</button>
        
      </form>
      <small class="d-block text-center mt-3">Sudah Punya Akun? <a href="/login">Login</a> </small>
    </main>


  </div>
</div>
@endsection