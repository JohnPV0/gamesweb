<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Factura</title>
    <style>
        /* Estilos CSS para el PDF */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #F5F5F5;
            padding: 20px;
            border: 1px solid #DDD;
        }

        .header {
            text-align: center;
            margin-bottom: 20px;
        }

        .title {
            font-size: 24px;
            margin-bottom: 10px;
        }

        .subtitle {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        .table th,
        .table td {
            border: 1px solid #DDD;
            padding: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Recibo de compra en GamesWeb</h1>
            <h2 class="subtitle">Detalles de la venta</h2>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Juego</th>
                    <th>Plataforma</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Subtotal</th>
                    <th>IVA</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($detalle_venta as $detalle)
                    <tr>
                        <td>{{ $detalle->juegos->nombre }}</td>
                        <td>{{ $detalle->plataformas->nombre }}</td>
                        <td>{{ $detalle->cantidad }}</td>
                        <td>{{ $detalle->precio_venta }}</td>
                        <td>{{ $venta->subtotal }}</td>
                        <td>{{ $venta->iva }}</td>
                        <td>{{ $detalle->cantidad * $detalle->precio_venta }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <p>Total: {{ $venta->total }}</p>
        </div>
    </div>
</body>
</html>
