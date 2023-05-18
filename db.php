<?php

include __DIR__ . '/Models/Pc.php';

$Computers = [
    new Desktop('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTz3HmjMBElZgffgLrNR9MRXLAyyEYMSpvyu5xDIjQI5EHo-wpHRSbmrxkzeJnyH3s17fI&usqp=CAU', 'Dell', new Storage('1TB', 'HDD'), new Ram('16GB', 'DDR4'), 'Intel Core i7', 'Inspiron 5000', 'United States', 'Dell Keyboard', 'Logitech Mouse', 'AC Power'),
    new Desktop('https://upload.wikimedia.org/wikipedia/commons/6/69/IBM_PC_5150.jpg', 'HP', new Storage('512GB', 'SSD'), new Ram('16GB', 'DDR4'), 'AMD Ryzen 5', 'Pavilion 27', 'United Kingdom', 'HP Keyboard', 'HP Mouse', 'AC Power'),
    new Desktop('https://www.nonsprecare.it/wp-content/uploads/2013/05/vecchio-pc-cosa-fare-rivenderlo-smaltirlo.jpg', 'Lenovo', new Storage('256GB', 'SSD'), new Ram('16GB', 'DDR4'), 'Intel Core i5', 'IdeaCentre 510A', 'China', 'Lenovo Keyboard', 'Lenovo Mouse', 'AC Power'),
    new Laptop('https://www.computerassistancechiavari.it/wp-content/uploads/2021/01/61pBhllH4PL._AC_SL1200_.jpg', 'Apple', new Storage('512GB', 'SSD'), new Ram('16GB', 'DDR4'), 'Apple M1', 'MacBook Pro', 'United States', true, false, false),
    new Laptop('https://img-prod-cms-rt-microsoft-com.akamaized.net/cms/api/am/imageFileData/RE55U7F', 'Asus', new Storage('1TB', 'SSD'), new Ram('16GB', 'DDR4'), 'Intel Core i5', 'ZenBook 14', 'Taiwan', false, true, true),
    new Desktop('https://www.welfarenetwork.it/media/2016/05/37784/f2_0_1992-la-apple-computer-presenta-l-imac.jpg', 'HP', new Storage('512GB', 'SSD'), new Ram('16GB', 'DDR4'), 'AMD Ryzen 5', 'Pavilion 27', 'United Kingdom', 'HP Keyboard', 'HP Mouse', 'AC Power'),
];




// var_dump($Movies[0])


?>