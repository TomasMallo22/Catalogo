<?php 
include_once('config.php');

$title = 'Contactanos';
$subtitle = 'Envianos tu mensaje!';
$imagen = 'assets/img/contact-bg.jpg';

include(BASE_DIR.'inc/header.php'); 
include_once(BASE_DIR.'Business/ContactoBusiness.php');
   
$bContacto= new ContactoBusiness();

if(isset($_POST['enviar'])){
    if(!$bContacto->sendMail($_POST)){
     
    }
}

?>

        <!-- Main Content-->
 <main class="mb-4">
     <div class="container px-4 px-lg-5">
         <div class="row gx-4 gx-lg-5 justify-content-center">
             <div class="col-md-10 col-lg-8 col-xl-7">
                 <p>Completá el formulario para contactarnos sobre cualquier pregunta o comentario que tengas y nos contactaremos a la brevedad.</p>
                 <div class="my-5">
                     <form id="contactForm" action="" method="post">
                         <div class="form-floating">
                             <input class="form-control" id="name" name="nombre" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                             <label for="name">Nombre</label>
                             <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                         </div>
                         <div class="form-floating">
                             <input class="form-control" id="email" name="email" type="email" placeholder="Enter your email..." data-sb-validations="required,email" />
                             <label for="email">Email</label>
                             <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                             <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                         </div>
                         <div class="form-floating">
                             <input class="form-control" id="phone" name="telefono" type="tel" placeholder="Enter your phone number..." data-sb-validations="required" />
                             <label for="phone">Teléfono</label>
                             <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                         </div>
                         <div class="form-floating">
                             <textarea class="form-control" id="message" name="mensaje" placeholder="Enter your message here..." style="height: 12rem" data-sb-validations="required"></textarea>
                             <label for="message">Mensaje</label>
                             <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                         </div>
                         <br />
                         <!-- Submit success message-->
                         <!---->
                         <!-- This is what your users will see when the form-->
                         <!-- has successfully submitted-->
                         <div class="d-none" id="submitSuccessMessage">
                             <div class="text-center mb-3">
                                 <div class="fw-bolder">Form submission successful!</div>
                                 To activate this form, sign up at
                                 <br />
                                 <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                             </div>
                         </div>
                         <!-- Submit error message-->
                         <!---->
                         <!-- This is what your users will see when there is-->
                         <!-- an error submitting the form-->
                         <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                         <!-- Submit Button-->
                         <button class="btn btn-primary" name="enviar" id="submitButton" type="submit">Enviar</button>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </main>
<?php include_once(BASE_DIR.'inc/footer.php'); ?>
