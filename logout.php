<?php

//ends the session of the user.

SESSION_START();

SESSION_UNSET();

SESSION_DESTROY();
header("Location: index.php");
?>