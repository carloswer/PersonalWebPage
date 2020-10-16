<?php 
    $prop = isset($_GET['Id']) ? strtolower($_GET['Id']) : 'prop_1';
    
    //header("Location: inciativas.php?.$prop.");
    
    

?>



<div class="row">
    <div class="container">

        <div class="row" style="margin-top: 150px; " id="Id_1r">
            <div class="col">
                <h1 class="mbr-section-title mbr-fonts-style mbr-light display-2">
                    <?php 
                echo "<h1>Hola</h1>".$prop
                ?> </h1>
                <!-- <h2 class="mbr-section-subtitle mbr-fonts-style mbr-light display-5">Empresario y Senador por Sonora
                </h2> -->
                <h3 class="mbr-text mbr-fonts-style mbr-light display-7">
                    62. Del Sen. Arturo Bours Griffith, del Grupo Parlamentario Morena, con proyecto de decreto por el
                    que se reforma y adiciona el artículo 19 de la Constitución Política de los Estados Unidos
                    Mexicanos. </br>

                    SE DIO EL TURNO DIRECTO A LAS COMISIONES UNIDAS DE PUNTOS CONSTITUCIONALES; Y DE ESTUDIOS
                    LEGISLATIVOS, SEGUNDA DE LA CÁMARA DE SENADORES. </br>

                    Fecha de publicación: Miércoles 19 de agosto de 2020
                </h3>
            </div>
        </div>

        <div class="row" style="margin-top: 150px; " id="prop_2">
            <div class="col">
                <h1 class="mbr-section-title mbr-fonts-style mbr-light display-2"> Iniciativas de Ciudadanos
                    Legisladores </h1>
                <!-- <h2 class="mbr-section-subtitle mbr-fonts-style mbr-light display-5">Empresario y Senador por Sonora
                </h2> -->
                <h3 class="mbr-text mbr-fonts-style mbr-light display-7">
                    62. Del Sen. Arturo Bours Griffith, del Grupo Parlamentario Morena, con proyecto de decreto por el
                    que se reforma y adiciona el artículo 19 de la Constitución Política de los Estados Unidos
                    Mexicanos. </br>

                    SE DIO EL TURNO DIRECTO A LAS COMISIONES UNIDAS DE PUNTOS CONSTITUCIONALES; Y DE ESTUDIOS
                    LEGISLATIVOS, SEGUNDA DE LA CÁMARA DE SENADORES. </br>

                    Fecha de publicación: Miércoles 19 de agosto de 2020
                </h3>
            </div>
        </div>

        <div class="row" style="margin-top: 150px; " id="prop_3">
            <div class="col">
                <h1 class="mbr-section-title mbr-fonts-style mbr-light display-2"> Iniciativas de Ciudadanos
                    Legisladores </h1>
                <!-- <h2 class="mbr-section-subtitle mbr-fonts-style mbr-light display-5">Empresario y Senador por Sonora
                </h2> -->
                <h3 class="mbr-text mbr-fonts-style mbr-light display-7">
                    62. Del Sen. Arturo Bours Griffith, del Grupo Parlamentario Morena, con proyecto de decreto por el
                    que se reforma y adiciona el artículo 19 de la Constitución Política de los Estados Unidos
                    Mexicanos. </br>

                    SE DIO EL TURNO DIRECTO A LAS COMISIONES UNIDAS DE PUNTOS CONSTITUCIONALES; Y DE ESTUDIOS
                    LEGISLATIVOS, SEGUNDA DE LA CÁMARA DE SENADORES. </br>

                    Fecha de publicación: Miércoles 19 de agosto de 2020
                </h3>
            </div>
        </div>

        <div class="row" style="margin-top: 150px; " id="div_id_1">
            <div class="col">
                <h1 class="mbr-section-title mbr-fonts-style mbr-light display-2"> Iniciativas de Ciudadanos
                    Legisladores </h1>
                <!-- <h2 class="mbr-section-subtitle mbr-fonts-style mbr-light display-5">Empresario y Senador por Sonora
                </h2> -->
                <h3 class="mbr-text mbr-fonts-style mbr-light display-7">
                    62. Del Sen. Arturo Bours Griffith, del Grupo Parlamentario Morena, con proyecto de decreto por el
                    que se reforma y adiciona el artículo 19 de la Constitución Política de los Estados Unidos
                    Mexicanos. </br>

                    SE DIO EL TURNO DIRECTO A LAS COMISIONES UNIDAS DE PUNTOS CONSTITUCIONALES; Y DE ESTUDIOS
                    LEGISLATIVOS, SEGUNDA DE LA CÁMARA DE SENADORES. </br>

                    Fecha de publicación: Miércoles 19 de agosto de 2020
                </h3>
            </div>
        </div>
    </div>
</div>

<script>
$(window).load(function() {
    $('html,body').animate({
        scrollTop: $('#<?php echo $_GET['Id'];  ?>').offset().top - 100
    }, 'slow');
});
</script>