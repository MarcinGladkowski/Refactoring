<?php

function printOwning($order)
{
    $invoice = InvoiceFactory::create($order);
    displayInvoiceDetails($invoice);
}

/**
 * @param $invoice
 * @return void
 */
function displayInvoiceDetails($invoice)
{
    echo $invoice->name();
    echo $invoice->total();
}
