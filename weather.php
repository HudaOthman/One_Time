
<?php
$apiKey = "d4488c67194ea3c38282682fe44b2699";
$cityId = "281184";
$googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

$ch = curl_init();

curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_VERBOSE, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$response = curl_exec($ch);

curl_close($ch);
$data = json_decode($response);
$currentTime = time();

function DateFormat($date){
    
    if($date== 'Saturday'){
        echo "السبت";
    }elseif($date== 'Sunday'){
       echo "الاحد"; 
    }elseif($date== 'Monday'){
       echo "الاثنين"; 
    }elseif($date== 'Tuesday'){
       echo "الثلاثاء"; 
    }elseif($date== 'Wednesday'){
       echo "الاربعاء"; 
    }elseif($date== 'Thursday'){
       echo "الخميس"; 
    }else{
        echo "الجمعة";
    }
}

?>


  <div class="wheather-box">
            <div class="triangle"></div>
            <div class="item-box px-4 py-3">
                <h5 class="font-size-16 font-weight-bold text-center mb-1">حالة الطقس </h5>
                <p>القدس / فلسطين </p>
                <i class="fas fa-cloud-sun fa-3x"></i>
                <span class="d-block"><?php echo DateFormat(date("l")); ?></span><br>
                <span class="d-block"><?php echo $data->main->temp_max; ?><?php $data->main->temp_min; ?>°C</span>


            </div>
            

        </div>