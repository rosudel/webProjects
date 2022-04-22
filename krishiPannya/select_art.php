<?php
include("includes/connection.php");
include("account.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Artworks</title>

    <style type="text/css">

        .border{

          background: url(pictures/blurred-sunset.jpg) no-repeat fixed;
          background-size: cover;
          box-shadow: 1px 1.732px 2px 0px rgb( 55, 52, 52 );
          position: absolute;
          width: 100%;
          height: 100%;
          z-index: 0;
        }

        .list{
            border-left: 1px solid white;
        }
        .list:last-child{
            border-right: none;
        } 

        .list {
          float: left;
          overflow: auto;
          right: 40px;

        }

        .list .link {

          display: block;
          color: white;
          font-size: 20px;
          font-family: "Yu Gothic UI Light";
          margin:280px 125px 0px 10px;
          text-decoration: none;

         }

         .link{
          margin-left: 100px;
         }

       .list .link:hover {
          background-color:#4f4f4f;
          float: left;
          overflow: auto;
          padding: 5px ;
        }



    </style>
</head>
<body>
    <ul class="border">
        <li class="list"><a class="link" href="artwork_post.php?art_category=শস্য ও ডাল জাত">শস্য ও ডাল জাত</a></li>

     <li class="list"><a class="link" href="artwork_post.php?art_category=মৎস্য-পশু-পাখি">মৎস্য-পশু-পাখি</a></li>

        <li class="list"><a class="link" href="artwork_post.php?art_category=শাক-সবজি ও ফলমূল">শাক-সবজি ও ফলমূল</a></li>

        <li class="list"><a class="link" href="artwork_post.php?art_category=অর্থকরী ফসলসমূহ">অর্থকরী ফসলসমূহ</a></li> </ul>
    </ul>
</body>
</html>