<?php
    // deve
    // $kon = mysqli_connect("localhost", "root",'toor',"akademik");
    
    // production
    $kon = mysqli_connect("localhost", "id8008167_wp_6971aa87103d728ea4cfce9fc5ecbe45",'rakaadhitya1998',"id8008167_wp_6971aa87103d728ea4cfce9fc5ecbe45");
    if (mysqli_connect_errno()) {
        echo "Koneksi database gagal : " .mysqli_connect_error();
    }
?>