<!DOCTYPE html>
<html>

<head>
    <title>Devis: Décennale Express</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .email-container {
            max-width: 800px;
            margin: 20px auto;
            background: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 10px;
        }

        .header h1 {
            margin: 0;
            font-size: 24px;
        }

        .content {
            padding: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table th, table td {
            text-align: left;
            padding: 10px;
        }

        table th {
            background-color: #4CAF50;
            color: white;
        }

        table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        table tr:nth-child(odd) {
            background-color: #ffffff;
        }

        a {
            color: #4CAF50;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .footer {
            background-color: #f1f1f1;
            text-align: center;
            padding: 10px 20px;
            color: #555;
            font-size: 12px;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <div class="header">
            <h1>Devis: Décennale Express</h1>
        </div>
        <div class="content">
            <table>
                <tr>
                    <th>Profession</th>
                    <td>{{ $details['step1']['profession'] }}</td>
                </tr>
                <tr>
                    <th>Num de SIREN</th>
                    <td>{{ $details['step1']['siren'] }}</td>
                </tr>
                <tr>
                    <th>Entreprise</th>
                    <td>{{ $details['step2']['nom_entreprise'] }}</td>
                </tr>
                <tr>
                    <th>Type</th>
                    <td>{{ $details['step2']['type'] }}</td>
                </tr>
                <tr>
                    <th>Adresse</th>
                    <td>{{ $details['step2']['adresse'] }}</td>
                </tr>
                <tr>
                    <th>Code Postal</th>
                    <td>{{ $details['step2']['code_postal'] }}</td>
                </tr>
                <tr>
                    <th>Ville</th>
                    <td>{{ $details['step2']['ville'] }}</td>
                </tr>
                <tr>
                    <th>Mobile</th>
                    <td>{{ $details['step2']['mobile'] }}</td>
                </tr>
                <tr>
                    <th>Mail</th>
                    <td><a href="mailto:{{ $details['step2']['mail'] }}">{{ $details['step2']['mail'] }}</a></td>
                </tr>
                <!-- Add more rows as needed -->
            </table>
        </div>
        <div class="footer">
            &copy; 2025 Décennale Express. Tous droits réservés.
        </div>
    </div>
</body>

</html>
