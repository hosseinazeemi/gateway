<?php
// You need to import Models of User and ListGateway For Example
use App\User;
use App\GatewayList;
/*
 *  Step 1 : Created 2 migration list_gateways and user_customize_gateway
 *  Step 2 : Modify gateway.php and Dynamic Array Of gateways
 *
 *
 */
// Get Gateway list
$gateways = GatewayList::where('active' , 1)->get();
return [

    //-------------------------------
    // Timezone for insert dates in database
    // If you want Gateway not set timezone, just leave it empty
    //--------------------------------
    'timezone' => 'Asia/Tehran',

    //--------------------------------
    // Zarinpal gateway
    //--------------------------------
    'zarinpal' => json_decode($gateways->where('key' , 'zarinpal')->first()->value),

    //--------------------------------
    // Mellat gateway
    //--------------------------------
    'mellat' => json_decode($gateways->where('key' , 'mellat')->first()->value),

    //--------------------------------
    // Saman gateway
    //--------------------------------
    'saman' => json_decode($gateways->where('key' , 'saman')->first()->value),

    //--------------------------------
    // PayIr gateway
    //--------------------------------
    'payir'    => json_decode($gateways->where('key' , 'payir')->first()->value),

    //--------------------------------
    // IranKish gateway
    //--------------------------------
    'irankish' => json_decode($gateways->where('key' , 'irankish')->first()->value),

    //--------------------------------
    // Sadad gateway
    //--------------------------------
    'sadad' => json_decode($gateways->where('key' , 'sadad')->first()->value),

    //--------------------------------
    // Parsian gateway
    //--------------------------------
    'parsian' => json_decode($gateways->where('key' , 'parsian')->first()->value),
    //--------------------------------
    // Pasargad gateway
    //--------------------------------
    'pasargad' => json_decode($gateways->where('key' , 'pasargad')->first()->value),

    //--------------------------------
    // Asan Pardakht gateway
    //--------------------------------
    'asanpardakht' => json_decode($gateways->where('key' , 'asanpardakht')->first()->value),

    //--------------------------------
    // Paypal gateway
    //--------------------------------
    'paypal'   => json_decode($gateways->where('key' , 'paypal')->first()->value),
    //-------------------------------
    // Tables names
    //--------------------------------
    'table'    => 'gateway_transactions',
];
