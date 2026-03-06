<?php
session_start();
session_unset();     // session data ဖျက်
session_destroy();   // session ပိတ်

header("Location: home.php"); // မူလ page ကို ပြန်ပို့
exit();
?>