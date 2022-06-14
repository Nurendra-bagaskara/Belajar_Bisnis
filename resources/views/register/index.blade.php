@extends('main')

@section('container')
    <div>
        <main>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-4">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header bg-primary text-center text-light">
                                <h3 class="my-3">Register</h3></div>
                            <div class="card-body">
                                <p class="text-center">Isi Dengan Data Yang Benar</p>
                                <form>
                                <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="name" id="name" placeholder="name" />
                                        <label for="name">Name</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="text" name="username" id="username"  placeholder="username" />
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="email" name="email" id="email" placeholder="name@example.com" />
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" type="password" name="password" id="password" placeholder="Password" />
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-end mt-4 mb-0 ">
                                        <a class="btn btn-primary" href="#" >Save</a>
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