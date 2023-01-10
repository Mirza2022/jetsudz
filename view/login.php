<!-- LOGIN MODAL -->

<div class="modal fade" id="login-form" tabindex="-1" aria-labelledby="login-label" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="login-label">Login to Jetsudz Inc.</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body">
                <form method="post" action="inc/loginUser.php">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="pwd" id="password" required>
                    </div>
                    <div class="mb-3">
                        <label><input type="checkbox" name="rememberPwd">Remember me</label>
                    </div>
                    <div class="text-center mb-3">
                        <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-outline-success" name="login">Login</button>
                    </div>
                    <div class="text-center mb-3">
                        <button type="button" class="btn btn-outline-info">Continue with Google</button>
                    </div>
                    <div class="text-center">
                        <footer>
                            <p>Don't have an account? <br /> Signup <a href="signup">Here</a></p>
                            <p>By logging in, you agree to our <br /> <a href="signup">Terms and Conditions</a></p>
                            <p><a href="signup">Help</a></p>
                        </footer>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>