<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Welcome to MyApp</div>
                    <div class="card-body">
                        <?php if(auth()->guard()->guest()): ?>
                            <a class="btn btn-primary" href="<?php echo e(route('login')); ?>">Login</a>
                            <a class="btn btn-secondary" href="<?php echo e(route('register')); ?>">Register</a>
                        <?php else: ?>
                            <a class="btn btn-primary" href="<?php echo e(route('home')); ?>">Go to Dashboard</a>
                            <a class="btn btn-danger" href="<?php echo e(route('logout')); ?>" 
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Logout
                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\hotel\resources\views/welcome.blade.php ENDPATH**/ ?>