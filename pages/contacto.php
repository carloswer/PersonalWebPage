<div class="container" style="margin-top:150px; margin-bottom: 150px;">

    <div class="row">
        <div class="col-lg-12" style="padding: 0px;">
            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Contacto</h2>
            <!--Section description-->
            <p class="text-center w-responsive mx-auto mb-5"> ¿Tienes alguna pregunta? Por favor, envianos un email y te
                contactaremos. </p>

            <div class="row">

                <!--Grid column-->
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                <label for="name" class="">Nombre completo</label>
                                <input type="text" id="name" name="name" class="form-control">
                                    
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                <label for="email" class="">Email</label>
                                    <input type="text" id="email" name="email" class="form-control">
                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                <label for="subject" class="">Asunto</label>
                                    <input type="text" id="subject" name="subject" class="form-control">
                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                <label for="message">Mensaje</label>
                                    <textarea type="text" id="message" name="message" rows="10"
                                        class="form-control md-textarea"></textarea>
                                    
                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary" onclick="validateForm()" ;>Enviar </a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-3 text-center">
                    <ul class="list-unstyled mb-0">
                        <li><i class="fas fa-map-marker-alt fa-2x"></i>
                            <p>Ciudad Obregón Sonora</p>
                        </li>

                        <li><i class="fas fa-phone mt-4 fa-2x"></i>
                            <p>662 520 3388</p>
                        </li>

                        <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                            <p>casaenlace.sen.bours@hotmail.com</p>
                        </li>

                        

                    </ul>
                </div>
                <!--Grid column-->

            </div>
        </div>
    </div>
</div>