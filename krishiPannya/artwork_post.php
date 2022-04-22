<?php include("account.php"); ?>
<!DOCTYPE html>
 <html>
 <head>
</head>

<style>

 .headt1 {
         font-size: 30px;
          font-family: "Yu Gothic UI Light";
          color: rgb( 45, 112, 213 );
          position: absolute;
          left: 70px;
          top: 100px;
          z-index: 19;

          }
        .headt2{
           font-size: 30px;
         font-family: "Yu Gothic UI Light";
          color: rgb( 00, 00, 00 );
          position: absolute;
           left:153px;
          top: 100px;
          z-index: 19;
    }

     .hr{
            position:absolute;
            border: 1px solid #2d70d5;
            top:150px;
            width: 1090px;
            left:71px;
        }
        .table{
            position: relative;
            top: -50px;
            left: 380px;
        }
        .fsize-title{
              margin: 200px 50px 10px 100px;
             font-size: 15px;
        }

        .fsize-img{
            margin: 0px 50px 10px 200px;
            font-size: 14px;
        }
        .fsize-text{
            margin: 10px 50px 10px -280px;
            font-size: 15px;
        }

          .textbox{
             border-radius: 8px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
          border: 2px solid steelblue;
          background-color: white;
          position: inherit;
          left: 200px;
          top: 10px;
          width: 170px;
          height: 30px;
        }

        .inputbar{
           font-family: "Yu Gothic UI";
           color: white;
           font-size: 15px;
           margin-bottom: 30px;
           background-color: #43b353;
           position: absolute;
           right: 540px;
           width: 200px;
           height: 35px;
        }
         .body{
        margin: 0 0 100px 160px;
    }
                input[type=text],

textarea,
fieldset {
/* required to properly style form
   elements on WebKit based browsers */
  -webkit-appearance: none;



  font-family: inherit;
  font-size: 90%;

  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

input:invalid {
  box-shadow: 0 0 5px 1px red;
}

input:focus:invalid {
  outline: none;
}

</style>
<body>
         <p>
            <h1 class="headt1"> পণ্যের</h1>
            <h1 class="headt2">&nbsp;&nbsp;বিবরন </h1> <hr class="hr">
         </p>

        <div class="body">
          <p class="fsize-title">পণ্যের ছবি:<br><br>
              <?php
                if(!empty($message)) {
                echo "<p>{$message}</p>";
                }
              ?>
          </p>

          <p class="fsize-img">
              <form class="table" action="action_artwork.php" enctype="multipart/form-data" method="post">
                    <table style="border-collapse: collapse; font: 12px Tahoma;" border="1" cellspacing="5" cellpadding="5">
                      <tbody>
                        <tr>
                          <td>
                            <input type="hidden" name="MAX_FILE_SIZE" value="1000000" />
                            <input type="file" required name="file_upload" />
                          </td>
                        </tr>
                      </tbody>
                    </table>  <br><br>
          </p>

          <p class="fsize-text">

            শিরোনাম: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Fname" required name="title"> <br><br>
         <!--   Width:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Mname" required name="width">  in.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Height:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Lname" required name="height">  in.
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Thickness: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="gender" required name="thickness">   in.<br><br>  -->

            বর্ণনা:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <!-- <input class="textbox"  type="text" id="bday" required name="description"><br><br>  -->
			
			<textarea class="textbox"  type="text" id="bday" required name="description" style="width:350px;height:100px; border-radius:8px;border:1px solid none;"></textarea><br><br><br><br>
			
            পণ্যের শ্রেণী: <?php $art_category = $_GET['art_category'];
            $_SESSION['art_category'] = $art_category;
                    echo '&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'. $art_category;
					/*if($art_category == "Painting")
						echo '<p>শস্য</p>'*/
					
            ?>
            <br><br>
            <?php

             if($art_category == "শস্য ও ডাল জাত"){
            echo 'পণ্যের উপশ্রেণী: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="textbox" id="media" name="media">
                             <option value="">উপশ্রেণী  </option>
							 <option value="Airbrush">ধান</option>
							 <option value="Enamel">চাল</option>
							 <option value="Gouache"> গম</option>
							 <option value="Acrylic">ভুট্টা</option>
							 <option value="Oil">মসুর ডাল</option>
                       <!--   <option value="Spray Paint">Spray Paint</option>
                             <option value="Tempera">Tempera</option>
                             <option value="Watercolor">Watercolor</option>
                             <option value="Ink">Ink</option>
                             <option value="Gesso">Gesso</option> -->
                             </select><br><br>
                             পণ্যের পরিমান:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="bday" required name="stock"><br><br>';
            }
            else if($art_category == "মৎস্য-পশু-পাখি"){
            echo 'পণ্যের উপশ্রেণী: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="textbox" id="media" name="media">
                             <option value="Ceramic">মাছ</option>
							 <option value="Clay">হাইব্রিট কৈ</option>
							 <option value="Digital">তেলাপিয়া</option>
							 <option value="Fiberglass">ভিয়েতনামি কই</option>
							 <option value="Pottery">গরু</option>
							 <option value="Fabric">ছাগল/ভেড়া</option>
							 <option value="Neon">মহিষ</option>
							 <option value="Glass"> মূরগী</option>
							 <option value="Interactive">কবুতর</option>
							 <option value="Latex">হাস</option>
						     <option value="Leather">ডিম</option>
                         <!--     <option value="LED">LED</option>
                              <option value="Metal">Metal</option>
                              <option value="Mosaic">Mosaic</option>
                              <option value="Paint">Paint</option>
                              <option value="Paper">Paper</option>
                              <option value="Paper Mache">Paper Mache</option>
                              <option value="Plastic">Plastic</option>
                              <option value="Rubber">Rubber</option>
                              <option value="Stone">Stone</option>
                              <option value="Wax">Wax</option>
                              <option value="Wood">Wood</option>
                              <option value="Steel">Steel</option>
                              <option value="Bronze">Bronze</option>
                              <option value="Granite">Granite</option>
                              <option value="Marble">Marble</option>  -->
                             </select><br><br>
                               পণ্যের পরিমান:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="bday" required name="stock"><br><br>';
            }
            if($art_category == "শাক-সবজি ও ফলমূল"){
            echo 'পণ্যের উপশ্রেণী: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="textbox" id="media" name="media">

                             <option value="Ballpoint Pen">আলু</option>
							 <option value="Chalk">পটল</option>
							 <option value="Charcoal">করলা</option>
							 <option value="Digital">মসলা</option>
							 <option value="Graphite">অন্যান্য</option>
                        <!--     <option value="Ink">Ink</option>
                             <option value="Marker">Marker</option>
                             <option value="Pastel">Pastel</option>
                             <option value="Pencil">Pencil</option>   -->


                             </select><br><br>
                               পণ্যের পরিমান:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="bday" required name="stock"><br><br>';
            }
            if($art_category == "অর্থকরী ফসলসমূহ"){
            echo 'পণ্যের উপশ্রেণী: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select class="textbox" id="media" name="media">

                             <option value="Polaroid">পাট</option>
							 <option value="Color">তেল</option>
							 <option value="Digital">মধু</option>
							 <option value="C-type">রেশম</option>
							 <option value="Black & White">বাঁশ ও বেত পণ্য</option>
							 <option value="Photogram">মাশরুম</option>
                     <!--        <option value="Platinum">Platinum</option>
                             <option value="Gelatin">Gelatin</option>
                             <option value="Manipulated">Manipulated</option>  -->
                             </select><br><br>
             পণ্যের পরিমান:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox"  type="text" id="bday" required name="stock"><br><br>';       
            }

                            $today = getdate();
                            $day = $today['weekday'];
                            $month = $today['mon'];
                            $day1 = $today['mday'];
                            $year =$today['year'];
                             $cc= $year.'-'.$month.'-'.$day1;
                            $_SESSION['current_date'] = $cc;
                            ?>
            মূল্য (একক প্রতি):&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="textbox" type="text" id="Street" required name="price"><br><br>

                            <input class="inputbar" type="submit" name="submit" value="পোস্ট করুন">

        </form>
    </p>
</body>
</html>
<?php include("includes/footer.php"); ?>

