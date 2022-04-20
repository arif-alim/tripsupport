<div class="ts-d-flex ts-m-block ts-py">
	<div class="ts-col-third ts-col-m-full ts-pr-half  ts-py-m  ts-py-m">
		<input type="text" placeholder="Departing From?">

	</div>
	<div class="ts-col-third ts-col-m-full ts-pl-half  ts-pl-m  ts-pr-half  ts-py-m">
		<input type="text" placeholder="Going To?">
	</div>
	<div class="ts-col-third ts-col-m-full ts-pl-half ts-pr ts-pl-m  ts-py-m ts-clear">
		<div class="ts-calendar" id="dp-mcd-1">

			<input data-toggle="datepicker" placeholder="Departure" readonly="readonly">
			<svg height="24" style="cursor: pointer;" viewBox="0 0 24 24" width="24"
			     xmlns="http://www.w3.org/2000/svg" aria-expanded="false">
				<path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path>
				<path d="M0 0h24v24H0z" fill="none"></path>
			</svg>

		</div>
		<svg class="ts-svg-icon-close" height="24" viewBox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg"><path  d="M19 6.41L17.59 5 12 10.59 6.41 5 5 6.41 10.59 12 5 17.59 6.41 19 12 13.41 17.59 19 19 17.59 13.41 12z"></path><path _ngcontent-alr-c5="" d="M0 0h24v24H0z" fill="none"></path></svg>

	</div>
</div>
<div class="ts-d-flex ts-m-block ts-py">
	<div class="ts-col-third ts-col-m-half ts-pr-half ts-py-m">
		<input type="text" placeholder="Departing From?">
	</div>
	<div class="ts-col-third ts-pl-half  ts-col-m-half ts-pr-half ts-pr-m ts-py-m">
		<input type="text" placeholder="Going To?">
	</div>
	<div class="ts-col-third ts-col-m-full ts-pl-half  ts-pl-m ts-pr  ts-clear ts-py-m">
		<div class="ts-calendar" id="dp-mcd-2">
			<svg height="24" style="cursor: pointer;" viewBox="0 0 24 24" width="24"
			     xmlns="http://www.w3.org/2000/svg" aria-expanded="false">
				<path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path>
				<path d="M0 0h24v24H0z" fill="none"></path>
			</svg>
			<input data-toggle="datepicker" placeholder="Departure" readonly="readonly">
		</div>
	</div>
</div>
<div class="ts-d-flex ts-m-block ts-py">
	<div class="ts-col-half ts-col-m-full ts-pr-m ts-pr ts-py-m">
		<a href="#" class="ts-btn-boder">+ Add another flight</a>
	</div>
	<div class="ts-col-half ts-pl ts-col-m-full ts-pl-m ">
		<div class="ts-d-flex ts-py-m">
			<div class="ts-col-half ts-pr-half">
                <div class="ts-div-dropdown">
                    <div class="ts-div-select">
                        <span> 1 Traveller(s) </span>
                        <i></i>
                    </div>
                    <div class="ts-div-dropdown-menu">
                        <h3> Traveller(s) </h3>
                        <div>
                            <p><input type="nuts-pyer" value="500" min="0"
                                      max="1000" step="10"/></p>
                            <p><input type="nuts-pyer" value="500" min="0"
                                      max="1000" step="10"/></p>
                            <p><input type="nuts-pyer" value="500" min="0"
                                      max="1000" step="10"/></p>
                        </div>
                        <div>
                            <a href="#" class="ts-btn-trip ts-btn-close">done</a>
                        </div>

                    </div>
                </div>
			</div>
			<div class="ts-col-half ts-pl-half   ts-pr">
				<div class="ts-pr-half">
					<div class="ts-dropdown">
						<div class="ts-select">
							<span>Economy</span>
							<i></i>
						</div>
						<input type="hidden" name="gender">
						<ul class="ts-dropdown-menu">
							<li id="Economy">Economy</li>
							<li id="Premium Economy">Premium Economy</li>
							<li id="Business">Business</li>
							<li id="First">First</li>
						</ul>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
<div class="ts-d-flex ts-m-block">
	<div class="ts-col-half">
	</div>
	<div class="ts-col-half ts-col-m-full ts-pr">
		<div class="ts-pr-half">
			<button class="ts-btn-trip"> Search Flights
				<svg height="24" viewBox="0 0 24 24" width="24"
				     xmlns="http://www.w3.org/2000/svg">
					<path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
					<path d="M0 0h24v24H0z" fill="none"></path>
				</svg>
			</button>
		</div>

	</div>
</div>