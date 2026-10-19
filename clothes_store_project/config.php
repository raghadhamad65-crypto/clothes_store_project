<?php
session_start();
$conn = new mysqli("localhost","root","","ecommerce_db");
if($conn->connect_error){ die("Connection failed: ".$conn->connect_error); }
function isLoggedIn(){ return isset($_SESSION['user_id']); }
function isAdmin(){ return isset($_SESSION['role']) && $_SESSION['role']==='admin'; }
function clean($v){ return htmlspecialchars($v ?? '', ENT_QUOTES, 'UTF-8'); }
?>