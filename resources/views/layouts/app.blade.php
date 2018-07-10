<?php
?>
<!DOCTYPE html>
<html>
<style>
body{
    margin: 0px;
}

.form-horizontal{
    margin-bottom: 0px;
}

ul li {
  padding: 12px 8px 12px 40px;
  list-style-type: none;
  background: #eee;
  font-size: 18px;
  transition: 0.2s;
}

ul li:nth-child(odd) {
  background: #f9f9f9;
}

li{
    display: block;
}

ul{
    margin: 0;
    padding: 0;
}

.nametask{
    display: inline-block;
    float: left;
}

.but{
    cursor: pointer;
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 18px;
    display: block;
    float: right;
}

.form-group{
    background-color: #f44336;
    padding: 30px 40px;
    color: white;
    text-align: center;
}

ul li:hover {
  background: #ddd;
}

</style>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Todo List</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    @yield('content')
</body>
</html>