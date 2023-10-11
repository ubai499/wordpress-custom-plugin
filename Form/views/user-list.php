<br>

<?php

global $wpdb;
$results = $wpdb->get_results( "SELECT * FROM wp_form_plugin_tbl"); // Query to fetch data from database table and storing in $results

if(!empty($results))                        // Checking if $results have some values or not
{    
    echo "<table width='100%' border='0'>"; // Adding <table> and <tbody> tag outside foreach loop so that it wont create again and again
    echo "<tbody>";      
    foreach($results as $row){   
    echo "<tr>";                           // Adding rows of table inside foreach loop
    echo "<th>ID</th>" . "<td>" . $row->id . "</td>";
    echo "</tr>";
    echo "<td colspan='2'><hr size='1'></td>";
    echo "<tr>";        
    echo "<th>Name</th>" . "<td>" . $row->name . "</td>";   //fetching data from user_ip field
    echo "</tr>";
    echo "<td colspan='2'><hr size='1'></td>";
    echo "<tr>";        
    echo "<th>Email</th>" . "<td>" . $row->email . "</td>";
    echo "</tr>";
    echo "<td colspan='2'><hr size='1'></td>";
    echo "<tr>";        
    echo "<th>Address</th>" . "<td>" . $row->address . "</td>";
    echo "</tr>";
    echo "<td colspan='2'><hr size='1'></td>";
    }
    echo "</tbody>";
    echo "</table>"; 
}
?>