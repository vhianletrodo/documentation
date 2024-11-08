<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sales Documentation</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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

        .centered-table {
            width: 50%;           /* Set table width to 60% */
            margin: 0 auto;      /* Center the table horizontally */
        }

        /* Footer Styling */
        footer {
            background-color: #e8f5e9; /* Light green, complements the content sections */
            color: #2e7d32; /* Dark green text for contrast */
            padding: 15px 0; /* Vertical padding */
            text-align: center; /* Centered text */
            font-size: 0.9rem;
            position: relative; /* Allow footer to sit below content */
            bottom: 0; /* Align to the bottom */
            left: 0; /* Align to the left */
            right: 0; /* Extend to the right */
            margin-top: 20px; /* Spacing above footer */
        }

        footer p {
            margin: 0; /* Remove default margin for compact layout */
        }

        footer a {
            color: #2e7d32; /* Dark green links */
            text-decoration: none; /* No underline */
            font-weight: bold;
        }

        footer a:hover {
            color: #627d4d; /* Dark green on hover */
            text-decoration: underline;
        }
        .red-text {
        color: red !important;
        }
        .custom-bg {
        background-color: #e8f5e9 !important; /* light color */
        }

        .responsive-img {
         max-width: 100%; /* Image will not exceed the container's width */
         height: auto; /* Maintains the aspect ratio */
            }

            .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.8); /* Black w/ opacity */
            padding-top: 60px; /* Position the modal content */
        }

        /* Modal Content */
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgba(0, 0, 0, 0.8); /* Black w/ opacity */
            padding-top: 60px; /* Position the modal content */
        }

        /* Modal Content */
        .modal-content {
            margin: auto;
            display: block;
            width: 50%; /* Set width to 50% of the viewport */
            max-width: 700px; /* Maximum width */
            height: auto; /* Maintain aspect ratio */
        }

        /* Close button */
        .close {
            position: absolute;
            top: 20px;
            right: 30px;
            color: #fff;
            font-size: 30px;
            font-weight: bold;
            cursor: pointer;
        }

        .close:hover {
            color: #bbb;
        }

        .center-text {
        text-align: center;
        }

        ul{
            list-style-type: none;
        }




        
    </style>
</head>
<body>
    <div class="container mt-4">
        <a href="index.php" class="btn btn-back">Back to Main Menu</a>
        <h2>Sales Order Documentation</h2>
        
        <div class="content-section">
            <h4 class="section-title">Overview</h4>
            <p>Sales involve the process of selling goods or services to customers. This documentation outlines the data structure and related processes.</p>
        </div>

        <div class="content-section">
            <h4 class="section-title">1. Document the method of saving inputs on a field-by-field basis.</h4>
            <table class="table table-bordered centered-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>salesorderfile1</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="custom-bg"><strong>UI Label</strong></td>
                        <td class="custom-bg"><strong>Field Name</strong></td>
                    </tr>
                    <tr>
                        <td>Doc. No.</td>
                        <td>docnum</td>
                    </tr>
                    <tr>
                        <td>Date</td>
                        <td>trndte</td>
                    </tr>
                    <tr>
                        <td>User</td>
                        <td>usrnam</td>
                    </tr>
                    <tr>
                        <td>Customer Name</td>
                        <td>cuscde</td>
                    </tr>
                    <tr>
                        <td>Ref No.</td>
                        <td>refnum</td>
                    </tr>
                    
                    <tr>
                        <td>Price List</td>
                        <td>prccde</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>cusadd1
                            cusadd2</td>
                    </tr>
                    <tr>
                        <td>Warehouse</td>
                        <td>wrcde</td>
                    </tr>
                    
                    <tr>
                        <td>Salesman</td>
                        <td>smncde</td>
                    </tr>
                    <tr>
                        <td>Ship To</td>
                        <td>shipto2</td>
                    </tr>
                    <tr>
                        <td>Terms</td>
                        <td>trmcde</td>
                    </tr>
                    <tr>
                        <td>Remarks</td>
                        <td>remarks</td>
                    </tr>
                    <tr>
                        <td>Prepared By</td>
                        <td>preby</td>
                    </tr>
                    <tr>
                        <td>Checked By</td>
                        <td>chkby</td>
                    </tr>
                    <tr>
                        <td>Approved By</td>
                        <td>apvby</td>
                    </tr>
                    <tr>
                        <td>Grand Total</td>
                        <td>trntot</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">recid</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">trncde</td>
                    </tr>
                    <tr>
                         <td class="red-text">N/A</td>
                         <td class="red-text">curcde</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">textprc</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">logtim</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">trntotfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">textprcfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">docapp</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">vatamtfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">netvatamtfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">vatableamtfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">netvatamt</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">totamtdis</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">totgroext</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">totamtdisfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">totgroextfor</td>
                    </tr>
                    <tr>
                    <td class="red-text">N/A</td>
                    <td class="red-text">duedate</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">duedate</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">logdte</td>
                    </tr>
                </tbody>
            </table>
            <br>
            <table class="table table-bordered centered-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>salesorderfile2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="custom-bg"><strong>UI Label</strong></td>
                        <td class="custom-bg"><strong>Field Name</strong></td>
                    </tr>
                    <tr>
                        <td >Blank</td>
                        <td >linenum</td>
                    </tr>
                    <tr>
                        <td>IC</td>
                        <td>dettyp</td>
                    </tr>
                    <tr>
                        <td >Item Number</td>
                        <td >N/A</td>
                    </tr>
                    <tr>
                        <td>Item Description</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Barcode</td>
                        <td>barcde</td>
                    </tr>
                    <tr>
                        <td>VAT Code</td>
                        <td>taxcde</td>
                    </tr>
                    <tr>
                        <td >QTY</td>
                        <td >itmqtyl</td>
                    </tr>
                    <tr>
                        <td>U/M</td>
                        <td>untmea</td>
                    </tr>
                    <tr>
                        <td >Selling Price</td>
                        <td >groprc</td>
                    </tr>
                    <tr>
                        <td >Discount Code</td>
                        <td>disccde</td>
                    </tr>
                    <tr>
                        <td>Discount Percentage</td>
                        <td>discper</td>
                    </tr>
                    <tr>
                        <td>Discount Amount</td>
                        <td>disamt</td>
                    </tr>
                    <tr>
                        <td>Net Price</td>
                        <td>untprc</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>prccde</td>
                    </tr>
                    <tr>
                        <td>Salesman</td>
                        <td>extprc</td>
                    </tr>
                    <tr>
                        <td>User</td>
                        <td>usrnam</td>
                    </tr>
                    <tr>
                        <td >Field 1</td>
                        <td >field01</td>
                    </tr>
                    <tr>
                        <td >Field 2</td>
                        <td >field02</td>
                    </tr>
                    <tr>
                        <td >Warehouse/td>
                        <td >warcde</td>
                    </tr>
                    <tr>
                        <td >VATable</td>
                        <td >netvatamt</td>
                    </tr>
                    <tr>
                        <td >VAT Exempt</td>
                        <td >N/A</td>
                    </tr>
                    <tr>
                        <td >VAT Zero Rated</td>
                        <td >N/A</td>
                    </tr>
                    <tr>
                        <td >VAT Amount</td>
                        <td >vatamt</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">docnum</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">cuscde</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">prccde</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">smncde</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">usrnam</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">logtim</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">discper</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">recid</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">itmcde</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">trncde</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">factor</td>
                    </tr>
                    <tr>
                        <td class="red-text">I/C</td>
                        <td class="red-text">logtim</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">curcde</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">currte</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">untprcfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">groprcfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">extprcfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">disper</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">extprcfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">itmtyp</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">netvatamtfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">vatamtfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">extprcfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">amtdis</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">groext</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">amtdisfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">groextfor</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">logdte</td>
                    </tr>
                    <tr>
                        <td class="red-text">N/A</td>
                        <td class="red-text">brhcde</td>
                    </tr>


                </tbody>
            </table>
        </div>

        <div class="content-section">
                <h4 class="section-title">2. Illustrate the connections between file1, file2, and related tables</h4>
            <div class="centered-image-container">
                <a href="">
                    <img src="./images/tablecon1.png" alt="tablecon" class="responsive-img">
                </a>
            </div>
        </div>



        <div class="content-section">
            <h4 class="section-title">3. Record all parameterized inputs</h4>
            <table class="table table-bordered centered-table" style="width: 100%; table-layout: fixed; font-size: 0.9em;">
                <thead>
                    <tr>
                        <th style="width:10%"></th>
                        <th style="width:10%">salesorderfile1</th>
                        <th style="width:20%"></th>
                        <th style="width:40%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="custom-bg"><strong>UI Label</strong></td>
                        <td class="custom-bg"><strong>Field Name</strong></td>
                        <td class="custom-bg"><strong>Condition</strong></td>
                        <td class="custom-bg"><strong>Code</strong></td>
                    </tr>
                   
                    <tr>
                        <td>Doc. No.</td>
                        <td>docnum</td>
                        <td>If chksodocnum is 0, you can manually enter a document number. <br>  <br>If it's not 0, the document number will be displayed as read-only, and it comes from the branchfile where the field is sodocnum.</td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/docnum.png" alt="docnum" class="responsive-img">
                                </a>
                            </div>
                        </td>                      
                    </tr>
                    <tr>
                        <td >Date</td>
                        <td >trndte</td>
                        <td>It will default to the current date if not set.</td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/trndte.png" alt="trndte" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>User</td>
                        <td>usrnam</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Customer Name</td>
                        <td>cuscde</td>
                        <td>It checks the customerfile for a match between cusdsc and $xcuscde.<br> If a match is found, it sets the values of $xcus_taxcde and $xcus_cusdsc. <br><br>If no match is found, $xcus_cusdsc is left empty.</td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/cuscde.png" alt="cuscde" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Ref No.</td>
                        <td>refnum</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Price List</td>
                        <td>prccde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Address</td>
                        <td>cusadd1 and cusadd2</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Warehouse</td>
                        <td>wrcde</td>
                        <td>If salwarheader is equal to '1', will allow the warehouse input in the header, and the warehouse selection will apply to all items. <br> <br>
                        If salwarheader is '0', will allow the warehouse selection per item<br> <br>
                    
                        If multi-warehouse mode is disabled form system parameters, you can select a different warehouse for each item, hide the warehouse input in the header. <br> <br> If it's enabled, all items will be assigned to the same warehouse, which is the default warehouse.
                    </td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/wrcde.png" alt="wrcde" class="responsive-img">
                                </a>
                            </div>
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/wrcde.png" alt="wrcde" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Salesman</td>
                        <td>smncde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Ship To</td>
                        <td>shipto2</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Terms</td>
                        <td>trmcde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Remarks</td>
                        <td>remarks</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Prepared By</td>
                        <td>preby</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Checked By</td>
                        <td>chkby</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Approved By</td>
                        <td>apvby</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>   
                    <tr>
                        <td>Grand Total</td>
                        <td>trntot</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>                                           
                </tbody>
            </table>

            <div id="myModal" class="modal">
                 <span class="close">&times;</span>
                <img class="modal-content" id="img01">
            </div>
            <br>
            <br>
            <table class="table table-bordered centered-table" style="width: 100%; table-layout: fixed; font-size: 0.9em;">
                <thead>
                    <tr>
                        <th style="width:10%"></th>
                        <th style="width:10%">salesordefile2</th>
                        <th style="width:20%"></th>
                        <th style="width:40%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="custom-bg"><strong>UI Label</strong></td>
                        <td class="custom-bg"><strong>Field Name</strong></td>
                        <td class="custom-bg"><strong>Condition</strong></td>
                        <td class="custom-bg"><strong>Code</strong></td>
                    </tr>
                    <tr>
                        <td>Blank</td>
                        <td>linenum</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    
                    <tr>
                        <td>IC</td>
                        <td>dettyp</td>
                        <td> The variable $xdettyp_hidden is enabled in the system parameters ($xrs_sys2) the element is visible; if not, it will be hidden. </td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/ic.png" alt="ic" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Item Number</td>
                        <td>N/A</td>
                        <td>The variable $xitemnumber_hidden  is enabled in the system parameters ($xrs_sys2) the element is visible; if not, it will be hidden. </td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/itemnum.png" alt="itemnum" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Item Description</td>
                        <td>N/A</td>
                        <td>The variable  $xby_item_srh_by  is enabled in the system parameters ($xrs_sys2) the element is visible; if not, it will be hidden. </td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/itemsearch2.png" alt="itemsearch2" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Barcode</td>
                        <td>barcde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>VAT Code</td>
                        <td>taxcde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>QTY</td>
                        <td>itmqtyl</td>
                        <td>
                            The variable  $xqtyround  is enabled in the system parameters ($xrs_sys2) $xqtyround is set to '2'.; if not, $xqtyround is set to '0'. 
                        </td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/qtyround.png" alt="qtyround" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>U/M</td>
                        <td>untmea</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Selling Price</td>
                        <td>groprc</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Discount Code</td>
                        <td>disccde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Discount Percentage</td>
                        <td>discper</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    <tr>
                        <td>Discount Amount</td>
                        <td>disamt</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Net Price</td>
                        <td>untprc</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>extprc</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    
                    <tr>
                        <td>Field 1</td>
                        <td>field01</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Field 2</td>
                        <td>field02</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Warehouse</td>
                        <td>warcde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    
                    <tr>
                        <td>VATable</td>
                        <td>netvatamt</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>VAT Exempt</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>VAT Zero Rated</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>VAT Amount</td>
                        <td>vatamt</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    
                   
                </tbody>
            </table>
        </div>
        
        <div class="content-section">
            <h4 class="section-title">4. Document all parameterized validation processes</h4>

            <table class="table table-bordered centered-table" style="width: 100%; table-layout: fixed; font-size: 0.9em;">
                <thead>
                    <tr>
                        <th style="width:10%"></th>
                        <th style="width:10%">salesorderfile1</th>
                        <th style="width:20%"></th>
                        <th style="width:40%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="custom-bg" ><strong>UI Label</strong></td>
                        <td class="custom-bg"><strong>Field Name</strong></td>
                        <td class="custom-bg"><strong>Purpose of Validation</strong></td>
                        <td class="custom-bg"><strong>Code</strong></td>
                    </tr>
                   
                    <tr>
                        <td>Doc. No.</td>
                        <td>docnum</td>
                        <td>
                            <p>Ensuring document numbers are not blank upholds data integrity and reliable operations.</p>
                            <ul style="list-style-type: none;">
                                <li>1. Unique Identification: Ensures easy reference and management of documents.</li>
                                <li>2. Data Consistency: Prevents inconsistencies and errors in data systems.</li>
                                <li>3. Audit and Compliance: Maintains audit trails and supports regulatory compliance.</li>
                                <li>4. Efficient Processing: Enables smooth indexing and processing in automated systems.</li>
                                <li>5. Error Prevention: Avoids issues like missing documents and incorrect data associations.</li>
                            </ul>
                        </td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container " >
                                <a class="openModal" style="cursor:pointer; ">
                                    <img src="./images/xdocnumval.png" alt="xdocnumval" class="responsive-img">
                                </a>
                            </div>
                        </td>                      
                    </tr>
                    <tr>
                        <td >Date</td>
                        <td >trndte</td>
                        <td>
                            <p>Overall, a non-blank transaction date ensures reliable data management and operational accuracy.</p>
                            <ul style="list-style-type: none;">
                                <li>1. Chronological Tracking: Proper sequencing of transactions for auditing and analysis.</li>
                                <li>2. Data Integrity: Prevents gaps that can cause inconsistencies or processing errors.</li>
                                <li>3. Compliance: Meets regulatory requirements for accurate documentation.</li>
                                <li>4. Efficient Processing: Enables smooth indexing and processing in automated systems.</li>
                                <li>5. Efficient Processing: Enables time-based queries and operations.</li>
                            </ul>
                        </td>
                        <td style="vertical-align: middle; text-align: center">
                            <div class="centered-image-container" style="vertical-align: middle; text-align: center; vertical-align: middle; text-align: center;">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/xvaldate.png" alt="xvaldate" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>User</td>
                        <td>usrnam</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Customer Name</td>
                        <td>cscde</td>
                        <td>
                            <p>In summary, a non-blank customer name supports clear identification, reliable records, and better customer interactions.</p>
                            <ul style="list-style-type: none;">
                                <li>1. Identification: Associates transactions or records with specific customers.</li>
                                <li>2. Data Integrity: Prevents incomplete records that can cause confusion or errors.</li>
                                <li>3. Customer Service: Enhances personalized service and communication.</li>
                                <li>4. Compliance: Meets documentation standards for audits and reporting.</li>
                            </ul>
                        </td>
                        <td style="vertical-align: middle; text-align: center">
                        <div class="centered-image-container" style="vertical-align: middle; text-align: center;">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/custval.png" alt="custval" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Ref No.</td>
                        <td>refnum</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Price List</td>
                        <td>prccde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Warehouse</td>
                        <td>cusadd1 and cusadd2</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Warehouse</td>
                        <td>warcde</td>
                        <td>
                            <p>In summary, a non-blank warehouse code is essential for precise location tracking and efficient inventory management.</p>
                            <ul style="list-style-type: none;">
                                <li>1. Location Identification: Accurately identifies specific storage locations.</li>
                                <li>2. Data Integrity: Maintains consistency in inventory and logistics systems..</li>
                                <li>3. Efficient Operations: Supports accurate stock tracking and fulfillment processes..</li>
                                <li>4. Error Prevention: Prevents issues in inventory management, such as misallocated or missing items.</li>
                            </ul>
                        </td>
                        <td style="vertical-align: middle; text-align: center;">
                            <div class="centered-image-container">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/wrcdeval.png" alt="wrcdeval" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Salesman</td>
                        <td>smncde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Ship To</td>
                        <td>shipto2</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Terms</td>
                        <td>trmcde</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Remarks</td>
                        <td>remarks</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Prepared By</td>
                        <td>preby</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Checked By</td>
                        <td>chkby</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Approved By</td>
                        <td>apvby</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr> 
                    <tr>
                        <td>Grand Total</td>
                        <td>trntot</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>    
                                                          
                </tbody>
            </table>

            

           
            <br>
            <br>
            <!--table class="table table-bordered centered-table">
                <thead>
                    <tr>
                        <th></th>
                        <th>salesorderfile2</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="custom-bg"><strong>UI Label</strong></td>
                        <td class="custom-bg"><strong>Field Name</strong></td>
                        <td class="custom-bg"><strong>Validation</strong></td>
                        <td class="custom-bg"><strong>Code</strong></td>
                    </tr>
                    <tr>
                        <td>Blank</td>
                        <td>linenum</td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td>IC</td>
                        <td>dettyp</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Item Number</td>
                        <td>N/A</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Item Description</td>
                        <td>N/A</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Barcode</td>
                        <td>barcde</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>VAT Code</td>
                        <td>taxcde</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>QTY</td>
                        <td>itmqtyl</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>U/M</td>
                        <td>untmea</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Selling Price</td>
                        <td>groprc</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Discount Code</td>
                        <td>disccde</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Discount Percentage</td>
                        <td>discper</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Discount Amount</td>
                        <td>disamt</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Net Price</td>
                        <td>untprc</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>extprc</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Field 1</td>
                        <td>field01</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Field 2</td>
                        <td>field02</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Warehouse</td>
                        <td>warcde</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>VATable</td>
                        <td>netvatamt</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>VAT Exempt</td>
                        <td>N/A</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>VAT Zero Rated</td>
                        <td>N/A</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>VAT Amount</td>
                        <td>vatamt</td>
                        <td></td>
                        <td></td>
                    </tr>
                   
                </tbody>
            </table-->
           
        </div>
        <div class="content-section">
            <h4 class="section-title">5. Log all computations executed</h4>
            <table class="table table-bordered centered-table" style="width: 100%; table-layout: fixed; font-size: 0.9em;">
                <thead>
                    <tr>
                        <th style="width:10%"></th>
                        <th style="width:10%" >salesorderfile2</th>
                        <th style="width:20%"></th>
                        <th style="width:40%"></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <td class="custom-bg"><strong>UI Label</strong></td>
                        <td class="custom-bg"><strong>Field Name</strong></td>
                        <td class="custom-bg"><strong>Computation</strong></td>
                        <td class="custom-bg"><strong>Code</strong></td>
                    </tr>
                    
                    <tr>
                        <td>Selling Price</td>
                        <td>groprc</td>
                        <td>Input Selling Price at  ₱500 </td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Discount Code</td>
                        <td>disccde</td>
                        <td>Apply PWD/SC Discount on Original VAT-inclusive Price (₱3,794.64):<br>
                           PWD Discount:<br>
                           ₱3,794.64 * (20 / 100) = ₱758.93<br><br>
                           Discounted price after PWD discount=₱3,794.64-₱758.93=₱3,035.71<br><br>

                           Re-add VAT to Obtain the Final Gross Price (if required):<br>
                           ₱3,035.71 * (12 / 100) = 364.29
                           Final Gross Price=₱3,035.71+₱364.29=₱4,241.07

                        </td>
                        <td>
                        <div class="centered-image-container" style="vertical-align: middle; text-align: center;">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/dispwd.png" alt="dispwd" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Discount Percentage</td>
                        <td>discper</td>
                        <td>The code retrieves the single discount percentage (5%) and applies it to the original sale price.
                        <br><br>
                        Selling: ₱500.00 <br>
                        Discount percentage: 5% <br><br>
                        5% off: ₱500.00 * (1 - 5/100) = ₱475.00 <br><br>
                        The discounted price after the 5% discount is ₱475.00.


                        </td>
                        <td>
                            <div class="centered-image-container" style="vertical-align: middle; text-align: center;">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/disper.png" alt="disper" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    <tr>
                        <td>Discount Amount</td>
                        <td>disamt</td>
                        <td>Input Discount Amount at ₱50</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>Net Price</td>
                        <td>untprc</td>
                        <td>Discounted price after percentage discount: ₱475.00<br>
                        <br>
                            Discounted Amount of ₱50.00<br><br>
                            The net price after the fixed discount is ₱425.00.
</td>
                        <td><div class="centered-image-container" style="vertical-align: middle; text-align: center;">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/netprc.png" alt="netprc" class="responsive-img">
                                </a>
                            </div></td>
                    </tr>
                    <tr>
                        <td>Total Amount</td>
                        <td>extprc</td>
                        <td>Net price: ₱425.00<br>
                            Quantity: 10<br><br>
                            ₱425.00 * 10 = ₱4,250.00<br><br>
                            The Total Amount for 10 items is ₱4,250.00.

                        </td>
                        <td>
                        <div class="centered-image-container" style="vertical-align: middle; text-align: center;">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/totalamount.png" alt="totalamount" class="responsive-img">
                                </a>
                            </div></td>
                        </td>
                    </tr>
                    
                    
                    <tr>
                        <td>VATable</td>
                        <td>netvatamt</td>
                        <td>Total Amount: ₱4,250.00<br>
                            VAT percentage: 12%<br><br>
                            ₱4,250.00 / (1 + 12/100) = ₱3,794.64 <br><br>
                            The VATable Amount is ₱3,794.64
                        </td>
                        <td>
                        <div class="centered-image-container" style="vertical-align: middle; text-align: center;">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/vatableamt.png" alt="vatableamt" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>VAT Exempt</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>VAT Zero Rated</td>
                        <td>N/A</td>
                        <td>N/A</td>
                        <td>N/A</td>
                    </tr>
                    <tr>
                        <td>VAT Amount</td>
                        <td>vatamt</td>
                        <td>₱4,250.00 - ₱3,794.64 = ₱455.36<br>
                        The VAT amount is ₱455.36.
                        </td>
                        <td>
                        <div class="centered-image-container" style="vertical-align: middle; text-align: center;">
                                <a class="openModal" style="cursor:pointer;">
                                    <img src="./images/vatamt.png" alt="vatamt" class="responsive-img">
                                </a>
                            </div>
                        </td>
                    </tr>
                   
                </tbody>
            </table>
        </div>
        <div class="content-section">
            <h4 class="section-title">6. Outline the structure of the database fields</h4>
            
            <div class="centered-image-container" style="vertical-align: middle; text-align: center;">
                <a href="">
                    <img src="./images/datafields2.png" alt="datafields2" class="responsive-img" style="width: 100%;">
                </a>
            </div>
        

        </div>
        <div class="content-section">
            <h4 class="section-title">7. Verify whether all entries include user activity logs</h4>
            <table class="table table-bordered centered-table" style="width: 100%">
                <thead>
                    <tr>
                        <th style="background-color: #2e7d32; color: white; vertical-align: middle; text-align: center;"><strong>Audit List</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Log Date</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Log Time</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>IP Address</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>User</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Module</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Activity</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Remarks</strong></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Edit the quanity of item <br> (coke in can from 10 - 20 pcs)</td>
                        <td>11/7/2024</td>
                        <td>15:27:27</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                    </tr>
                    <tr>
                        <td>Add Item <br> (Coke in can)</td>
                        <td>11/7/2024</td>
                        <td>15:25:29</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                    </tr>
                    <tr>
                        <td>Input Item <br> (Coke-Mismo)</td>
                        <td>11/7/2024</td>
                        <td>15:24:25</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                    </tr>
                    <tr>
                        <td>Edit the header <br> (Remarks) <br> (Prepared by) <br>  (Checked By) <br>  (Approved By) </td>
                        <td>11/7/2024</td>
                        <td>15:22:51</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                    </tr>
                    <tr>
                        <td>Create New SO</td>
                        <td>11/7/2024</td>
                        <td>15:20:29</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Add Sales Order</td>
                        <td>Add Sales Order : SO-0000043</td>
                    </tr>                                               
                </tbody>
            </table>

        </div>
        <div class="content-section">
            <h4 class="section-title">8. If user activity logs are present, evaluate their accuracy and completeness.</h4>
            <table class="table table-bordered centered-table" style="width: 100%">
                <thead>
                    <tr>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Log Date</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Log Time</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>IP Address</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>User</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Module</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Activity</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Remarks</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Log Date <br> (accurate)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Log Time <br> (accurate)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>IP Address <br> (accurate)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>User <br> (accurate)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Module <br> (accurate)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Activity <br> (accurate)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Remarks <br> (accurate)</strong></th>
                        

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:27:27</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:25:29</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:24:25</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:22:51</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:20:29</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Add Sales Order</td>
                        <td>Add Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>                                                 
                </tbody>
            </table>
            <br>
            <table class="table table-bordered centered-table" style="width: 100%; table-layout: fixed; font-size: 0.9em;">
                <thead>
                    <tr>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Log Date</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Log Time</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>IP Address</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>User</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Module</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Activity</strong></th>
                        <th class="custom-bg" style="vertical-align: middle; text-align: center;"><strong>Remarks</strong></th>
                        <th style="background-color: #2e7d32; color: white;" ><strong>Log Date <br> (complete)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Log Time <br> (complete)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>IP Address <br> (complete)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>User <br> (complete)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Module <br> (complete)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Activity <br> (complete)</strong></th>
                        <th style="background-color: #2e7d32; color: white;" style="vertical-align: middle; text-align: center;"><strong>Remarks <br> (complete)</strong></th>
                        

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:27:27</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:25:29</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:24:25</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:22:51</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td>Update Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>
                    <tr>
                        <td>11/7/2024</td>
                        <td>15:20:29</td>
                        <td>::1</td>
                        <td>admin</td>
                        <td>Sales Order File</td>
                        <td>Add Sales Order</td>
                        <td>Add Sales Order : SO-0000043</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td style="vertical-align: middle; text-align: center;">Y</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                        <td class="red-text" style="vertical-align: middle; text-align: center;">N</td>
                    </tr>                                                 
                </tbody>
            </table>
        </div>


        <div id="myModal" class="modal">
                 <span class="close">&times;</span>
                <img class="modal-content" id="img01">
    </div>

    <script>
            // Get the modal
            var modal = document.getElementById("myModal");
                var modalImg = document.getElementById("img01");
                
                // Get all elements with the class "openModal"
                var images = document.querySelectorAll('.openModal');

                // Loop through the images and attach the click event
                images.forEach(function(img) {
                    img.onclick = function() {
                        modal.style.display = "block"; // Show the modal
                        modalImg.src = this.querySelector('img').src; // Set the source of the clicked image
                    }
                });

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() { 
                    modal.style.display = "none"; // Hide the modal
                }

                // Close the modal when clicking outside of the image
                window.onclick = function(event) {
                    if (event.target == modal) {
                        modal.style.display = "none"; // Hide the modal
                    }
                }
            </script>
    </div>

    

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Sales Order Documentation. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
