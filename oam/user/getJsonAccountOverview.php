<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$account = htmlspecialchars($_GET["account"]);
//echo $account;

// stub to represent https://myaccount.xcelenergy.com/oam/user/getJsonAccountOverview.req?account=6348558270
//                    http://powerstub.killamsolutions.ca/oam/user/getJsonAccountOverview.php?account=6348558270

//echo date('m');
//echo ("\n\n");

$outp = get_accountoverview  ( $account );
echo($outp);

// dump out the actual return info below, so the two can be compared.


// ----------------------------------------
function get_address ( $account ) {
   
   switch ($account) {
      case "6348558270":  return ( '"addressLine1":"789 ARCADIA AVE","addressLine2":"","addressLine3":"TIMBUKTU CA 90210-1234"' );
   }
   
   return ( '"addressLine1":"789 KOKOMO AVE","addressLine2":"","addressLine3":"TIMBUKTU CA 90210-1234"' );
   
   
}


// ----------------------------------------
// create all of the JSON that will be returned, calling random generators and account lookups.
function get_accountoverview ($account ) {
    $outp = '{';
    $outp .= '"alert":null,"currentBalance":0.0,"disabled":false,';
    $outp .= '"dueDate":"'.get_date(' + 10 days').'T12:00:00-07:00",';
    $outp .= '"hasManySchedPayments":0,';
    $outp .= '"lastPaymentAmt":'.get_randommoney().',';
    $outp .= '"lastPaymentDate":"'.get_date(' - 25 days').'T12:00:00-07:00",';
    $outp .= '"lastStatementDate":"'.get_date(' - 35 days').'T12:00:00-07:00",';
    $outp .= '"nextSchedPaymentAmt":null,"nextSchedPaymentDate":null,"nextSchedStatus":null,'."\n";
    $outp .= '"nickname":"'.$account.'","number":"'.$account.'",';
    $outp .= '"overdue":false,'."\n";
    $outp .= '"premises":[{'.get_address ( $account ).','."\n";
    $outp .= '"comparisons":[';
    $outp .= '{"efficientNeighbors":"838","name":"Energy","you":"728","unitLabel":"Units","allNeighbors":"1201"},'."\n";
    $outp .= '{"efficientNeighbors":"64","name":"Natural Gas","you":"64","unitLabel":"Therms","allNeighbors":"85"},'."\n";
    $outp .= '{"efficientNeighbors":"265","name":"Electricity","you":"276","unitLabel":"kWh","allNeighbors":"597"}'."\n";
    $outp .= ']';  // end of comparisons
    $outp .= '"cost":78.75,"grade":"A+","number":"301480088","programs":{"windSource":false,"solarReward":true,"saverSwitch":true}'."\n";
    $outp .= '}]'; // end of this premise, end of premises list
    $outp .= '"programs":{"eBill":true,"ebillAutoPay":true,"manualPay":true,"averageMonthlyPayment":false},'."\n";
    $outp .= '"trendData":{';
    $outp .= '"series":['."\n";
    $themonth = intval (date('m'));
    $outp .= '{"data":'.get_moneyseries( $themonth+1, 12).',"label":"2014"},'."\n";
    $outp .= '{"data":'.get_moneyseries( 1, 12).',"label":"2015"},'."\n";
    $outp .= '{"data":'.get_moneyseries( 1, $themonth).',"label":"2016"}'."\n";
    $outp .= '],'."\n";  // end of series (within trendData)
    $outp .= '"labels":["Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec"]';
    $outp .= '}';  // end of trendData
    $outp .= '}';
    return ($outp);
}

// -----------------------------------------------
function get_moneyseries( $start_month, $end_month) {

   // eg currently in may (start_month = 5), show from june - dec, month 6 - 12, i 5 to 11, make zeros for 0 to 4
   $outp .= '[';
   for ($i = 0; $i < $start_month - 1; $i++) {
      $outp .= '0.0';
      if ($i < 11) {$outp .= ','; }
   }
   for ($i = $start_month - 1; $i < $end_month; $i++) {
      $outp .= '"'.get_randommoney().'"';
      if ($i < 11) {$outp .= ','; }
   }
   for ($i = $end_month; $i < 12; $i++) {
      $outp .= '0.0';
      if ($i < 11) {$outp .= ','; }
   }
   $outp .= ']';
   return $outp;
}

// ----------------------------------------
function get_date ($offsest) {
   $Date = date('Y-m-d');
   $due = date('Y-m-d', strtotime($Date. $offsest));
   return $due;
}

// ----------------------------------------
function get_randommoney () {
   $outp = rand ( 50, 300 ).'.'.rand ( 10, 99);
   return $outp;
}




?>

