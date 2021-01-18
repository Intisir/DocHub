<div class="sideBar">
            <div class="weather">
                <?php
                $response = file_get_contents('http://api.openweathermap.org/data/2.5/weather?q=Dhaka&units=metric&APPID=41e0501d54dabb356f687094624010d0');
                $weather = json_decode($response);
                ?>
                <img class="headerImg" src="./assets/images/weather.svg" alt="">
                <h3>Dhaka , Bangladesh</h3>
                <div style="display: flex; align-items:center; justify-content: space-between">
                    <div>
                        <h4><?php echo $weather->weather[0]->main ?></h4>
                        <span style="font-size: 14px ; font-weight: bold"><?php echo $weather->main->temp . "°C"  ?></span>
                    </div>
                    <div>
                        <i class="fas fa-cloud-sun" style="font-size: 32px"></i>
                    </div>
                </div>
                <span style="font-size: 13px;font-weight: bold">Humidity <?php echo $weather->main->humidity ?> </span>
            </div>
            <div class="suggestions">
                <img class="headerImg" src="./assets/images/suggestion.svg" alt="">
                <h3>Health Tips</h3>
                <span>
                <?php 
                    echo "Whole eggs are so nutritious that they’re often termed “nature’s multivitamin”"
                    ?>
                </span>          
            </div>
            <div class="suggestions">
                <img class="headerImg" src="./assets/images/ai.svg" alt="">
                <div>
                <a href="docbot.php" style="font-weight:bold">Talk with Docbot</a>  
                </div>           
            </div>
            <div class="suggestions">
                <img class="headerImg" src="./assets/images/ai.svg" alt="">
                <div>
                <a href="globalapi.php" style="font-weight:bold">Global Health News</a>  
                </div>           
            </div>
</div>