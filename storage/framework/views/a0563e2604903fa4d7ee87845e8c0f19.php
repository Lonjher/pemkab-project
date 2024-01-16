<?php $__env->startSection('utama'); ?>
    <section>
        <div class="row justify-content-center pt-3">
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
                                
                            </div>
                            <div class="d-grid col-3 m-3 mx-auto">
                                <a class="btn btn-sm btn-outline-secondary" href="<?php echo e(route('google.login')); ?>" >
                                    <img src="img/google.svg" alt="google" width="25px">
                                </a>
                            </div>
                        </form>
                    </div>
                </main>
            </div>
        </div>
    </section>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\KOMINFO\Laravel Project\pemkab\resources\views/login.blade.php ENDPATH**/ ?>