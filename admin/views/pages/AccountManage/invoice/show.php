<?php
// echo Page::title(["title"=>"Show Invoice"]);
// echo Page::body_open();
// echo Html::link(["class"=>"btn btn-success", "route"=>"invoice", "text"=>"Manage Invoice"]);
// echo Page::context_open();
// echo Invoice::html_row_details($id);
// echo Page::context_close();
// echo Page::body_close();
?>

<style>
    /* body {
            font-family: Arial, sans-serif;
            margin: 20px;
            padding: 0;
        } */
    .invoice-container {
        max-width: 800px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ddd;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    .header,
    .footer {
        text-align: center;
        margin-bottom: 20px;
    }

    .header h1 {
        margin: 0;
    }

    .details,
    .items,
    .summary {
        width: 100%;
        margin-bottom: 20px;
    }

    .details table,
    .items table,
    .summary table {
        width: 100%;
        border-collapse: collapse;
    }

    .details td,
    .items th,
    .items td,
    .summary td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: left;
    }

    .items th {
        background-color: #f2f2f2;
    }

    .input-field {
        width: 100%;
        border: none;
        background: transparent;
        padding: 0;
        margin: 0;
        font-size: inherit;
    }
</style>

<div class="invoice-container">
    <div class="header">
        <h1>Hotel Invoice</h1>
        <p>Address: 123 Hotel Street, City, Country</p>
        <p>Phone: +123 456 7890 | Email: contact@hotelname.com</p>
    </div>
    <div class="details">
        <table>
            <tr>
                <td>
                    <p><strong>Invoice No:</strong> INV- <?php echo $invoice->id; ?> </p>
                </td>
                <td>
                    <p><strong> Date:</strong>
                        <?php echo $invoice->created_at; ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td><strong>Guest Name:</strong> <?php echo Invoice::find($invoice->id)->customer_detail_name ?>
                </td>
                <td><strong>Room Number:</strong> <?php //echo Room::find(Reservation::find(Invoice::find($invoice->id)->reservation_id)->room_id)->room_number 
                echo InvoicesView::find($invoice->id)->room_number ?>
                </td>
            </tr>
            <tr>
                <td><strong>Check-In DateTime:</strong> <?php //echo InvoicesView::find($invoice->id)->check_in
                echo Reservation::find(Invoice::find($invoice->id)->reservation_id)->check_in_date
                ?> </td>
                <td><strong>Check-Out DateTime:</strong> 

                    <?php //echo Reservation::find(Invoice::find($invoice->id)->reservation_id)->check_out_date
                    
                    echo InvoicesView::find($invoice->id)->check_out ?></td>
            </tr>
        </table>
    </div>
    <div class="items">
        <table>
            <thead>
                <tr>
                    <th>Item</th>
                    <th>Quantity</th>
                    <th>Unit Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="items-body" class="items-body">
                <tr class="item-row">
                    <td>
                        
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td class="total">300.00</td>
                </tr>
            </tbody>
        </table>
        <button onclick="addItem()">Add Item</button>
    </div>
    <div class="summary">
        <table>
            <tr>
                <td><strong>Subtotal</strong></td>
                <td id="subtotal">300.00</td>
            </tr>
            <tr>
                <td><strong>Tax (10%)</strong></td>
                <td id="tax">30.00</td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td id="grand-total">330.00</td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <p>Thank you for staying with us!</p>
    </div>
</div>