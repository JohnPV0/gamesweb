<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Reporte de Ventas</title>
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

        .footer {
            text-align: right;
            margin-top: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1 class="title">Reporte de Ventas</h1>
            <h2 class="subtitle">Periodo: {{ $fechaInicio }} - {{ $fechaFin }}</h2>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>ID Venta</th>
                    <th>Fecha</th>
                    <th>Cliente</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ventas as $venta)
                    <tr>
                        <td>{{ $venta->id }}</td>
                        <td>{{ $venta->fecha }}</td>
                        <td>{{ $venta->id_cliente }}</td>
                        <td>${{ $venta->total }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="footer">
            <p>Total de ventas: {{ count($ventas) }}</p>
        </div>
    </div>
</body>
</html>
