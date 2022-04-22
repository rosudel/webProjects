<?php include("includes/head.php"); ?>

<!DOCTYPE html>
 <html>
 <head>
 <title>Artworks</title>
 <style>
select {
           border-radius: 5px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
          border: 1px solid steelblue;
          background-color: white;
          font-family: "Yu Gothic UI Light";
          position: relative;
          left: 200px;
          top: 80px;
          width: 250px;
          height: 40px;
        }

       input{
           border-radius: 5px;
           box-shadow: 1px 1.732px 5px 0px rgb( 55, 52, 52 );
           border: 1px solid rgb(33,33,33);
          font-weight: bold;
          background-color: #234;
          font-family: "Yu Gothic UI Light";
          color: white;
          position: relative;
          left: 200px;
          top: 80px;
          width: 150px;
          height: 40px;
       }

        .photo {
            position: relative ;
            width: 300px;
           height : 250px;
        }

    .desc-title{
        color:#2d70d5;
        font-variant: small-caps;
        font-family: "Yu Gothic UI Light";
        font-size: 29px;
        position: relative;
        top: 0px;
        left: 5px;
        text-decoration: none;
    }
    .desc-content{
        position: relative;
        font-size: 18px;
        font-family:  "Yu Gothic UI Light";
        top: 0px;

    }
    .desc-content2{
        position: relative;
        font-size: 18px;
        font-family:  "Yu Gothic UI Light";
        top: -20px;
    }

     .pic-table{
            border: 8px solid white;
            box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.2);
            background-color: #fafafa;
            border-collapse: collapse;
            float: left;
            overflow: auto;
            margin: 0px 50px 100px 0px;
        }
        .space{
          margin-top: 120px;
          position: relative;
          left:130px;

        }



</style>
              </head>
              <body>



                <form action="searchart.php" method="POST">
                <select id="Category" name="Category">

                 <option value="">শ্রেণী সমূহ</option>
                 <option value="Painting">শস্য ও ডাল জাত</option>
                 <option value="Sculpture">মৎস্য-পশু-পাখি</option>
                 <option value="Photography">শাক-সবজি ও ফলমূল</option>
                 <option value="Drawing">অর্থকরী ফসলসমূহ</option>

                  </select>

                  <select id="medium"  name="Medium">
                  <option value="">উপশ্রেণী  </option>
                 <option value="Airbrush">ধান</option>
                 <option value="Enamel">চাল</option>
                 <option value="Gouache"> গম</option>
                 <option value="Acrylic">ভুট্টা</option>
                 <option value="Oil">মসুর ডাল</option>
               <!--  <option value="Spray Paint"></option>
                 <option value="Tempera"></option>
                 <option value="Watercolor"></option>
                 <option value="Ink"></option>
                 <option value="Gesso"></option> -->

  <option value="">মৎস্য-পশু-পাখি </option>
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
              <!--      <option value="LED">LED</option>
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
                  <option value="Marble">Marble</option> -->

                <option> শাক-সবজি ও ফলমূল</option>
                 <option value="Ballpoint Pen">আলু</option>
                 <option value="Chalk">পটল</option>
                 <option value="Charcoal">করলা</option>
                 <option value="Digital">মসলা</option>
                 <option value="Graphite">অন্যান্য</option>
            <!--     <option value="Ink">Ink</option>
                 <option value="Marker">Marker</option>
                 <option value="Pastel">Pastel</option>
                 <option value="Pencil">Pencil</option> -->

      <option value="">অর্থকরী ফসলসমূহ</option>
                 <option value="Polaroid">পাট</option>
                 <option value="Color">তেল</option>
                 <option value="Digital">মধু</option>
                 <option value="C-type">রেশম</option>
                 <option value="Black & White">বাঁশ ও বেত পণ্য</option>
                 <option value="Photogram">মাশরুম</option>
            <!--     <option value="Platinum">Platinum</option>
                 <option value="Gelatin">Gelatin</option>
                 <option value="Manipulated">Manipulated</option> -->


                  </select>
                  <select id="Price" name="Price">

                  <option value="">লোকেশন</option>
                 <option value="5001">দিনাজপুর</option>
                 <option value="10001">বগুড়া</option>
                 <option value="50001">রাজশাহী</option>
                 <option value="500001">পাবনা</option>
                  <option value="1000001">ঢাকা</option>

                  </select>

                 <input type="submit" name="submit" value="অনুসন্ধান">

                  </form>



        <?php

            $query_category1="SELECT art_work.art_imagepath,art_work.art_id, art_work.art_title,art_work.art_price, user.user_fname, user.user_mname,user.user_lname,art_work.art_description,art_work.art_imagepath,art_work.art_status,art_work.art_category
                         FROM art_work,user
                        where art_work.user_id = user.user_id AND art_work.art_status = 'Available' ORDER BY art_work.art_title ASC";
            $result_category1 = mysqli_query($conn,$query_category1);
 if(mysqli_num_rows($result_category1) <=0)
        {
            echo '<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 align="Center">No Artworks Available </h1>';
        }
        else{
            while($row1 = mysqli_fetch_array($result_category1))
{

                  echo ' <div class="space" >
                            <table  class="pic-table">
                                <tr>
                                    <td>
                                        <img class="photo" src="pictures/arts/'.$row1['art_imagepath'].'" > <br>'.

                                        '<a  href=info_art.php?id='.$row1['art_id'].' class="desc-title"> '.$row1['art_title'].' </a>

                                         <p class="desc-content">'.$row1['art_category'].'</p>

                                         <p class="desc-content" style="float: right;">মূল্যঃ&#8750;'.$row1['art_price'].'</p> <br>

                                         <p class="desc-content2">'.$row1['user_fname'].' '.$row1['user_mname'].' '.$row1['user_lname'].'</p>
                                    </td>
                                </tr>
                            </table>
                        </div>';
            }
}
        echo "<br><br>";


        ?>
    </div>
<p class="title"></p>
<?php

include("includes/footer.php");
?>
