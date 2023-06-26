<!-- HEADER PEGADIZO -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var showHeaderAt = 80;
        var win = $(window),
            body = $('body');

        // Show the fixed header only on larger screen devices
        if (win.width() > 600) {

            // When we scroll more than 150px down, we set the
            // "fixed" class on the body element.
            win.on('scroll', function(e) {
                if (win.scrollTop() > showHeaderAt) {
                    body.addClass('fixed');
                } else {
                    body.removeClass('fixed');
                }
            });
        }
    });

    function verCollapse(id, collapseId, iconId) {
        var collaId = document.getElementById(collapseId);
        var iconDow = document.getElementById(iconId);
        collaId.classList.toggle("collapse-show");
        iconDow.classList.toggle("icon-chevron-up");
    }
    var isOpen = false;
    var isO2 = false;
    var hearF = document.querySelector(".header-fixed-tool");
    var services = document.getElementById("services");


    function verModal() {
        if (isO2) {
            hearF.style.display = "none";
            hearF.style.pointerEvents = "none";

        } else {
            hearF.style.display = "flex";
            hearF.style.pointerEvents = "auto";
        }
        isO2 = !isO2;

    }

    function verService() {

        var arriba = document.getElementById("arriba");
        var labelBurguer = document.getElementById("label-burguer");

        if (isOpen) {
            services.style.pointerEvents = "auto";
            arriba.classList.remove("content-added");
            services.classList.remove("active-services");
        } else {
            services.classList.add("active-services");
            arriba.classList.add("content-added");
            services.style.pointerEvents = "auto";
        }

        isOpen = !isOpen;

    }
</script>




<!-- NAVEGADOR -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery.smartmenus/1.0.1/jquery.smartmenus.js'></script>
<script src="js/navegador.js"></script>