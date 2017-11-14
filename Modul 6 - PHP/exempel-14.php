<?php
session_start();
// Ta bort sessionen
session_destroy();
header('Location: exempel-12.php');