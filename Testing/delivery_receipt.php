<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Documentation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa; /* Light gray background */
        }
        h2 {
            color: #2e7d32; /* Dark green color for headers */
            font-weight: bold;
        }
        .content-section {
            background-color: #ffffff; /* White background for content */
            border: 1px solid #dee2e6; /* Light gray border */
            border-radius: 0.25rem; /* Rounded corners */
            padding: 20px; /* Padding for content */
            margin-bottom: 20px; /* Spacing between sections */
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,.075); /* Subtle shadow */
        }
        table {
            width: 100%; /* Full width for the table */
        }
        th {
            background-color: #e8f5e9; /* Light green background for headers */
            color: #2e7d32; /* Dark green text */
        }
        td {
            color: #495057; /* Dark gray for regular text */
        }
        .btn-back {
            background-color: #2e7d32; /* Dark green */
            color: white;
            margin-bottom: 20px;
        }
        .btn-back:hover {
            background-color: #1b5e20; /* Darker green on hover */
        }
        .section-title {
            border-bottom: 2px solid #2e7d32; /* Dark green underline */
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container mt-4">
        <a href="index.php" class="btn btn-back">Back to Main Menu</a>
        <h2>Sales Documentation</h2>
        
        <div class="content-section">
            <h4 class="section-title">Overview</h4>
            <p>Sales involve the process of selling goods or services to customers. This documentation outlines the data structure and related processes.</p>
        </div>

        <div class="content-section">
            <h4 class="section-title">Data Structure</h4>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Field</th>
                        <th>Type</th>
                        <th>Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Sales ID</td>
                        <td>Integer</td>
                        <td>Unique identifier for each sale transaction.</td>
                    </tr>
                    <tr>
                        <td>Customer ID</td>
                        <td>Integer</td>
                        <td>Identifier for the customer involved in the sale.</td>
                    </tr>
                    <tr>
                        <td>Sales Date</td>
                        <td>Date</td>
                        <td>Date the sale was made.</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>Decimal</td>
                        <td>The total cost of the sale.</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="content-section">
            <h4 class="section-title">Related Processes</h4>
            <ul>
                <li>Order Processing</li>
                <li>Invoice Generation</li>
                <li>Payment Collection</li>
            </ul>
        </div>
    </div>
</body>
</html>
