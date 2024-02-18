<?php
include ("./_config.php");
include("./_session.php");
session_unset();
header("location: home");