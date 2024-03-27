
<html>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <head>

    <style>
    body {
            width: 100%;
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);

            color: white;
        }

        .intro {
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
width:90%;
margin-left:5%;
padding: 30px;
color:white;
text-align:center;
content: center;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 1px solid rgba(255, 255, 255, 0.3);
        }
        table{
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
width:90%;
margin-left:5%;
padding: 30px;
color:white;
text-align:center;
content: center;
            border-radius: 16px;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
            backdrop-filter: blur(5px);
            -webkit-backdrop-filter: blur(5px);
            border: 3px solid white;
        }
</style>
</head>
<body>


   

        <ul class="nav nav-pills nav-fill gap-2 p-1 small bg-primary rounded-5 shadow-sm" id="pillNav2" role="tablist" style="--bs-nav-link-color: var(--bs-white); --bs-nav-pills-link-active-color: var(--bs-primary); --bs-nav-pills-link-active-bg: var(--bs-white);background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
        ">
            <li class="nav-item" role="presentation">
                <a class="nav-link active rounded-5" href="../index.html" id="home-tab2"  type="button" role="tab" aria-selected="true">ALL WEEKS</a>
              </li>   
              <li class="nav-item" role="presentation">
              <a class="nav-link active rounded-5" href="index.html" id="home-tab2"  type="button" role="tab" aria-selected="true">Shop</a>
            </li> 
             
          </ul>

          <div class="intro">
            <h1>Week4 Exercise</h1>
            <h2>Online Shop</h2>
            <p>By Marius Boncica</p>
            </div>
<div class="intro">
<?php
session_start();

$selqty = $_SESSION['selqty'];
$selsize = $_SESSION['selsize'];
$selcolour = $_POST['selcolour'];

// Use switch statement to determine the size label based on the selected size
switch ($selsize) {
    case 15.75:
        $sizeLabel = "Small";
        break;
    case 16.75:
        $sizeLabel = "Medium";
        break;
    case 17.75:
        $sizeLabel = "Large";
        break;
    case 18.75:
        $sizeLabel = "Extra Large";
        break;
    default:
        $sizeLabel = "Unknown";
}

// Calculate total price based on quantity and selected size
$totalPrice = $selqty * $selsize;

// Display order details
echo "<h2>Your order qty is $selqty</h2></br>";
echo "<h2>The selected size is $sizeLabel (£$selsize)</h2></br>";
echo "<h2>The selected colour is $selcolour</h2></br>";
echo "<h2 class='btn btn-primary'>The total price is £$totalPrice</h2>";
?>




  
</div>
       
    </body>
    </html>