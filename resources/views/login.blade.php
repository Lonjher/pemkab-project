@extends('layouts.main')

@section('utama')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <main class="form-signin">
                    <div class="card-body shadow-sm p-3 bg-body-tertiary rounded">
                        <div class="d-flex justify-content-center flex-column align-items-center">
                            <img src="img/logo.png" alt="logo" width="90px">
                            <h5 class="pt-2">LOGIN</h5>
                        </div>
                        <form action="">
                            <div class="form-floating">
                                <input type="username" name="username" id="username" class="form-control my-2 mb-2"
                                    placeholder="Username">
                                <label for="username">Username</label>
                            </div>
                            <div class="form-floating">
                                <input type="password" name="password" id="password" class="form-control"
                                    placeholder="Password">
                                <label for="password">Password</label>
                            </div>
                            <div class="d-grid col-6 mx-auto pt-2">
                                <button class="btn btn-primary">LOGIN</button>
                                {{-- <button type="button" class="btn btn-primary"
                                        style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem; --bs-btn-height: 20px">
                                        LOGIN
                                    </button> --}}
                            </div>
                            <div class="d-grid col-3 m-3 mx-auto">
                                <button class="btn btn-sm btn-outline-secondary">
                                    <img src="img/google.svg" alt="google" width="25px">
                                </button>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" @endsection
