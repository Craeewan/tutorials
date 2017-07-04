<html>
    <head>
        <title>My Shop</title>
    </head>

    <body>
        <h1>Welcome Hacker Hostel! </h1>
        <ul>
            <?php
                $json = file_get_contents("http://customer-service");
                $obj = json_decode($json);

                $customers = $obj->customers;
                foreach($customers as $customer){
                    echo "<li>$customer</li>";
                }
            ?>
        </ul>
    </body>
</html>