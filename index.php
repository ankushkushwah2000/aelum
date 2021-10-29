<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<style>
    .mar{
        margin-top: 200px;
        margin-bottom:300px;
    }
    .bg{
        background:linear-gradient(red,rgb(45, 33, 224),rgb(57, 214, 83));
        background-repeat: no-repeat;
        background-size:cover;
    }
</style>
</head>
<body class="bg">
<div class="container-fluid">
    <div class="container">
        <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-6 shadow mar text-white">
            <h1 class="text-center">Form</h1>
            <div class="text-center">Registration closes in <span id="time" class="fs-3">03:00</span> minutes!</div>
            <form action="insert.php" method="post" id="my_post-form">
                <div class="mb-3">
                    <label>name</label>
                    <input type="text" name="name" id="" class="form-control" placeholder="Enter username" id="name">
                </div>
                <div class="mb-3">
                    <label for="">email</label>
                    <input type="text" class="form-control" placeholder="Enter email" name="email" id="email">

                </div>
                <div class="mb-3">
                    <label for="">DOB</label>
                    <input type="date" class="form-control" placeholder="Enter DOB" name="date" id="date">

                </div>
                <div class="mb-3">
                    <label>About yourself</label>
                    <textarea class="form-control" placeholder="Enter about yourself" name="your"></textarea>
                </div>
                <div class="text-center mb-3">
                    <input type="submit" class="btn btn-info" value="submit">
                </div>
            </form>

        </div><!-----col-md-6----->
        <div class="col-md-3"></div>

        </div><!----row----->
    </div><!-----continer----->
</div><!-----continer-fluid----->
</body>
</html>
<script type="text/javascript">
  function startTimer(duration, display) {
    var timer = duration, minutes, seconds;
    let total_time_count = 0;

    setInterval(function () {
        minutes = parseInt(timer / 60, 10);
        seconds = parseInt(timer % 60, 10);

        minutes = minutes < 10 ? "0" + minutes : minutes;
        seconds = seconds < 10 ? "0" + seconds : seconds;

        display.textContent = minutes + ":" + seconds;
        if (--timer < 0) {
            timer = duration;
        }

        total_time_count+= 1;
        if(total_time_count >= 180)
        {
            // alert('Sorry Time is Over refresh the page');
            document.getElementById('my_post-form').style.display = 'none';
        }

// console.log(minutes);
        // document.getElementById("myText").disabled = true;





    }, 1000);
}

window.onload = function () {
    var fiveMinutes = 60 * 3,
        display = document.querySelector('#time');
    startTimer(fiveMinutes, display);
};
</script>
