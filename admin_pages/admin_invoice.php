<?php

global $wpdb;

$invoice_table = $wpdb->prefix . 'invoices';

$invoices = $wpdb->get_results( "SELECT * FROM $invoice_table");

?>
<h2>
	Invoices
</h2>

<table id="invoice-table" class="display">
    <thead>
    <tr>
        <th>ID</th>
        <th>Full Name</th>
        <th>Email</th>
        <th>Gender</th>
        <th>Phone (Personal)</th>
        <th>Phone (Parent)</th>
        <th>Address</th>
        <th>Department</th>
        <th>Batch</th>
        <th>University Number</th>
        <th>Company</th>
        <th>Higher Studies</th>
    </tr>
    </thead>
    <tbody>

    <?php foreach($invoices as $invoice): ?>
        <tr>
            <td><?= $invoice->id ?></td>
            <td><?= $invoice->first_name . ' ' . $invoice->middle_name . ' ' . $invoice->last_name ?></td>
            <td> <?= $invoice->email ?> </td>
            <td> <?= $invoice->gender ?> </td>
            <td> <?= $invoice->phone_personal ?> </td>
            <td> <?= $invoice->phone_parent ?> </td>
            <td> <?= $invoice->address ?> </td>
            <td> <?= $invoice->department ?> </td>
            <td> <?= $invoice->batch ?> </td>
            <td> <?= $invoice->uni_number ?> </td>
            <td> <?= $invoice->company ?> </td>
            <td> <?= $invoice->higher_studies ?> </td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>

<script>
    $(document).ready( function () {
        $('#invoice-table').DataTable();
    } );
</script>