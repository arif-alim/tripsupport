<?php
wp_head();
?>
    <section class="ts-vacations">
        <h2 class="ts-vacations-title">Featured Vacations</h2>
        <div class="ts-container">
            <svg id="stars" style="display: none;" version="1.1">
                <symbol id="stars-full-star" viewBox="0 0 102 18">
                    <path d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792 5.657 6.243.907-4.517 4.404 1.066 6.218"/>
                </symbol>

                <symbol id="stars-half-star" viewBox="0 0 102 18">
                    <path d="M9.5 14.25l-5.584 2.936 1.066-6.218L.465 6.564l6.243-.907L9.5 0l2.792" fill="#fc0"/>
                </symbol>

                <symbol id="stars-all-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-full-star"/>
                    <use xlink:href="#stars-full-star" transform="translate(21)"/>
                    <use xlink:href="#stars-full-star" transform="translate(42)"/>
                    <use xlink:href="#stars-full-star" transform="translate(63)"/>
                    <use xlink:href="#stars-full-star" transform="translate(84)"/>
                </symbol>

                <symbol id="stars-0-0-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-all-star" fill="#d3d3d3"/>
                </symbol>

                <symbol id="stars-0-5-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-0-0-star"/>
                    <use xlink:href="#stars-half-star"/>
                </symbol>

                <symbol id="stars-1-0-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-0-0-star"/>
                    <use xlink:href="#stars-full-star" fill="#fc0"/>
                </symbol>

                <symbol id="stars-1-5-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-1-0-star"/>
                    <use xlink:href="#stars-half-star" transform="translate(21)"/>
                </symbol>

                <symbol id="stars-2-0-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-1-0-star"/>
                    <use xlink:href="#stars-full-star" fill="#fc0" transform="translate(21)"/>
                </symbol>

                <symbol id="stars-2-5-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-2-0-star"/>
                    <use xlink:href="#stars-half-star" transform="translate(42)"/>
                </symbol>

                <symbol id="stars-3-0-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-2-0-star"/>
                    <use xlink:href="#stars-full-star" fill="#fc0" transform="translate(42)"/>
                </symbol>

                <symbol id="stars-3-5-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-3-0-star"/>
                    <use xlink:href="#stars-half-star" transform="translate(63)"/>
                </symbol>

                <symbol id="stars-4-0-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-3-0-star"/>
                    <use xlink:href="#stars-full-star" fill="#fc0" transform="translate(63)"/>
                </symbol>

                <symbol id="stars-4-5-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-4-0-star"/>
                    <use xlink:href="#stars-half-star" transform="translate(84)"/>
                </symbol>

                <symbol id="stars-5-0-star" viewBox="0 0 102 18">
                    <use xlink:href="#stars-all-star" fill="#fc0"/>
                </symbol>
            </svg>
            <div class="ts-d-flex ts-m-block">
                <div class="ts-col-third ts-col-m-full ts-p-card">
                    <div class=" ts-card">

                        <img class="ts-img-card" alt="Vacation Offer"
                             src="<?php echo $data[$packages[0]]['packageList'][0]['package']['hotel']['image'] ?>">
                        <h3 class="ts-title-card"><?php echo $packages[0]; ?></h3>
	                    <?php
	                    for ($i = 0; $i <= 2; $i++) {
		                    ?>
                            <div class="ts-card-body">
                                <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[0]]['loadMoreLink'] ?>"
                                   class="ts-body-title"> <?php echo $data[$packages[0]]['packageList'][$i]['package']['hotel']['name'] ?></a>
                                <svg class="ts-svg-icon-star">
                                    <use xlink:href="#stars-<?php echo \Inc\Api\Util::get_star($data[$packages[0]]['packageList'][$i]['package']['hotel']['star'])[0] ?>-<?php echo \Inc\Api\Util::get_star($data[$packages[0]]['packageList'][$i]['package']['hotel']['star'])[1] ?>-star">
                                </svg>
                                <p class="ts-body-room"><?php echo $data[$packages[0]]['packageList'][$i]['package']['hotel']['meal']['description'] ?> | <?php echo $data[$packages[0]]['packageList'][$i]['package']['hotel']['room']['description'] ?></p>
                                <p class="ts-body-date"><?php echo \Inc\Api\Util::show_dateTime($data[$packages[0]]['packageList'][$i]['package']['departureDate']) ?>
                                    | <?php echo $data[$packages[0]]['packageList'][$i]['package']['duration'] ?> days</p>
                                <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[0]]['packageList'][$i]['vacationSearchUrl'] ?>"
                                   class="ts-body-from-to">
                                    Toronto to <?php echo $data[$packages[0]]['packageList'][$i]['package']['city'] ?>
                                    , <?php echo $data[$packages[0]]['packageList'][$i]['package']['country'] ?>
                                </a>
                                <span class="ts-body-price"> CA$<?php echo $data[$packages[0]]['packageList'][$i]['package']['price']['perAdult'] ?> </span>
                            </div>
		                    <?php
	                    }
	                    ?>
                        <div class="ts-card-link">
                            <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[0]]['loadMoreLink'] ?>">VIEW MORE</a>
                        </div>
                    </div>
                </div>
                <div class="ts-col-third ts-col-m-full ts-p-card">
                    <div class=" ts-card">
                        <img class="ts-img-card" alt="Vacation Offer"
                             src="<?php echo $data[$packages[2]]['packageList'][0]['package']['hotel']['image'] ?>">
                        <h3 class="ts-title-card"><?php echo $packages[2]; ?></h3>
	                    <?php
	                    for ($i = 0; $i <= 2; $i++) {
		                    ?>
                            <div class="ts-card-body">
                                <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[2]]['loadMoreLink'] ?>"
                                   class="ts-body-title"> <?php echo $data[$packages[2]]['packageList'][$i]['package']['hotel']['name'] ?></a>
                                <svg class="ts-svg-icon-star">
                                    <use xlink:href="#stars-<?php echo \Inc\Api\Util::get_star($data[$packages[2]]['packageList'][$i]['package']['hotel']['star'])[0] ?>-<?php echo \Inc\Api\Util::get_star($data[$packages[2]]['packageList'][$i]['package']['hotel']['star'])[1] ?>-star">
                                </svg>
                                <p class="ts-body-room"><?php echo $data[$packages[2]]['packageList'][$i]['package']['hotel']['meal']['description'] ?> | <?php echo $data[$packages[2]]['packageList'][$i]['package']['hotel']['room']['description'] ?></p>
                                <p class="ts-body-date"><?php echo \Inc\Api\Util::show_dateTime($data[$packages[2]]['packageList'][$i]['package']['departureDate']) ?>
                                    | <?php echo $data[$packages[2]]['packageList'][$i]['package']['duration'] ?> days</p>
                                <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[2]]['packageList'][$i]['vacationSearchUrl'] ?>"
                                   class="ts-body-from-to">
                                    Toronto to <?php echo $data[$packages[2]]['packageList'][$i]['package']['city'] ?>
                                    , <?php echo $data[$packages[2]]['packageList'][$i]['package']['country'] ?>
                                </a>
                                <span class="ts-body-price"> CA$<?php echo $data[$packages[2]]['packageList'][$i]['package']['price']['perAdult'] ?> </span>
                            </div>
		                    <?php
	                    }
	                    ?>
                        <div class="ts-card-link">
                            <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[2]]['loadMoreLink'] ?>">VIEW MORE</a>
                        </div>
                    </div>

                </div>
                <div class="ts-col-third ts-col-m-full ts-p-card">
                    <div class=" ts-card">
                        <img class="ts-img-card" alt="Vacation Offer"
                             src="<?php echo $data[$packages[1]]['packageList'][0]['package']['hotel']['image'] ?>">
                        <h3 class="ts-title-card"><?php echo $packages[1]; ?></h3>
	                    <?php
	                    for ($i = 0; $i <= 2; $i++) {
		                    ?>
                            <div class="ts-card-body">
                                <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[1]]['loadMoreLink'] ?>"
                                   class="ts-body-title"> <?php echo $data[$packages[1]]['packageList'][$i]['package']['hotel']['name'] ?></a>
                                <svg class="ts-svg-icon-star">
                                    <use xlink:href="#stars-<?php echo \Inc\Api\Util::get_star($data[$packages[1]]['packageList'][$i]['package']['hotel']['star'])[0] ?>-<?php echo \Inc\Api\Util::get_star($data[$packages[1]]['packageList'][$i]['package']['hotel']['star'])[1] ?>-star">
                                </svg>
                                <p class="ts-body-room"><?php echo $data[$packages[1]]['packageList'][$i]['package']['hotel']['meal']['description'] ?> | <?php echo $data[$packages[1]]['packageList'][$i]['package']['hotel']['room']['description'] ?></p>
                                <p class="ts-body-date"><?php echo \Inc\Api\Util::show_dateTime($data[$packages[1]]['packageList'][$i]['package']['departureDate']) ?>
                                    | <?php echo $data[$packages[1]]['packageList'][$i]['package']['duration'] ?> days</p>
                                <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[1]]['packageList'][$i]['vacationSearchUrl'] ?>"
                                   class="ts-body-from-to">
                                    Toronto to <?php echo $data[$packages[1]]['packageList'][$i]['package']['city'] ?>
                                    , <?php echo $data[$packages[1]]['packageList'][$i]['package']['country'] ?>
                                </a>
                                <span class="ts-body-price"> CA$<?php echo $data[$packages[1]]['packageList'][$i]['package']['price']['perAdult'] ?> </span>
                            </div>
		                    <?php
	                    }
	                    ?>
                        <div class="ts-card-link">
                            <a href="https://tripsupport.ca/vacation?<?php echo $data[$packages[1]]['loadMoreLink'] ?>">VIEW MORE</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
<?php
wp_footer();
?>