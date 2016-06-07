          <form class="navbar-form navbar-right" method="post" action="index.php">
            <input type="hidden" name="action" value="login" />
            <div class="form-group">
              <input type="text" placeholder="Email or username" name="username" class="form-control">
            </div>
            <div class="form-group">
              <input type="password" placeholder="Password" name="password" class="form-control">
            </div>
            <input type="submit" class="btn btn-success" value="signin">
			<a href="signup.php" class="btn btn-success">signup</a>
          </form>