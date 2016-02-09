<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <div class="content">
            <h1>Shinra Electric Power Company <i class="glyphicon glyphicon-apple"></i></h1>
        </div>

        <div id="likeDiv" class="bg-success"></div>

        <form role="form">
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="pwd">Password:</label>
                <input type="password" class="form-control" id="pwd">
            </div>
            <div class="checkbox">
                <label><input type="checkbox"> Remember me</label>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>

    </div>

    <script src="{{asset('js/app.js')}}"></script>

</body>
</html>
