<html>

<body>
    <?php
    require_once 'config.php';


    $insert = "INSERT INTO vocabs (id,thai_word,mueng_word,word_type,mueng_def,example_word)";
    $insert .= "VALUES (NULL, '" . $_POST["Thaiword"] . "','" . $_POST["Muengword"] . "','" . $_POST["Wordtype"] . "','" . $_POST["Muengdef"] . "','" . $_POST["Exampleword"] . "')";

    $query = mysqli_query($conn, $insert);

    if ($query) {
        echo "Save Successfully";
        echo "<script>alert('บันทึกข้อมูลสำเร็จ');window.location.replace('create.php')</script>";
    } else {
        echo $conn->error;
    }
    mysqli_close($conn);
    ?>
</body>

</html>