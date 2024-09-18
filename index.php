<?php
/**
 * This is a demo script for the functions of the PHP ESC/POS print driver,
 * Escpos.php.
 *
 * Most printers implement only a subset of the functionality of the driver, so
 * will not render this output correctly in all cases.
 *
 * @author Michael Billington <michael.billington@gmail.com>
 */
require __DIR__ . '/vendor/autoload.php';
use Mike42\Escpos\Printer;
use Mike42\Escpos\PrintConnectors\NetworkPrintConnector;

header("Content-type: application/json; charset=utf-8");

header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
$method = $_SERVER['REQUEST_METHOD'];
if($method == "OPTIONS") {
    die();
}

//echo 'cool';
//die();

$printer_IP = $_GET['printer_ip'];

$header = (object)$_GET['header'];
$lines = (object)$_GET['lines'];

echo 'ok';

//var_dump($header, $printer_IP, $lines);
//die();
//echo $printer_IP . '<br>' . $data->header;

/*


$connector = new NetworkPrintConnector($printer_IP, 9100);
$printer = new Printer($connector);
// Initialize
$printer -> initialize();

$printer -> selectPrintMode(32);
$printer -> setJustification( Printer::JUSTIFY_CENTER );
$printer -> text( $header->transaction_label . "\n");
$printer -> selectPrintMode(56);
$printer -> text( $header->number_label . "\n");
$printer -> setJustification(); // Reset

$printer -> selectPrintMode(41);
$printer -> text( "Fecha: " . $header->date . "\n");
$printer -> text( "Cliente: " . $header->customer_name . "\n");
$printer -> text( "Atiende: " . $header->seller_label . "\n");
$printer -> text( "Detalle: " . $header->detail . "\n\n");

$printer -> text( "___________________________\n");
$printer -> text( " CANT.        ITEM \n");

$printer -> selectPrintMode(49);

foreach ($lines as $line) {

    $item_name = $line['item'];

    $end = 20;
    
    $printer -> text( " " . $line['quantity'] . "-" . substr( $item_name, 0, $end) . "\n" );
    //echo $line['quantity'] . " - " . substr( $item_name, 0, $end) . "<br>";

    $length_pendiente = strlen($item_name) - $end;
    $start = $end;
        
    while ($length_pendiente > 3) {
        $end += 1;   

        $printer -> text( "    " . substr( $item_name, $start, $end) . "\n" );
        //echo '&nbsp;&nbsp;&nbsp;&nbsp;' . substr( $item_name, $start, $end) . '<br>';

        $length_pendiente = $length_pendiente - $start;

        $start = $end;
    }
}

$printer -> selectPrintMode(); // Reset

$printer -> feed(3);
$printer -> cut();

// Always close the printer! On some PrintConnectors, no actual data is sent until the printer is closed.
$printer -> close();

$data = ['status'=>'success'];

echo $_GET['callback'] . '('.json_encode($data).')';

*/