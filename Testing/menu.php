<?php
// menu.php

// Define the menu structure
$menus = [
    "sales" => [
        "Sales Order" => "sales.php", 
        "Delivery Receipt" => "delivery_receipt.php", 
        "Delivery Receipt 2" => "delivery_receipt_2.php", 
        "Sales" => "sales.php", 
        "Cash Sales" => "cash_sales.php", 
        "DR Sales" => "dr_sales.php", 
        "Sales Return" => "sales_return.php"
    ],
    "receivables" => [
        "Other Receivables (AR Debit Memo)" => "other_receivables.php", 
        "Receipt Collections" => "receipt_collections.php", 
        "Receipt Collections Credit Memo" => "receipt_collections_credit_memo.php", 
        "2307 from Customer" => "form_2307.php", 
        "View Check for Deposit" => "view_check_for_deposit.php"
    ],
    "purchases" => [
        "Purchase Order" => "purchase_order.php", 
        "Purchases" => "purchase_receipt.php", 
        "Purchase Return" => "purchase_return.php",
        "Purchase Order Close Status" => "purchase_order_cloase_status.php"
    ],
    "payables" => [
        "Other Payables (AP Credit Memo)" => "other_payables_apcreditmemo.php", 
        "Disbursement" => "disbursement.php",
        "Payment Processing" => "payment_processing.php",
        "Payment Processing" => "payment_processing.php",
        "Payment Processing" => "payment_processing.php",
        "Payment Processing" => "payment_processing.php",
        "Payment Processing" => "payment_processing.php",
        "Payment Processing" => "payment_processing.php",
    ],
    "inventory" => [
        "Stock Management" => "stock_management.php", 
        "Item List" => "item_list.php", 
        "Warehouse Transfers" => "warehouse_transfers.php"
    ],
    "general Ledger" => [
        "Stock Management" => "stock_management.php", 
        "Item List" => "item_list.php", 
        "Warehouse Transfers" => "warehouse_transfers.php"
    ],
    "bank Transactions" => [
        "Stock Management" => "stock_management.php", 
        "Item List" => "item_list.php", 
        "Warehouse Transfers" => "warehouse_transfers.php"
    ],
    "BIR" => [
        "Stock Management" => "stock_management.php", 
        "Item List" => "item_list.php", 
        "Warehouse Transfers" => "warehouse_transfers.php"
    ],
    "utilities" => [
        "Stock Management" => "stock_management.php", 
        "Item List" => "item_list.php", 
        "Warehouse Transfers" => "warehouse_transfers.php"
    ],
    "graph" => [
        "Stock Management" => "stock_management.php", 
        "Item List" => "item_list.php", 
        "Warehouse Transfers" => "warehouse_transfers.php"
    ],
];

// Output as JSON
header('Content-Type: application/json');
echo json_encode($menus);
