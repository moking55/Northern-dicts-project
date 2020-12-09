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

    <div class="container pt-5">
        <div class="card">
            <div class="card-header"><b>Define Your Word</b></div>
            <div class="card-body">
                <form action="save.php" method="post">
                    <div class="alert alert-warning" role="alert">
                        <i class="fas fa-exclamation-circle"></i> จำไว้เสมอว่าพจนานุกรมคนเหนือเป็นพื้นที่สาธารณะ โปรดอย่าเล่นมุกภายใน พาดพิงบุคคล หรือสถาบันที่มีอยู่จริงให้เสื่อมเสีย
                    </div>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="Thaiword">ภาษาไทย</label>
                                <input class="form-control" type="text" name="Thaiword">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="Muengword">คำเมือง</label>
                                <input class="form-control" type="text" name="Muengword">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="Wordtype">ชนิดของคำ</label>
                                <select class="form-control" id="Wordtype" name="Wordtype">
                                    <option>คำนาม</option>
                                    <option>คำสรรพนาม</option>
                                    <option>คำกริยา</option>
                                    <option>คำวิเศษณ์</option>
                                    <option>คำบุพบท</option>
                                    <option>คำสันธาน</option>
                                    <option>คำอุทาน</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Def">การใช้งาน</label>
                                <textarea id="Def" class="form-control" name="Muengdef" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="Example">ตัวอย่างประโยค</label>
                                <textarea id="Example" class="form-control" name="Exampleword" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="btn-group-toggle" data-toggle="buttons">
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-danger">Reset</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>