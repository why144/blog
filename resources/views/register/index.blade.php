@extends('layouts.main')

@section('container')
<div class="row justify-content-center mt-5">
    <div class="col-lg-5">
    <main class="form-signin">
        <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
         <form>
            

            <div class="form-floating">
                <input type="text" class="form-control" name="name" id="name" placeholder="Name">
                <label for="name">Name</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="username" id="username" placeholder="username">
                <label for="username">Username</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="email" id="email" placeholder="email">
                <label for="email">Email</label>
            </div>
            <div class="form-floating">
                <input type="text" class="form-control" name="password" id="password" placeholder="password">
                <label for="password">Password</label>
            </div>
            
            <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
        </form>
        <small class="d-block text-center mt-3">
            Already Registered? <a href="/login">Login</a>
        </small>
    </main>

    </div>
</div>


@endsection