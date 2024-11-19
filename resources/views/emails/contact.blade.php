<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Welcome to Our Platform</title>
    <style>
        /* Inline styles for simplicity, consider using CSS classes for larger templates */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f1f1f1;
        }

        .logo {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo img {
            max-width: 200px;
        }

        .message {
            padding: 20px;
            background-color: #ffffff;
        }

        .message p {
            margin-bottom: 10px;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
        }
    </style>
</head>

<body>
<div class="container">

    <div class="message">
        <h4>Landing Pages</h4>
        <table>
            <tr>
                <td>Nombre: </td>
                <td>{{ $data['name'] ?? 'name' }}</td>
            </tr>
            <tr>
                <td>Email: </td>
                <td>{{ $data['email'] ?? 'email'}}</td>
            </tr>
            <tr>
                <td>Teléfono: </td>
                <td>{{ $data['phone'] ?? 'phone' }}</td>
            </tr>
            <tr>
                <td>Mensaje: </td>
                <td>{{ $data['message'] ?? 'message' }}</td>
            </tr>
        </table>

    </div>

</div>
</body>

</html>
