<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID generator</title>
    <link rel="icon" href="img/logo.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/toastr.min.css" rel="stylesheet">
</head>
<body class="container-fluid">
    <div class="header text-center pt-4">
        <img src="img/Degand.png" alt="Degand Brussel"/>
    </div>
    <div class="content mt-3">
        <div class="row text-center">
            <h1>GENERATOR</h1>
            <div class="col-md-4">
                <div class="row text-center p-4">
                    <h3>Internal Reference(S_ID)</h3>
                    <form action="/php/IRGenerator.php">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text">Generate</span>
                            <input type="number" class="form-control" id="IRitem">
                            <span class="input-group-text">IDs</span>
                        </div>
                        <div class="row mb-1 p-3 d-flex justify-content-between">
                            <button id="btn_IR_one" type="button" class="btn btn-outline-dark col-md-1 mt-1"> +1 </button>
                            <button id="btn_IR_five" type="button" class="btn btn-outline-dark col-md-1 mt-1"> +5 </button>
                            <button id="btn_IR_ten" type="button" class="btn btn-outline-dark col-md-1 mt-1 p-1"> +10 </button>
                            <button id="btn_IR_twenty" type="button" class="btn btn-outline-dark col-md-1 mt-1 p-1"> +20 </button>                            
                            <button id="btn_IR_generator" type="button" class="btn btn-success col-md-3 mt-1"> Start </button>
                            <button id="btn_IR_clear" type="button" class="btn btn-outline-dark col-md-3 mt-1"> Clear </button>
                        </div>
                        <div class="row mb-1 p-3">
                            <textarea class="form-control" rows="5" id="IR_textarea" name="text"></textarea>
                        </div>
                        <h5>Generated IDs: <span id="IR_cnt">0</span><h5>
                        <div class="row mb-1 p-3">
                            <button id="IR-btn-export" type="button" class="btn btn-warning" onclick="copyIRtoClipboard()">Copy</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row text-center p-4">
                    <h3>Code ligne</h3>
                    <form action="#">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text">Generate</span>
                            <input type="number" class="form-control" id="CLitem">
                            <span class="input-group-text">IDs</span>
                        </div>
                        <div class="row mb-1 p-3 d-flex justify-content-between">
                            <button id="btn_CL_one" type="button" class="btn btn-outline-dark col-md-1 mt-1"> +1 </button>
                            <button id="btn_CL_five" type="button" class="btn btn-outline-dark col-md-1 mt-1"> +5 </button>
                            <button id="btn_CL_ten" type="button" class="btn btn-outline-dark col-md-1 mt-1 p-1"> +10 </button>
                            <button id="btn_CL_twenty" type="button" class="btn btn-outline-dark col-md-1 mt-1 p-1"> +20 </button>                            
                            <button id="btn_CL_generator" type="button" class="btn btn-success col-md-3 mt-1" >Start</button>
                            <button id="btn_CL_clear" type="button" class="btn btn-outline-dark col-md-3 mt-1" >Clear</button>
                        </div>
                        <div class="row mb-1 p-3">
                            <textarea class="form-control" rows="5" id="CL_textarea" name="text"></textarea>
                        </div>
                        <h5>Generated IDs: <span id="CL_cnt">0</span><h5>
                        <div class="row mb-1 p-3">
                            <button id="CL-btn-export" type="button" class="btn btn-warning" onclick="copyCLtoClipboard()">Copy</button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row text-center p-4">
                    <h3>Code Collection</h3>
                    <form action="#">
                        <div class="input-group mb-3 p-1">
                            <span class="input-group-text">Generate</span>
                            <input type="number" class="form-control" id="CCitem">
                            <span class="input-group-text">IDs</span>
                        </div>
                        <div class="row mb-1 p-3 d-flex justify-content-between">
                            <button id="btn_CC_one" type="button" class="btn btn-outline-dark col-md-1 mt-1"> +1 </button>
                            <button id="btn_CC_five" type="button" class="btn btn-outline-dark col-md-1 mt-1"> +5 </button>
                            <button id="btn_CC_ten" type="button" class="btn btn-outline-dark col-md-1 mt-1 p-1"> +10 </button>
                            <button id="btn_CC_twenty" type="button" class="btn btn-outline-dark col-md-1 mt-1 p-1"> +20 </button>                            
                            <button id="btn_CC_generator" type="button" class="btn btn-success col-md-3 mt-1">Start</button>
                            <button id="btn_CC_clear" type="button" class="btn btn-outline-dark col-md-3 mt-1">Clear</button>
                        </div>
                        <div class="row mb-1 p-3">
                            <textarea class="form-control" rows="5" id="CC_textarea" name="text"></textarea>
                        </div>
                        <h5>Generated IDs: <span id="CC_cnt">0</span><h5>
                        <div class="row mb-1 p-3">
                            <button id="CC-btn-export" type="button" class="btn btn-warning" onclick="copyCCtoClipboard()">Copy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/clipboard.js"></script>
    <script src="js/generate_ir_ids.js"></script>
    <script src="js/generate_cl_ids.js"></script>
    <script src="js/generate_cc_ids.js"></script>
    <script src="js/toastr.min.js"></script>
</body>
</html>