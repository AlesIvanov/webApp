<?php
if (!isset($_GET['send'])){
    echo join('', file('hello.html'));
    die();
}

echo $_GET['username'];

