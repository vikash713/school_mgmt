<!DOCTYPE html>
<html>
<head>
    <title>DISPLAY</title>
    <style>
        body {
            background-color: #53b6e1;
            font-family: Arial, sans-serif;
        }
        table {
            background-color: aliceblue;
            border-collapse: collapse;
            width: 90%;
            margin: 0 auto;
        }
        th, td {
            border: 3px solid #000;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        h2 {
            text-align: center;
        }
        mark {
            background-color: #ffff00;
            color: #000;
        }
    </style>
</head>
<body>
    <h2><mark>Displaying Teachers Details</mark></h2>
    <table>
        <tr>
            <th width="5%">Sl</th>
            <th width="10%">Course Name</th>
            <th width="10%">Duration</th>
            <th width="10%">Total FEE</th>
            
        </tr>
        <!-- Example static row -->
        <tr>
            <td>1</td>
            <td>php</td>
            <td>3 months</td>
            <td>3000</td>
            
            <td>
                <a href="update_design.html?result={&quot;Id&quot;:1,&quot;fname&quot;:&quot;John&quot;,&quot;lname&quot;:&quot;Doe&quot;,&quot;password&quot;:&quot;password123&quot;,&quot;gender&quot;:&quot;Male&quot;,&quot;email&quot;:&quot;john.doe@example.com&quot;,&quot;phone&quot;:&quot;(123) 456-7890&quot;,&quot;address&quot;:&quot;123 Elm Street&quot;}">
                    Update
                </a>
            </td>
        </tr>
        <!-- Add more rows as needed -->
    </table>
</body>
</html>
