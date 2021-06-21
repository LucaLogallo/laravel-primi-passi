<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <style>
    *{
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    .container{
      width: 50%;
      height: 50%;
      margin: 50px auto;
      text-align: center
    }

    .container h1 {
      color: #f35626;
      background-image: -webkit-linear-gradient(92deg,#f35626,#feab3a);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      -webkit-animation: hue 30s infinite linear;
    }

    @-webkit-keyframes hue {
      from {
        -webkit-filter: hue-rotate(0deg);
      }
      
      to {
        -webkit-filter: hue-rotate(360deg);
      }
    }  

    button{
      padding: 10px;
      margin: 20px
    }

    button a{
      text-decoration: none;
    }
  </style>  
  <title>Document</title>
</head>
<body>
  <div class="container">
    <h1>!HELLO WORLD CAMALEONTE!</h1>
  </div>

  <button>
    <a href="http://127.0.0.1:8000/">HOME</a>
  </button>
</body>
</html>