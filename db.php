<?php

include __DIR__ . '/Models/Pc.php';

$Computers = [
    new Desktop('https://picsum.photos/200/200', 'Dell', '1TB', '16GB', 'Intel Core i7', 'Inspiron 5000', 'Stati Uniti', 'Dell Keyboard', 'Logitech Mouse', 'AC Power'),
    new Desktop('https://picsum.photos/200/200', 'HP', '512GB', '8GB', 'AMD Ryzen 5', 'Pavilion 27', 'Regno Unito', 'HP Keyboard', 'HP Mouse', 'AC Power'),
    new Desktop('https://picsum.photos/200/200', 'Lenovo', '256GB', '12GB', 'Intel Core i5', 'IdeaCentre 510A', 'Cina', 'Lenovo Keyboard', 'Lenovo Mouse', 'AC Power'),
    new Laptop('https://picsum.photos/200/200', 'Apple', '512GB', '16GB', 'Apple M1', 'MacBook Pro', 'Stati Uniti', true, false, false),
    new Laptop('https://picsum.photos/200/200', 'Asus', '1TB', '8GB', 'Intel Core i5', 'ZenBook 14', 'Taiwan', false, true, true)
];



// var_dump($Movies[0])


?>