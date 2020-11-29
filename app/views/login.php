<?php include VIEW . 'layouts/header.php' ?>

<div class="container">

    <div class="row d-flex flex-column align-item-center">


    <form action="/user/login/" method="post" class="form-signin col-md-8 offset-md-2 text-center">
      <img class="mb-4 " src="/imgs/old-logo.png" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="inputEmail" class="sr-only">Email address</label>
      <input type="email" id="inputEmail" class="form-control" placeholder="Email address" name="email" required />
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required />
      
      <button class="btn btn-lg btn-warning btn-block mt-5" type="submit">Sign in</button>
     
    </form>


    </div>


</div>

<?php include VIEW . 'layouts/footer.php' ?>
