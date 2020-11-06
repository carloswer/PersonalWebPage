<div class="container-fluid" style="margin-top:150px; margin-bottom: 150px;">

    <div class="row">
        <div class="col-lg-1">
        </div>
        <div class="col-lg-10">
            <!--Section heading-->
            <h2
                class="h1-responsive font-weight-bold text-center my-4 animate__animated animate__bounce animate__fadeInDown">
                Galeria</h2>

            <div class="row">
                <div class="col-lg-4">
                    <div class="photo-split">
                        <a href="#">
                            <img src="assets/images/galeria/1.jpg" onClick="sendimg(this);" alt="..." height="200px"
                                class="img-fluid rounded"></a>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/2.jpg" onClick="sendimg(this);" id="img_2" alt="..."
                            height="200px" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/3.jpg" onClick="sendimg(this);" id="img_3" alt="..."
                            height="200px" class="img-fluid rounded">
                    </div>
                </div>

            </div>
            <br>
            <div class="row">

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/4.jpg" onClick="sendimg(this);" id="img_4" alt="..."
                            height="200px" class="img-fluid rounded">
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/5.jpg" onClick="sendimg(this);" id="img_5" alt="..."
                            height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/6.jpg" onClick="sendimg(this);" id="img_6" alt="..."
                            height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

            </div>
            <br>
            <div class="row">
                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/7.jpg" onClick="sendimg(this);" id="img_7" alt="..."
                            height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/8.jpg" onClick="sendimg(this);" id="img_8" alt="..."
                            height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="photo-split">
                        <img src="assets/images/galeria/9.jpg" onClick="sendimg(this);" id="img_9" alt="..."
                            height="200px" class=" img-fluid rounded">
                        <figcaption> Example </figcaption>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<!-- The Modal -->
<!-- <div id="myModal" class="modal">
    
    <img class="modal-content" id="imagen_Id">
    <div id="caption"></div>
</div> -->


<div id="myModal" class="modal">
    <img class="modal-content" style="position:relative;" id="imagen_Id">
    <div id="caption"></div>
</div>


<script>
var modal = document.getElementById("myModal");
var modalImg = document.getElementById("imagen_Id");
var captionText = document.getElementById("caption");

function sendimg(a) {
    modal.style.display = "block";
    modalImg.src = a.src;
    captionText.innerHTML = a.alt;
}

function closeModal(a) {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    console.log("Modal:" + modal.style);
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

// var span = document.getElementsByClassName("close")[0];

// span.onclick = function() {
//     modal.style.display = "none";
// }
</script>