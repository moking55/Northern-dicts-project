<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>
    <div class="container pb-5">
        <?php
        require_once 'config.php';
        ini_set('display_errors', 1);
        error_reporting(~0);

        $strKeyword = null;

        if (isset($_POST["txtKeyword"])) {
            $strKeyword = $_POST["txtKeyword"];
        }
        ?>
        <form name="frmSearch" method="post" style="margin-top: 100px;" action="<?php echo $_SERVER['SCRIPT_NAME']; ?>">
        <div class="input-group">
            <input name="txtKeyword" type="text" class="form-control" id="txtKeyword" value="<?php echo $strKeyword; ?>">
            <div class="input-group-append">
            <input type="submit" value="ค้นหา" class="btn btn-primary">
            </div>
        </div>
        </form>
        
        <p>ผลการค้นหาสำหรับ <?php
        $sql = "SELECT * FROM vocabs WHERE thai_word LIKE '%".$strKeyword."%' ";
        $query = mysqli_query($conn,$sql);
        
        
        echo "<b>". $strKeyword . "</b>" . ' พบ ' . mysqli_num_rows($query) . ' รายการที่คล้ายกัน';
         ?></p>

        <?php
        $sql = "SELECT * FROM vocabs WHERE thai_word LIKE '%" . $strKeyword . "%' ";

        $query = mysqli_query($conn, $sql);

        ?>
        <?php
        while ($result = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
        ?>
            <div class="card mt-3">
                <!-- <div class="card-header"></div> -->
                <div class="card-body">
                    <span>
                        <h4 class="card-text"><?php echo $result["mueng_word"]; ?> (<?php echo $result["thai_word"]; ?>)</h4><small><?php echo $result["word_type"]; ?></small>
                    </span>

                    <hr>
                    <b>วิธีใช้คำ:</b>
                    <p><?php echo $result["mueng_def"]; ?></p>
                    <b>ตัวอย่างประโยค:</b>
                    <p><?php echo $result["example_word"]; ?></p>
                </div>
            </div>
        <?php
        }
        ?>
    </div>


    <?php
    mysqli_close($conn);
    ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>