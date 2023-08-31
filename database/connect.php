<?php

$conn = mysqli_connect("localhost", "root", "", "crud_project");

if (!$conn) {

    die("Connection failed");
}