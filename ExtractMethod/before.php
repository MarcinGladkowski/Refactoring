<?php

function printOwning($order)
{
    $invoice = InvoiceFactory::create($order);

    echo $invoice->name();
    echo $invoice->total();
}
