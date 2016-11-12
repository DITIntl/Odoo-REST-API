<?php

require_once('ripcord.php');
require_once('Odoo.php');
require_once('Customer.php');
require_once('Sales.php');

$url = '';
$db = '';
$username = '';
$password = '';

$odoo = new Odoo($url, $db, $username, $password);
$uid = $odoo->login();

$order = new Sales($odoo);
$user = new Customer($odoo);


switch ($_POST['customer']) {

    case 'get':

        $user->getCustomer();
        break;

    case 'add':

        $user->addCustomer();
        break;

    case 'all':

        $user->listAll();
        break;

    case 'edit':

        $user->editCustomer();
        break;

    default:

        echo 'Error';
        break;
    //
}



switch ($_POST['state']) {

    case 'add':

        $order->addSaleOrder();
        break;

    case 'display':

        $order->displaySaleOrder();
        break;

    default:

        echo 'Error';
        break;
}

