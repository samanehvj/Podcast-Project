<?php include VIEW . 'layouts/header.php' ?>


<div class=" ">
    <img src="/imgs/hero3.jpeg" class="img-fluid w-100 ">
</div>

<div class="container mt-xl-5 mb-5 bg-secondary container-contact  ">
    <div class="d-flex justify-content-center pt-5">
        <h2 class="font-weight-bold text-light">Get in touch!</h2>
    </div>
    <div class="d-md-flex flex-md-row justify-content-center py-4">


        <div class="d-flex flex-column contact text-light px-4">
            <div class="d-md-flex justify-content-center icon py-2 "> <span class="fa fa-envelope"></span> <span class="mobile-info text-dark p-2 pb-3"></span> </div>
            <div class="contact-info "> candaceandjess@gmail.com</div>
        </div>
    </div>
    <div class="d-flex flex-row justify-content-center">
        <form class="w-xl-50 w-lg-75">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group"> <label for="name">First Name</label>
                            <div class="input-field"> <span class="fa fa-user-o p-2 border-right"></span> <input type="text" required> </div>
                        </div>
                        <div class="form-group"> <label for="name">Last Name</label>
                            <div class="input-field"> <span class="fa fa-user-o p-2 border-right"></span> <input type="text" required> </div>
                        </div>
                        <div class="form-group"> <label for="name">Email</label>
                            <div class="input-field"> <span class="fa fa-envelope-o p-2"></span> <input type="email" required> </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group"> <label for="msg">Message</label>
                            <div class="input-field bg-light"> <textarea name="message" id="msg" cols="10" rows="9" class="form-control bg-light" placeholder="Your Message ..."></textarea> </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row justify-content-center w-100"> <input type="button" value="Send Message" class="btn-book"> </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include VIEW . 'layouts/footer.php' ?>