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
                    <p><strong>Invoice No:</strong> <?php echo $invoice->id; ?> </p>
                </td>
                <td>
                    <p><strong> Date:</strong>
                        <?php echo date("F d, Y", strtotime($invoice->created_at)); ?>
                    </p>
                </td>
            </tr>
            <tr>
                <td><strong>Guest Name:</strong><span id="guest-name"> <?php echo $invoice->customer_detail_name; ?></span> </td>
                <td><strong>Room Number:</strong> <span id="room-number"> <?php echo Room::find($invoice->reservation_id)->room_number; ?> </td>
            </tr>
            <tr>
                <td><strong>Check-In:</strong> <span id="check-in"> <?php echo Reservation::find($invoice->reservation_id)->check_in_date; ?></span> </td>
                <td><strong>Check-Out:</strong> <span id="check-out"> <?php echo Reservation::find($invoice->reservation_id)->check_out_date; ?> </td>
            </tr>
        </table>
    </div>
    <div class="items">
        <table>
            <tr>
                <th>Rooms & Other Services</th>
                <th>#Off Nights/Qty</th>
                <th>Price Per Night/Qty</th>
                <th>Total per section($)</th>
            </tr>
            <tbody id="items-body" class="items-body">
                <?php
                // $items = Invoice:: invoice_detail($invoice->id);
                // print_r($items);


                ?>
            </tbody>
        </table>
    </div>
    <div class="summary">
        <table>
            <tr>
                <td><strong>Subtotal</strong></td>
                <td id="subtotal"><?php echo $invoice->total_amount; ?></td>
            </tr>
            <tr>
                <td><strong>Tax (10%)</strong></td>
                <td id="tax"><?php echo $invoice->tax_amount; ?></td>
            </tr>
            <tr>
                <td><strong>Total</strong></td>
                <td id="grand-total"><?php echo $grand_total= $invoice->total_amount + $invoice->tax_amount; ?></td>
            </tr>
        </table>
    </div>
    <div class="footer">
        <p>Thank you for staying with us!</p>
    </div>
</div>
<script>
    $(document).ready(function() {

    });
</script>