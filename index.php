<!DOCTYPE html>
<html lang="pt-Br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropzone</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./dist/min/dropzone.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/dropzone.min.css">
</head>
<body>
    <div class="container">
        <h1>DROPZONE</h1>
        <div class="row">
            <div class="col-12">
                <div class="card mt-3 tab-card">
                    <div class="card-header tab-card-header">
                        <ul class="nav nav-tabs card-header-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link" id="one-tab" data-toggle="tab" href="#one" role="tab" aria-controls="One" aria-selected="true">One</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="two-tab" data-toggle="tab" href="#two" role="tab" aria-controls="Two" aria-selected="false">Two</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="three-tab" data-toggle="tab" href="#three" role="tab" aria-controls="Three" aria-selected="false">Three</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active p-3" id="one" role="tabpanel" aria-labelledby="one-tab">
                            <h5 class="card-title">Formulário 1</h5>
                            <form action="upload.php" class="dropzone" id="myDropzoneA">
                                <!-- <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div> -->
                            </form>
                            <!-- <div align="center">
                                <button type="button" class="btn btn-info" id="submit-all"> Upload</button>
                            </div> -->
                        </div>
                        <div class="tab-pane fade p-3" id="two" role="tabpanel" aria-labelledby="two-tab">
                            <h5 class="card-title">Formulário 2</h5>
                            <form action="upload.php" class="dropzone" id="myDropzoneB">
                                 <!-- <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div>  -->
                            </form>
                        </div>
                        <div class="tab-pane fade p-3" id="three" role="tabpanel" aria-labelledby="three-tab">
                            <h5 class="card-title">Formuário 3</h5>

                            <form action="upload.php" class="dropzone" id="myDropzoneC">
                                <!-- <div class="fallback">
                                    <input name="file" type="file" multiple />
                                </div> -->
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <!-- <script src="./dist/min/dropzone.min.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.2/min/dropzone.min.js"></script>
    <script src="./dist/js/drop.js"></script>
    <script>
        // $("#myDropzone").dropzone({
        //     url: "upload.php"
        // });
    </script>
</body>
</html>