<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/style.css">
    <title>DevTools</title>
</head>

<body>
    <?php require "navbar.php" ?>
    <div class="tool-col">
        <h1 class="heading"><img src="/IMG/toolslogo.png" alt="">
        </h1>
        <div class="tool-row">

            <?php
            require "connection.php";

            $sql = "SELECT * FROM tools";
            $result = mysqli_query($conn, $sql);
            $check = mysqli_num_rows($result) > 0;

            if ($check) {
                while ($row = mysqli_fetch_array($result)) {
            ?><div class="card">
                        <div class="tool-img">
                            <img src="/IMG/<?php echo $row['img'] ?>" alt="">
                        </div>
                        <div class="card-info">
                            <p class="toolname"><?php echo $row['name'] ?></p>
                            <p class="tooldetail"><?php echo $row['description'] ?></p>
                        </div>
                        <div>
                            <button class="tool-btn"><a href="<?php echo $row['link'] ?>">Use It</a></button>
                        </div>
                    </div>
            <?php
                }
            } else {
                echo "Not Found";
            }
            ?>
        </div>
    </div>
    <?php require "footer.php"; ?>
</body>

</html>