<?php

// Locate switchport name from each array in table
$swPort1 = $data[0]->port_table[0]->name;
$swPort2 = $data[0]->port_table[1]->name;
$swPort3 = $data[0]->port_table[2]->name;
$swPort4 = $data[0]->port_table[3]->name;
$swPort5 = $data[0]->port_table[4]->name;
$swPort6 = $data[0]->port_table[5]->name;
$swPort7 = $data[0]->port_table[6]->name;
$swPort8 = $data[0]->port_table[7]->name;
$swPort9 = $data[0]->port_table[8]->name;
$swPort10 = $data[0]->port_table[9]->name;
$swPort11 = $data[0]->port_table[10]->name;
$swPort12 = $data[0]->port_table[11]->name;
$swPort13 = $data[0]->port_table[12]->name;
$swPort14 = $data[0]->port_table[13]->name;
$swPort15 = $data[0]->port_table[14]->name;
$swPort16 = $data[0]->port_table[15]->name;
$swPort17 = $data[0]->port_table[16]->name;
$swPort18 = $data[0]->port_table[17]->name;

// Check POE status of each switchport from each port array in table
$swPortPOE1 = json_encode($data[0]->port_table[0]->poe_enable);
$swPortPOE2 = json_encode($data[0]->port_table[1]->poe_enable);
$swPortPOE3 = json_encode($data[0]->port_table[2]->poe_enable);
$swPortPOE4 = json_encode($data[0]->port_table[3]->poe_enable);
$swPortPOE5 = json_encode($data[0]->port_table[4]->poe_enable);
$swPortPOE6 = json_encode($data[0]->port_table[5]->poe_enable);
$swPortPOE7 = json_encode($data[0]->port_table[6]->poe_enable);
$swPortPOE8 = json_encode($data[0]->port_table[7]->poe_enable);
$swPortPOE9 = json_encode($data[0]->port_table[8]->poe_enable);
$swPortPOE10 = json_encode($data[0]->port_table[9]->poe_enable);
$swPortPOE11 = json_encode($data[0]->port_table[10]->poe_enable);
$swPortPOE12 = json_encode($data[0]->port_table[11]->poe_enable);
$swPortPOE13 = json_encode($data[0]->port_table[12]->poe_enable);
$swPortPOE14 = json_encode($data[0]->port_table[13]->poe_enable);
$swPortPOE15 = json_encode($data[0]->port_table[14]->poe_enable);
$swPortPOE16 = json_encode($data[0]->port_table[15]->poe_enable);
$swPortPOE17 = json_encode($data[0]->port_table[16]->poe_enable);
$swPortPOE18 = json_encode($data[0]->port_table[17]->poe_enable);


// Check each port for uplink if it is true.
$swPortUP1 = json_encode($data[0]->port_table[0]->is_uplink);
$swPortUP2 = json_encode($data[0]->port_table[1]->is_uplink);
$swPortUP3 = json_encode($data[0]->port_table[2]->is_uplink);
$swPortUP4 = json_encode($data[0]->port_table[3]->is_uplink);
$swPortUP5 = json_encode($data[0]->port_table[4]->is_uplink);
$swPortUP6 = json_encode($data[0]->port_table[5]->is_uplink);
$swPortUP7 = json_encode($data[0]->port_table[6]->is_uplink);
$swPortUP8 = json_encode($data[0]->port_table[7]->is_uplink);
$swPortUP9 = json_encode($data[0]->port_table[8]->is_uplink);
$swPortUP10 = json_encode($data[0]->port_table[9]->is_uplink);
$swPortUP11 = json_encode($data[0]->port_table[10]->is_uplink);
$swPortUP12 = json_encode($data[0]->port_table[11]->is_uplink);
$swPortUP13 = json_encode($data[0]->port_table[12]->is_uplink);
$swPortUP14 = json_encode($data[0]->port_table[13]->is_uplink);
$swPortUP15 = json_encode($data[0]->port_table[14]->is_uplink);
$swPortUP16 = json_encode($data[0]->port_table[15]->is_uplink);
$swPortUP17 = json_encode($data[0]->port_table[16]->is_uplink);
$swPortUP18 = json_encode($data[0]->port_table[17]->is_uplink);
?>