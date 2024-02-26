<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table with HTML and CSS</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        caption {
            font-weight: bold;
            font-size: 1.2em;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <br><br>
    <table style="width:90% !important; margin:auto;">
        <caption>Complaints</caption>
        <thead>
            <tr>
                <th>CID</th>
                <th>Name</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Person</th>
                <th>Method</th>

            </tr>
        </thead>
        <tbody>
            <tr>
                <td>1</td>
                <td>John Doe</td>
                <td>Internet Issue</td>
                <td>The internet connection is very slow.</td>
                <td>Customer</td>
               <td > <a href=""><button>Done</button></a></td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jane Smith</td>
                <td>Payment Error</td>
                <td>There was an error while processing my payment.</td>
                <td>Client</td>
               <td > <a href=""><button>Done</button></a></td>

            </tr>
            <tr>
                <td>3</td>
                <td>Michael Johnson</td>
                <td>Product Quality</td>
                <td>The quality of the product received is not satisfactory.</td>
                <td>Consumer</td>
               <td > <a href=""><button>Done</button></a></td>

            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</body>
</html>
