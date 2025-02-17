<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
    <link rel="stylesheet" href="./assets/style.css">
</head>

<body>

    <?php
        function is_active($check){
            $requested_uri = $_SERVER['REQUEST_URI'];

            $search = strpos($requested_uri, $check);

            if($search !== false){
                return 'active';
            }
        }

        $menus = [
            'index' => 'Home',
            'about' => 'About',
            'contact' => 'Contact US',
            'gallery' => 'Gallery',
            'support' => 'Support'
        ];
    ?>


    <div class="container">
        <div class="header-wrapper">
            <div class="header">
                <h1>This is a Header</h1>
            </div>
        </div>
        <div class="main-menu">
            <ul>
                <?php foreach($menus as $key => $value) : ?>
                    <li>
                        <a class="<?php echo is_active($key); ?>" href="<?php echo $key ?>.php"><?php echo $value; ?></a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
        <div class="main-content">
</body>

</html>