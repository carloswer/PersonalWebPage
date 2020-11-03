<div class="container" style="margin-top:150px; margin-bottom: 150px;">

    <div class="row">
        <div class="col-lg-12" style="padding: 0px;">
            <!--Section heading-->
            <h2 class="h1-responsive font-weight-bold text-center my-4">Galeria</h2>

            <div class="row">

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/1.jpg" id="myImg" alt="..." alt="Ejemplo" height="200px" style="transition: width 2s;"
                            class=" img-fluid rounded zoom img">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/2.jpg" id="img_2" alt="..." height="200px" class=" img-fluid rounded">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/3.jpg" id="img_3" alt="..." height="200px" class=" img-fluid rounded">
                    </div>
                </div>

            </div>
            <br>
            <div class="row">

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/4.jpg" id="img_4" alt="..." height="200px" class=" img-fluid rounded">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/5.jpg" id="img_5" alt="..." height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/6.jpg" id="img_6" alt="..." height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

            </div>
            <br>
            <div class="row">

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/7.jpg" id="img_7" alt="..." height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/8.jpg" id="img_8" alt="..." height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/9.jpg" id="img_9" alt="..." height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="imagen_Id">
    <div id="caption"></div>
</div>

<script>
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("imagen_Id");
var captionText = document.getElementById("caption");

img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
</script>