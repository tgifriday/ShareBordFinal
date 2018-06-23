    <h1 class="text-center">Login</h1>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
      <div class="col-md-6 offset-md-3">
    	<div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control">
      </div>
      </div>
      <div class="col-md-6 offset-md-3">
  			<div class="form-group">
    		<label>Password</label>
    		<input type="password" name="password" class="form-control">
    	</div>
    </div>
    <div class="text-center">
    	<input type="submit" class="btn btn-primary" name="submit" value="Login">
      </div>
    </form>
