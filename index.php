<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>SSE Demo</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/sse.css">
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=".">SSE demo</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel panel-default connection-status">
                    <div class="panel-heading">
                        <h3 class="panel-title">Debug info</h3>
                    </div>
                    <div class="panel-body">
                        <div>
                            Connection status: <i id="connection" class="fa fa-smile-o text-success"></i>
                            <button id="clear-status" class="btn btn-sm btn-warning">Clear</button>
                        </div>
                    </div>
                    <ul class="list-group" id="log"></ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Demo server status</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-6 text-center">
                            <canvas id="server-cpu" width="400"></canvas>
                            CPU
                        </div>
                        <div class="col-sm-6 text-center">
                            <canvas id="server-ram" width="400"></canvas>
                            RAM
                        </div>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Debug long running server task</h3>
                    </div>
                    <div class="panel-body">
                        <button id="start-task" class="btn btn-sm btn-success">Start task</button>
                        <br><br>
                        <div class="progress hide">
                            <div id="long-task-progress" class="progress-bar progress-bar-danger progress-bar-striped active" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em;">
                                0%
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.3.0/Chart.bundle.min.js"></script>
    <script src="./js/sse.js"></script>
</body>
</html>
