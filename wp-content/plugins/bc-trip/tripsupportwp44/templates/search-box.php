<section>
    <div class="ts-searchbox">
        <div class="ts-searchbox-title">
            <h1>Book Now and Pay Later on your next Flight</h1>
            <h6>Secure your ticket with a small deposit. <b>No Credit Check Needed.</b></h6>
        </div>

        <div class="ts-tab ts-parent">
            <ul class="ts-tab-nav">
                <li class="ts-tab-nav-item ts-active"><a class="ts-tab-nav-link" href="#">
                        <svg enable-background="new 0 0 24 24"
                             height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                            <g>
                                <path
                                        d="M22,16v-2l-8.5-5V3.5C13.5,2.67,12.83,2,12,2s-1.5,0.67-1.5,1.5V9L2,14v2l8.5-2.5V19L8,20.5L8,22l4-1l4,1l0-1.5L13.5,19 v-5.5L22,16z"
                                        fill="currentColor"></path>
                                <path d="M0,0h24v24H0V0z" fill="none"></path>
                            </g>
                        </svg>
                        <span>Flights</span>
                    </a></li>
                <li class="ts-tab-nav-item"><a class="ts-tab-nav-link" href="#">
                        <svg aria-hidden="true" data-icon="tree-palm" data-ts-prefix="fas" focusable="false" height="24"
                             role="img" viewBox="0 0 640 512" width="24" xmlns="http://www.w3.org/2000/svg">
                            <path
                                    d="M448.76 64c-39.43 0-75.06 11.74-103 30.5C327.14 40.17 265.37 0 191.24 0c-80.62 0-147.37 47.24-159 108.86C30.39 118.79 38.75 128 50 128h54l24-48 33.46 66.92c-3.53 3.07-7.28 5.69-10.66 9.07C93.8 213 80 293.6 115.37 345.38c5.7 8.34 18.12 8.94 26.07 1l146.13-146.14c10.72 104.75-11.42 215-25.85 272.15C256.64 492.52 272 512 292.8 512h55.13c15.75 0 29.67-11.37 31.71-27 14.79-113.47-11.57-236.34-26.41-293H488l24-48 24 48h54c11.25 0 19.61-9.21 17.74-19.14C596.13 111.24 529.38 64 448.76 64z"
                                    fill="currentColor"></path>
                        </svg>
                        <span>Vacations</span>
                    </a></li>
            </ul>
            <div class="ts-tab-body">
                <div class="ts-tab-pane ts-active">
	                <?php
	                require_once($this->plugin_path."templates/partials/main-flights-desktop.php");
	                ?>
                </div>
                <div class="ts-tab-pane">
                   <?php
                   require_once($this->plugin_path."templates/partials/main-vacations-desktop.php");
                   ?>
                </div>

            </div>
        </div>



    </div>
</section>

<div class="ts-popup-wrapper-main">

</div>

<script>


</script>