<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UwU</title>
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        .paddingLR-10px{
            padding: 0px;
            padding-left: 10px;
            padding-right: 10px;
        }
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: absolute;
            left: 0;
            bottom: 0;
            width: 100%;
            z-index: 1000;
        }
        </style>
</head>
<body class="grey lighten-4">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <nav class="white z-depth-0 deep-orange lighten-4">
        <div class="nav-wrapper">
            <ul class="left">
                <?php
                    echo '<li><a href="../index.php">Home</a></li>
                    <li><a href="view/ProductAdminView.php">Produtos</a></li>
                    <li><a href="view/CartView.php">Carrinho</a></li>';                    
                ?>
            </ul>
            <ul id="nav-mobile" class="right hide-on-small-and-down ">
                <li class="paddingLR-10px">
                    <div class="black-text margin-10px">
                       <?php echo "time remaining:"?>
                    </div>
                </li>
                <?php echo "<li><a href=\"#\" class=\"btn\"><i class=\"material-icons left\">polymer</i>Admin View</a></li>"; ?>
                <li>
                    <?php echo "<a href=\"#\" class='btn brand z-depth-10'><i class=\"material-icons left\">exit_to_app</i>Log out</a>"
                    ?>
                </li>
            </ul>
            <a href="#" class="brand-logo center brand-text hide-on-small-and-down">UwU</a>
        </div>
    </nav>