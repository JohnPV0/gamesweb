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
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
$(document).ready(function() {

    $('#respuesta').hide();
    $('#mensaje-carrito').hide();
    $('#cancel-search').hide();
    let ocultar = obtenerParametro('ocultar');
    if (ocultar == 0) {
        $('#pc').hide();
    }

    $('#buscar').on('click', function(event) {
        event.preventDefault(); // Evita que el enlace abra una nueva página

        $('#searchText').focus(); // Enfoca en el input
    });

    var originalScreen = $('#search-juegos').html(); // Guardar la pantalla anterior

    $('#searchText').on('keydown', function() {
         // Evita que el enlace abra una nueva página
        if (event.keyCode == 13) {
            event.preventDefault();
            var keyword = $(this).val().trim(); // Obtener el valor del campo de entrada
            
            if (keyword.trim().length === 0) {
                $('#search-juegos').html(originalScreen);
                $('#cancel-search').hide();	
                return;
            }
            url = "{{ asset('search') }}/" + keyword;
            // Realizar la solicitud AJAX
            $.ajax({
                url: url, // Reemplaza con la ruta correcta a tu script de búsqueda en la base de datos
                method: 'GET', // Enviar la palabra clave como datos en la solicitud
                
                success: function(response) {
                    console.log(url);
                    console.log(response);
                    $('#cancel-search').show();	
                    $('#search-juegos').html(response);
                },
                error: function(xhr, status, error) {
                    // Manejar los errores de la solicitud aquí
                    console.log(error);
                }
            });
        }
            
    });

    $('#cancel-search').on('click', function() {
        // Mostrar la pantalla original y ocultar el contenedor de cancelar
        $('#search-juegos').html(originalScreen); // Reemplaza '#content' con el selector correcto de tu contenedor principal
        $('#cancel-search').hide();
        $('#searchText').val('');
    });

    $('#buscar').on('click', function(event) {
        event.preventDefault(); // Evitar el comportamiento predeterminado del enlace

        // Establecer el foco en el campo de entrada deseado
        $('#searchText').focus(); // Reemplaza '#searchText' con el selector correcto de tu campo de entrada
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
            $('#municipio_id').append('<option value="">Seleccionar ...</option>');
            $.each(data, function(i, value) {
                $('#id_entidad').append('<option value="' + value.id + '">' + value.nombre +
                    '</option>');
            });
        },
        error: function(data) {
            $('#id_entidad').append('<option value="">Seleccionar ...</option>');
            $('#municipio_id').append('<option value="">Seleccionar ...</option>');
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
        }, 
        error: function(data) {
            $('#municipio_id').append('<option value="">Seleccionar ...</option>');
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

function agregarCarrito(id_juego, id_plataforma) {
    event.preventDefault();
    let ruta = "{{ asset('agregar_carrito') }}/" + id_juego + "/" + id_plataforma;
    $.ajax({
        type: "GET",
        url: ruta,
        success: function(data) {
            $("#respuesta").html(data);
            $("#respuesta").show();
            setTimeout(function() {
                $("#respuesta").hide();
            }, 4000);
            $('html, body').animate({
                scrollTop: $('#respuesta').offset().top
            },
            100); // La duración de la animación en milisegundos (en este caso, 1 segundo) // 3000 milisegundos = 3 segundos
        },
        error: function(data) {
            window.location.href = "{{ asset('login') }}";
        }
    });
}

</script>
<script>
    
$(document).ready(function() {
    // Obtener los datos mediante AJAX
    $.ajax({
        url: '{{ asset("ventas_last_week") }}', // Reemplaza con la ruta correcta a tu script que obtiene los datos de la base de datos
        method: 'GET',
        success: function(response) {
            // Manejar los datos obtenidos de la base de datos aquí
            // Aquí puedes llamar a una función que cree el gráfico utilizando los datos obtenidos
            createChart(response);
        },
        error: function(xhr, status, error) {
            // Manejar los errores de la solicitud aquí
            console.log(error);
        }
    });

    $.ajax({
        url: '{{ asset("juegos_mas_vendidos") }}', // Reemplaza con la ruta correcta a tu script que obtiene los datos de la base de datos
        method: 'GET',
        success: function(response) {
            // Manejar los datos obtenidos de la base de datos aquí
            // Aquí puedes llamar a una función que cree el gráfico utilizando los datos obtenidos
            juegos_mas_vendidos(response);
        },
        error: function(xhr, status, error) {
            // Manejar los errores de la solicitud aquí
            console.log(error);
        }
    });

    $.ajax({
        url: '{{ asset("usuarios_mas_compras") }}', // Reemplaza con la ruta correcta a tu script que obtiene los datos de la base de datos
        method: 'GET',
        success: function(response) {
            // Manejar los datos obtenidos de la base de datos aquí
            // Aquí puedes llamar a una función que cree el gráfico utilizando los datos obtenidos
            usuarios_mas_compras(response);
        },
        error: function(xhr, status, error) {
            // Manejar los errores de la solicitud aquí
            console.log(error);
        }
    });
});

function createChart(data) {
    var ctx = document.getElementById('ventas-last-week').getContext('2d');
    
    // Crear un nuevo gráfico
    var myChart = new Chart(ctx, {
        type: 'line', // Tipo de gráfico (puedes cambiarlo según tus necesidades)
        data: {
            labels: data.labels, // Etiquetas para el eje X (pueden ser nombres de categorías, fechas, etc.)
            datasets: [{
                label: 'Ventas', // Etiqueta de la serie de datos
                data: data.values, // Valores de la serie de datos
                backgroundColor: 'rgba(0, 123, 255, 0.5)' // Color de fondo de las barras (puedes personalizarlo)
            }]
        },
        options: {
            responsive: true, // Hacer el gráfico responsive
            // Otras opciones de personalización del gráfico
        }
    });
}

function juegos_mas_vendidos(data) {
    var ctx = document.getElementById('juegos-vendidos').getContext('2d');
    
    // Crear un nuevo gráfico
    var myChart = new Chart(ctx, {
        type: 'bar', // Tipo de gráfico (puedes cambiarlo según tus necesidades)
        data: {
            labels: data.labels, // Etiquetas para el eje X (pueden ser nombres de categorías, fechas, etc.)
            datasets: [{
                label: 'Cantidad', // Etiqueta de la serie de datos
                data: data.values, // Valores de la serie de datos
                backgroundColor: 'rgba(0, 123, 255, 0.5)' // Color de fondo de las barras (puedes personalizarlo)
            }]
        },
        options: {
            responsive: true, // Hacer el gráfico responsive
            // Otras opciones de personalización del gráfico
        }
    });
}

function usuarios_mas_compras(data) {
    var ctx = document.getElementById('usuarios-compras').getContext('2d');
    
    // Crear un nuevo gráfico
    var myChart = new Chart(ctx, {
        type: 'bar', // Tipo de gráfico (puedes cambiarlo según tus necesidades)
        data: {
            labels: data.labels, // Etiquetas para el eje X (pueden ser nombres de categorías, fechas, etc.)
            datasets: [{
                label: 'No. ventas', // Etiqueta de la serie de datos
                data: data.values, // Valores de la serie de datos
                backgroundColor: 'rgba(0, 123, 255, 0.5)' // Color de fondo de las barras (puedes personalizarlo)
            }]
        },
        options: {
            responsive: true, // Hacer el gráfico responsive
            // Otras opciones de personalización del gráfico
        }
    });
}

</script>
</body>

</html>