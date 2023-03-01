<?php
    $user = "lichuma"; 
    $password = "lichuma2023";
    $ODBCConnection = odbc_connect(
    "DRIVER={ ODBC Driver 11 for SQL Server};
    Server=DESKTOP-TQ5IM0U;
    Database=hms; 
    Port=8080;
    String Types=Unicode", $user, $password);
    $SQLQuery = "SELECT * FROM hms";
    $RecordSet = odbc_exec($ODBCConnection, $SQLQuery);
    while (odbc_fetch_row($RecordSet)) {
        $result = odbc_result_all($RecordSet, "border=1");
    }
    odbc_close($ODBCConnection);
?>  
