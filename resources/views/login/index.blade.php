@extends('main')

@section('container')
    <div>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header bg-primary text-center text-light">
                                <h3 class="my-3">Login</h3></div>
                            <div class="card-body">
                                <p class="text-center">Pastikan Data Anda Benar</p>
                                <form>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" v-model="email" id="email" type="email" placeholder="name@example.com" />
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating ">
                                        <input class="form-control" v-model="password" id="password" type="password" placeholder="Password" />
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="mb-5 ms-2">
                                        <a class="small text-decoration-none" href="#">Forgotten Password?</a>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-center ">
                                        <div class="row">
                                            <div class="col-md-9">
                                                <a class="text-decoration-none" href="/register">Need an account? Sign up!</a>
                                            </div>
                                            <div class="col-md-2">
                                                <a class="btn btn-primary " href="#" >Login</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>    
@endsection