<?php
require_once(dirname(__FILE__) . "/mtgoxrate.php" );

function  btcprice_from_currency( $fromcurrency, $fromprice )
{
 $mtgoxrate = mtGoxRate($fromcurrency);
 $btcprice  = $fromprice / $mtgoxrate;

 $btcprice = round( $btcprice, 4, PHP_ROUND_HALF_UP );
 $messageline = $fromprice." ".$fromcurrency." = ".$btcprice." BTC ";
 return $messageline;
}

?>
