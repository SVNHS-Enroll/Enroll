<div class="container">
    <div class="row mt-5">
        <div class="col-md-6">
            <form class="horizontal" action="welcome/login" method="post">
                <div class="form-group">
                    <label for="username">USERNAME</label><br>
                    <input type="text" class="form-control" name="username" id="username">
                </div>
                <div class="form-group">
                    <label for="password">PASSWORD</label><br>
                    <input type="password" class="form-control" name="password" id="password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Remember Me?</label>
                </div>
                <div class="form-group">
                <input class="btn btn-primary" type="button" value="Login">
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <img src="/images/student.png" alt="student" style="display:block; margin: auto; width:250px;">
        </div>
    </div>
</div>