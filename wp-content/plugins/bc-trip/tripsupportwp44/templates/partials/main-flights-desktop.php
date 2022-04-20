<div class="ts-tab ts-children">
	<ul class="ts-tab-nav ">
		<li class="ts-tab-nav-item ts-active"><a class="ts-tab-nav-link" href="#">Round Trip</a></li>
		<li class="ts-tab-nav-item"><a class="ts-tab-nav-link" href="#">One Way</a></li>
		<li class="ts-tab-nav-item"><a class="ts-tab-nav-link" href="#">Multi-City</a></li>
	</ul>
	<div class="ts-tab-body">
		<div class="ts-tab-pane ts-active">
			<?php
			require_once($this->plugin_path."templates/partials/flights-round-trip-desktop.php");
			?>
		</div>
		<div class="ts-tab-pane">
			<?php
			require_once($this->plugin_path."templates/partials/flights-one-way-desktop.php");
			?>
		</div>
		<div class="ts-tab-pane">
			<?php
			require_once($this->plugin_path."templates/partials/flights-multi-city-desktop.php");
			?>
		</div>
	</div>
</div>