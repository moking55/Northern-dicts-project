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
    <title>พจนานุกรมภาษาเหนือ</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt&display=swap');

        body {
            font-family: Prompt;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.css" />
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.min.js"></script>
</head>

<body>
    <div class="container pt-5">
        <center><img src="img/open-book.png" alt="" width="200" height="200"></center>
        <h1 class="text-center">พจนานุกรมภาษาเหนือ</h1>
        <h6 class="text-center">Northern thai dictionary</h6>

        <form action="search.php" method="post">
            <div class="input-group mt-5 pr-5 pl-5">
                <input type="text" class="form-control" placeholder="ค้นหาศัพท์" name="txtKeyword" id="search">
                <div class="input-group-append">
                    <button class="btn btn-success" type="submit">ค้นหา</button>
                </div>
            </div>
            <small id="Help" class="form-text text-muted pr-5 pl-5">ป้อนคำศัพท์ที่เป็นภาษาไทยกลางเท่านั้น ไม่สามารถใช้ร่วมกับภูมิภาคอื่นได้</small>
        </form>
        <!-- <p>powered by yaksa.co</p> -->
        <div class="card mt-5 mr-5 ml-5">
            <div class="card-header">
                <i class="fas fa-lightbulb"></i> รู้หรือไม่!
            </div>
            <div class="card-body">
                <?php
                    include_once 'config.php';
                    $query = mysqli_query($conn, "SELECT * FROM did_u_know order by RAND() LIMIT 1") or die ("Error Query [".$strSQL."]");
                    $objResult = mysqli_fetch_array($query);
                    mysqli_close($conn);
                    ?>
                <p class="card-text">
                    <?php echo $objResult["facts"];?>
                </p>
            </div>
        </div>
    </div>


    <script type="text/javascript">
        $(function() {
            $("#search").autocomplete({
                source: 'ajax-search.php',
            });
        });
    </script>
</body>

</html>