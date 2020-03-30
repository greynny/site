<div class="container">
    <div class="row row-flex">
        <div class="col-md-2 col-sm-2">
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="pricingTable">
                <div class="thumb">
                    <svg x="0" y="0" viewBox="0 0 360 220">
                        <g>
                            <path fill="#ae003d" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                L0.732,193.75z"></path>
                        </g>
                        <text transform="matrix(1 0 0 1 25.7256 60.2686)" fill="#fff" font-size="29.4128">Професії</text>
                        <text transform="matrix(0.9566 0 0 1 65.7256 110.2686)" fill="#fff" font-size="29.4128">будуть боротися</text>
                        <text transform="matrix(1 0 0 1 145.9629  160.2686)" fill="#fff" font-size="29.4128">за твій вибір</text>
                    </svg>
                    <div class="pricing-content">
                        <h3 class="title">Турнір <br>професій</h3>
                        <ul class="pricing-content">
                            <li>&nbsp;</li>

                        </ul>
                        <?
                        if((isset($_COOKIE["id"])) and (!empty($_COOKIE["id"]))) {
                            echo '<a target="_blank" href = "ring.php" class="pricingTable-signup" data-toggle = "tooltip" data-placement = "top" title = "Турнір професій"> Перейти</a>';
                        }
                        else {
                            echo '<a href = "#" class="pricingTable-signup" data-toggle = "tooltip" data-placement = "top" title = "Необхідно зареєструватися"> Перейти</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-sm-4">
            <div class="pricingTable blue">
                <div class="thumb">
                    <svg x="0" y="0" viewBox="0 0 360 220">
                        <g>
                            <path fill="#005c99" d="M0.732,193.75c0,0,29.706,28.572,43.736-4.512c12.976-30.599,37.005-27.589,44.983-7.061
                                c8.09,20.815,22.83,41.034,48.324,27.781c21.875-11.372,46.499,4.066,49.155,5.591c6.242,3.586,28.729,7.626,38.246-14.243
                                s27.202-37.185,46.917-8.488c19.715,28.693,38.687,13.116,46.502,4.832c7.817-8.282,27.386-15.906,41.405,6.294V0H0.48
                                L0.732,193.75z"></path>
                        </g>
                        <text transform="matrix(1 0 0 1 25.7256 60.2686)" fill="#fff" font-size="29.4128">Вибери професію</text>
                        <text transform="matrix(0.9566 0 0 1 95.7256 110.2686)" fill="#fff" font-size="29.4128">та дізнайся</text>
                        <text transform="matrix(1 0 0 1 145.9629  160.2686)" fill="#fff" font-size="29.4128">де навчатися</text>

                    </svg>
                    <div class="pricing-content">
                        <h3 class="title">Моя<br> кар'єра</h3>
                        <ul class="pricing-content">
                            <li> &nbsp;</li>

                        </ul>
                        <?
                        if((isset($_COOKIE["id"])) and (!empty($_COOKIE["id"]))) {
                            echo '<a target="_blank" href = "user.php" class="pricingTable-signup" data-toggle = "tooltip" data-placement = "top" title = "Перехід в особистий кабінет"> Перейти</a>';
                        }
                        else {
                            echo '<a href = "#" class="pricingTable-signup" data-toggle = "tooltip" data-placement = "top" title = "Необхідно зареєструватися"> Перейти</a>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2 col-sm-2">
        </div>
    </div>
</div>