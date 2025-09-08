<?php include 'header.php'; ?>

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-4">
            <div class="login-container p-4">
                <h2 class="text-center mb-4">Forgot password</h2>
                <form method="POST" action="for_auth.php">
                <?php if (isset($_GET['err']) && $_GET['err'] == 1): ?>
                    <div class="alert alert-danger " role="alert">
                        Invalid email.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            <?php endif; ?> 
            <?php if (isset($_GET['pm']) && $_GET['pm'] == 1): ?>
                    <div class="alert alert-danger " role="alert">
                         try again later!
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif; ?>    
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" id="email" name="email"required>
                    </div>
                    <button type="submit" class="btn login-btn btn-block">Enter</button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>