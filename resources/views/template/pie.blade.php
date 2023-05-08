</div>
</div>
</div>
</div>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

                    <br>Design: <a href="https://templatemo.com" target="_blank"
                        title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com"
                        target="_blank">ThemeWagon</a>
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- Scripts -->
<!-- Bootstrap core JavaScript -->
<script src=" {{ asset('estilos/vendor/jquery/jquery.min.js') }}"></script>
<script src=" {{ asset('estilos/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<script src=" {{ asset('estilos/assets/js/isotope.min.js') }}"></script>
<script src=" {{ asset('estilos/assets/js/owl-carousel.js') }}"></script>
<script src=" {{ asset('estilos/assets/js/tabs.js') }}"></script>
<script src=" {{ asset('estilos/assets/js/popup.js') }}"></script>
<script src=" {{ asset('estilos/assets/js/custom.js') }}"></script>

<script>
$(document).ready(function() {

    $('#respuesta').hide();
    $('#mensaje-carrito').hide();

    let ocultar = obtenerParametro('ocultar');
    if (ocultar == 0) {
        $('#pc').hide();
    }

    $('#buscar').on('click', function(event) {
            event.preventDefault(); // Evita que el enlace abra una nueva página
            
            $('#searchText').focus(); // Enfoca en el input
    });

});

function cargarEntidades(id_pais) {
    $('#id_entidad').empty();
    $('#municipio_id').empty();
    let ruta = "{{ asset('cargar_entidades') }}/" + id_pais;
    $.ajax({
        type: 'GET',
        url: ruta,
        success: function(data) {
            $('#id_entidad').append('<option value="">Seleccionar ...</option>');
            $.each(data, function(i, value) {
                $('#id_entidad').append('<option value="' + value.id + '">' + value.nombre +
                    '</option>');
            });
        }
    })
}

function cargarMunicipios(id_entidad) {
    $('#municipio_id').empty();
    let ruta = "{{ asset('cargar_municipios') }}/" + id_entidad;
    $.ajax({
        type: 'GET',
        url: ruta,
        success: function(data) {
            $('#municipio_id').append('<option value="">Seleccionar ...</option>');
            $.each(data, function(i, value) {
                $('#municipio_id').append('<option value="' + value.id + '">' + value.nombre +
                    '</option>');
            });
        }
    })
}


function obtenerParametro(nombre) {
    var url = window.location.search.substring(1);
    var variables = url.split('&');
    for (var i = 0; i < variables.length; i++) {
        var nombreVariable = variables[i].split('=');
        if (nombreVariable[0] == nombre) {
            return nombreVariable[1];
        }
    }
    return null;
}

function mostrar(id) {
    if (id == 5) {
        $('#pc').show();
    } else {
        $('#pc').hide();
    }
}

function agregarCarrito(id_juego, id_plataforma)
    {
        event.preventDefault();
        let ruta = "{{ asset('agregar_carrito') }}/"+id_juego+"/"+id_plataforma;
        $.ajax({
            type: "GET",
            url: ruta,
            success: function (data) {
                $("#respuesta").html(data);
                $("#respuesta").show();
                setTimeout(function(){
                    $("#respuesta").hide();
                }, 4000);
                $('html, body').animate({
                    scrollTop: $('#banner').offset().top
                }, 1000); // La duración de la animación en milisegundos (en este caso, 1 segundo) // 3000 milisegundos = 3 segundos
            },
            error: function (data) {
                console.log('Error:', data['error']);
            }
        });
    }
</script>

</body>

</html>