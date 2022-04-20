<div class="ts-popup-wrapper">
    <div class="ts-popup">
        <svg class="ts-svg-icon-popup" viewBox="0 0 20 20">
            <path fill="none"
                  d="M15.898,4.045c-0.271-0.272-0.713-0.272-0.986,0l-4.71,4.711L5.493,4.045c-0.272-0.272-0.714-0.272-0.986,0s-0.272,0.714,0,0.986l4.709,4.711l-4.71,4.711c-0.272,0.271-0.272,0.713,0,0.986c0.136,0.136,0.314,0.203,0.492,0.203c0.179,0,0.357-0.067,0.493-0.203l4.711-4.711l4.71,4.711c0.137,0.136,0.314,0.203,0.494,0.203c0.178,0,0.355-0.067,0.492-0.203c0.273-0.273,0.273-0.715,0-0.986l-4.711-4.711l4.711-4.711C16.172,4.759,16.172,4.317,15.898,4.045z"></path>
        </svg>
        <span class="ts-clear-list">Clear All</span>
        <p class="ts-popup-title">Select destinations</p>
        <p class="ts-popup-subtitle"> <?= esc_html( $result['name'] ) ?> (<?= esc_html( $result['code'] ) ?>) </p>
        <ul class="ts-vacation-popup-multi-select-countries-ul multi-select-countries">

        </ul>
        <div class="ts-tab ts-parent">
            <ul class="ts-tab-nav">
				<?php
				$count = count( $result );
				for ( $c = 0; $c < $count - 2; $c ++ ) {
					?>
                    <li class="ts-tab-nav-item <?= $c == 0 ? 'ts-active' : '' ?>"><a class="ts-tab-nav-link" href="#">
                            <span class="ts-text-black ts-py"><?= esc_html( $result[ $c ]['name'] ) ?></span>
                        </a></li>
				<?php } ?>
            </ul>
            <input class="ts-input ts-vacations-search-popup" type="text" placeholder="Type here to filter search"/>
            <div class="ts-tab-body ts-popup-overflow">

				<?php
				for ( $i = 0; $i < $count - 2; $i ++ ) {
					?>
                    <div class="ts-tab-pane <?= $i == 0 ? 'ts-active' : '' ?>">
						<?php
						for ( $j = 0; $j < count( $result[ $i ]['countries'] ); $j ++ ) {
							?>
                            <div class="ts-clear">
                                <a href="#"
                                   class="all-cities ts-py ts-text-black ts-block" data-remove="false" data-check="false"><?= $result[ $i ]['countries'][ $j ]['name'] ?></a>
                                <div class="ts-wrapper-chekbox">
									<?php
									$cities = count( $result[ $i ]['countries'][ $j ]['cities'] );
									for ( $k = 0; $k < $cities; $k++ ) {
                                        $city_id=intval($result[ $i ]['countries'][ $j ]['cities'][ $k ]['id']);
                                        $city_name=esc_html($result[ $i ]['countries'][ $j ]['cities'][ $k ]['name']);
                                        echo "<div>";
                                        echo "<input type='checkbox' id='{$city_id}'>";
                                        echo "<label for='{$city_id}'>";
                                        echo "<span>{$city_name}</span></label></div>";
									 } ?>
                                </div>
                            </div>
						<?php } ?>
                    </div>
				<?php } ?>
            </div>
        </div>
        <div class="ts-py">
            <button class="ts-vacation-popup-btn ts-btn-trip ">done</button>
        </div>

    </div>
</div>

