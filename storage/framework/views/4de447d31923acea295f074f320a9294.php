<?php $__env->startSection('title'); ?>
    Se connecter | Admin
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div class="card overflow-hidden">
    <div class="bg-primary bg-soft">
        <div class="row">
            <div class="col-7">
                <div class="text-primary p-4">
                    <h5 class="text-primary">Bienvenu !</h5>
                    <p>Veuillez entrer vos indentifiant pour continuer la session.</p>
                </div>
            </div>
            <div class="col-5 align-self-end">
                <img src="img/logo.png" alt="" class="img-fluid">
            </div>
        </div>
    </div>
    <div class="card-body pt-0"> 
        <div class="auth-logo">
            <a href="/" class="auth-logo-light">
                <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                        <img src="img/logo.png" alt="" class="rounded-circle" height="34">
                    </span>
                </div>
            </a>

            <a href="/" class="auth-logo-dark">
                <div class="avatar-md profile-user-wid mb-4">
                    <span class="avatar-title rounded-circle bg-light">
                        <img src="img/logo.png" alt="" class="rounded-circle" height="34">
                    </span>
                </div>
            </a>
        </div>
        <div class="p-2">
            <form class="form-horizontal" action="<?php echo e(route('login')); ?>" method="POST">
                <?php echo csrf_field(); ?>
                <div class="mb-2">
                    <label for="username" class="form-label">Nom d'Utilisateur</label>
                    <input name="email" type="email" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" id="email" placeholder="Entrer votre email"
                    value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus>
                    <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="mb-1">
                    <label class="form-label">Mot de passe</label>
                    <div class="input-group auth-pass-inputgroup">
                        <input name="password" type="password" class="form-control <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="Enter password" aria-label="Password" 
                        value="<?php echo e(old('password')); ?>" aria-describedby="password-addon">
                        <button class="btn btn-light" type="button" id="password-addon"><i class="mdi mdi-eye-outline"></i></button>
                    </div>
                    <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>

                <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" id="remember-check"
                    <?php echo e(old('remember') ? 'checked' : ''); ?>>
                    <label class="form-check-label" for="remember-check">
                        Se souvener de moi
                    </label>
                </div>
                
                <div class="mt-1 d-grid">
                    <button class="btn btn-primary waves-effect waves-light" type="submit">Connecter</button>
                </div>

                <div class="mt-2 text-center ">
                    
                     <p class="mt-2">Pas de compte ? <a href="<?php echo e(route('register')); ?>" class="fw-medium text-primary"> Créer maintenant </a> </p>
                    <div class="mt-1">
                        <p>© <script>document.write(new Date().getFullYear())</script> NGF EXPERTISE CONSULTING</p>
                    </div>
                </div>
            </form>
        </div>

    </div>
</div>
<div class="mt-1 text-center">
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.auth', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\Ngf\cabinet\resources\views/auth/login.blade.php ENDPATH**/ ?>