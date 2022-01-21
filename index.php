<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://matchilling-chuck-norris-jokes-v1.p.rapidapi.com/jokes/random",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"accept: application/json",
		"x-rapidapi-host: matchilling-chuck-norris-jokes-v1.p.rapidapi.com",
		"x-rapidapi-key: 34fdfd09f2msh9d43529eec5bfccp133133jsn2a5f78ab11f3"
	],
]);

$response = curl_exec($curl);
// $response = json_decode(curl_exec($curl), true);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	// echo $response;
//    $data = json_decode($response);
//     echo '<img src="' . $data ->icon_url . '" alt="">';
//     echo '<h4>' .$data->value . '</h4>';
    

}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chuck Norris </title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <style>
        #ebody {
         background-image: url("https://images01.military.com/sites/default/files/styles/full/public/2021-04/chucknorris.jpeg.jpg");
        /* background-color: #cccccc; */
        background-repeat: no-repeat;
        background-size: cover;
        height:100%;
        }
        #header_text{
            text-align:center;
            margin-top:20px;
        }
        img{
            width:100%;
            height:250px;
        }
        h4{
            color:red;
            text-align:center;
            margin-top:10px;
        }
        #refresh_button{
          background-color:#2384C6;
          color:white;
        }
        #refresh_button:hover{          
          background-color:white;
          color:#2384C6;
        }
        button{
          margin-left:30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 id="header_text">Chuck Norris facts.</h2>
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <img src="https://images01.military.com/sites/default/files/styles/full/public/2021-04/chucknorris.jpeg.jpg" alt="">
            </div>
            <div class="col-md-4"></div>
        </div>
        <?php
   $data = json_decode($response);
   echo '<h4>' .$data->value . '</h4>';
  
  ?>
  <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-3">
      <button class="form-control" id="refresh_button" onclick="refreshPage()">Refresh fact</button>
    </div>
    <div class="col-md-3"></div>
  </div>
    </div>
    
</body>
<script>
  function refreshPage(){
    location.reload();
  }
</script>
  <script
    src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
    integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB"
    crossorigin="anonymous"
  ></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
    integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13"
    crossorigin="anonymous"
  ></script>
</html>