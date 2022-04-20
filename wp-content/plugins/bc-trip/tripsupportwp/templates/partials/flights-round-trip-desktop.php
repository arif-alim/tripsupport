<div class="ts-d-flex ts-m-block ts-py">
    <div class="ts-col-half ts-pr ts-pr-m  ts-col-m-full ts-py-m">
        <div id="the-basics" >
            <input class="ts-flights-round-trip-from" type="text" placeholder="Departing From?">
        </div>
    </div>
    <div class="ts-col-half ts-pl ts-pl-m ts-col-m-full ts-py-m">
        <input class="ts-flights-round-trip-go-to" type="text" placeholder="Going To?">
    </div>
</div>
<div class="ts-d-flex ts-m-block ts-py">
    <div class="ts-col-half ts-col-m-full  ts-pr ts-pr-m">
        <div class="ts-d-flex ts-py-m">
            <div class="ts-col-half ts-pr-half">
                <div class="ts-calendar" id="dp-rtd">
                    <input class="ts-flights-round-trip-dp-departure" data-toggle="datepicker" placeholder="Departure"
                           readonly="readonly">
                    <svg height="24" style="cursor: pointer;" viewBox="0 0 24 24" width="24" data-method="show"
                         xmlns="http://www.w3.org/2000/svg" aria-expanded="false">
                        <path
                                d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path>
                        <path d="M0 0h24v24H0z" fill="none"></path>
                    </svg>
                </div>
            </div>
            <div class="ts-col-half ts-pl-half ">
                <div class="ts-calendar" id="dp-rtr">
                    <svg height="24" style="cursor: pointer;" viewBox="0 0 24 24" width="24"
                         xmlns="http://www.w3.org/2000/svg" aria-expanded="false">
                        <path
                                d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path>
                        <path d="M0 0h24v24H0z" fill="none"></path>
                    </svg>
                    <input class="ts-flights-round-trip-dp-return" data-toggle="datepicker" placeholder="Return"
                           readonly="readonly">
                </div>
            </div>
        </div>
    </div>
    <div class="ts-col-half ts-col-m-full ts-pl ts-pl-m ">

        <div class="ts-d-flex ts-py-m">
            <div class="ts-col-half ts-pr-half">
                <div class="ts-div-dropdown">
                    <div class="ts-div-select">
                        <span class="ts-flights-round-trip-travellers ts-pr-half">1 </span> <span> Traveller(s) </span>

                    </div>
                    <div class="ts-div-dropdown-menu">
                        <span> Traveller(s) </span>
                        <div>
                            <p><input class="ts-flights-round-trip-adult ts-spinner" type="nuts-pyer" value="1" min="1"
                                      max="8" step="1"/></p>
                            <p><input class="ts-flights-round-trip-adult-child ts-spinner" type="nuts-pyer" value="0" min="0"
                                      max="8" step="1"/></p>
                            <p><input class="ts-flights-round-trip-adult-infant ts-spinner" type="nuts-pyer" value="0" min="0"
                                      max="2" step="1"/></p>
                        </div>
                        <div>
                            <a href="#" class="ts-btn-trip ts-btn-close">done</a>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ts-col-half ts-pl-half ">
                <div class="ts-dropdown">
                    <div class="ts-select">
                        <span class="ts-flights-round-trip-airline-class">Economy</span>
                        <i></i>
                    </div>
                    <input class=" ts-flights-round-trip-airline-class-value" type="hidden" name="gender">
                    <ul class="ts-flights-round-trip-ul-airline-class ts-dropdown-menu">
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
<div class="ts-d-flex ts-m-block ts-pt ">
    <div class="ts-col-half ts-col-m-full ts-py-m">
        <div class="ts-checkbox">
            <input class="ts-flights-round-trip-flexsearch" type="checkbox"  >
            <label for="checkbox"><span>Flexible Search(+/-3 days)</span></label>
        </div>
    </div>
    <div class="ts-col-half ts-col-m-full ts-py-m">
        <button class="ts-flights-round-trip-btn ts-btn-trip"> Search Flights
            <svg height="24" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                <path d="M0 0h24v24H0z" fill="none"></path>
            </svg>
        </button>
    </div>
</div>


