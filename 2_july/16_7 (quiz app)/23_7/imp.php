<?php 

echo(min(0, 150, 30, 20, -8, -200) . "<br>");
echo(max(0, 150, 30, 20, -8, -200));

echo(abs(-6.7));

echo(sqrt(64));

echo(round(0.60));
echo(round(0.49));

echo(rand());
echo(rand(10, 100));

define("GREETI", "Welcome W3Schools.com!");
echo GREETI;

define("GREETING", "Welcome to W3Schools.com!", true);
echo greeting;
?>