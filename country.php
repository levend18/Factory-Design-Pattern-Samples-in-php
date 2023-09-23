<?php

class Pdf
{
    public $file;

    public function save()
    {
        //save pdf file
    }
}

class Address
{
    public $street;
    public $city;
    public $country;
}

class Bill
{
    public $price;
    public $tax;
    public $total;
    public Pdf $pdf;
    public Address $address;
}
Class BillFactory{
    public  function makeBill($price): Bill{
        $address = new  Address();
        $pdf = new  Pdf();
        $bill = new Bill();
        $bill->address = $address;
        $bill->pdf=$pdf;


        $bill->price = $price;
        $bill->tax = $price * 0.18;
        $bill->total = $bill->price + $bill->tax;

    }
}


$billFactory = new BillFactory();
$bill1 = $billFactory->makeBill(100);