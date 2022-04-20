<div class="ts-d-flex ts-m-block">
    <div class="ts-col-half ts-col-m-full  ts-pr ts-py-m">
        <input id="vacation-from-desktop" name="vacation-from-desktop" type="text" placeholder="Departing From?">
    </div>
    <div class="ts-col-half ts-col-m-full ts-pl ts-pl-m ts-py-m">
        <input id="vacation-to-desktop" name="vacation-to-desktop" type="text" placeholder="Going To?">
    </div>
</div>
<div class="ts-d-flex ts-pt  ts-m-none">
    <div class="ts-col-half"></div>
    <div class="ts-col-half">
        <div class="ts-container-arrow">
            <a id="ts-popup" href="#"> Select multiple destinations </a>
            <span class="ts-spn-arrow">Try This</span>
        </div>

    </div>

</div>
<div class="ts-d-flex ts-m-block ts-py">
    <div class="ts-col-half ts-col-m-full ts-pr-m ts-pr">
        <div class="ts-d-flex ts-py-m">
            <div class="ts-col-half ts-pr-half">
                <div class="ts-calendar" id="dp-vd">
                    <svg height="24" style="cursor: pointer;" viewBox="0 0 24 24" width="24"
                         xmlns="http://www.w3.org/2000/svg" aria-expanded="false">
                        <path d="M9 11H7v2h2v-2zm4 0h-2v2h2v-2zm4 0h-2v2h2v-2zm2-7h-1V2h-2v2H8V2H6v2H5c-1.11 0-1.99.9-1.99 2L3 20c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 16H5V9h14v11z"></path>
                        <path d="M0 0h24v24H0z" fill="none"></path>
                    </svg>
                    <input class="ts-vacation-date-picker" data-toggle="datepicker" placeholder="Departure"
                           readonly="readonly">
                </div>
            </div>
            <div class="ts-col-half ts-pl-half ">
                <div class="ts-dropdown">
                    <p class="ts-spn-fixed">Duration</p>
                    <div class="ts-select ts-select-custom">
                        <span >3 or 4 days</span>
                        <i></i>
                    </div>
                    <input type="hidden"  id="ts-vacation-select-duration" value="3,4">
                    <ul class="ts-vacation-ul-duration ts-dropdown-menu">
                        <li id="3,4"> 3 or 4 days</li>
                        <li id="5,6"> 5 or 6 days</li>
                        <li id="7,8">7 or 8 days</li>
                        <li id="9,10">9 or 10 days</li>
                        <li id="10,11">10 or 11 days</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="ts-col-half ts-col-m-full ts-pl-m  pl">
        <div class="ts-d-flex ts-py-m">
            <div class="ts-col-half ts-pr-half">
                <div class="ts-dropdown">
                    <p class="ts-spn-fixed">Rooms:</p>
                    <div class="ts-select ts-select-custom">
                        <span id="ts-vacation-select-rooms">1</span>
                        <i></i>
                    </div>
                    <input type="hidden" name="gender">
                    <ul class="ts-vacation-ul-rooms ts-dropdown-menu">
                        <li id="1">1</li>
                        <li id="2">2</li>
                        <li id="3">3</li>
                        <li id="4">4</li>
                        <li id="5">5</li>
                    </ul>
                </div>

            </div>
            <div class="ts-col-half ts-pl-half ">
                <div class="ts-div-dropdown">
                    <div class="ts-div-select">
                        <span class="ts-vacations-travellers ts-pr-half">1 </span><span>Traveller(s) </span>
                    </div>
                    <div class="ts-div-dropdown-menu">
                        <div class="ts-error">
                            <p id="error-passengers" class="ts-d-none">
                                Sorry, you can only book a maximum of 6 passengers in an online booking.
                            </p>
                            <p id="error-rooms" class="ts-d-none">
                                Sorry, the adult occupancy must be consistent for all rooms in an online booking.
                            </p>
                             <p id="error-rooms-child" class="ts-d-none">
                            Sorry, You cannot book children with multiple rooms
                            </p>
                        </div>
                        <div class="ts-d-flex ts-py">
                            <div class="ts-col-half ts-pr">
                                <div class="ts-dropdown">
                                    <p class="ts-fixed">Adults</p>
                                    <div class="ts-select">
                                        <span class="ts-vacation-select-adults-d">1</span>
                                        <i></i>
                                    </div>
                                    <input type="hidden" name="gender">
                                    <ul class="ts-vacation-ul-adults ts-dropdown-menu ts-child-dropdown">
                                        <li id="1">1</li>
                                        <li id="2">2</li>
                                        <li id="3">3</li>
                                        <li id="4">4</li>
                                        <li id="5">5</li>
                                        <li id="6">6</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ts-col-half pl">
                                <div class="ts-dropdown">
                                    <p class="ts-fixed">Children</p>
                                    <div class="ts-select">
                                        <span class="ts-vacation-select-children">0</span>
                                        <i></i>
                                    </div>
                                    <input type="hidden" name="gender">
                                    <ul id="ts-select-vacation-children" class="ts-dropdown-menu ts-child-dropdown">
                                        <li id="0">0</li>
                                        <li id="1">1</li>
                                        <li id="2">2</li>
                                        <li id="3">3</li>
                                        <li id="4">4</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ts-d-flex ts-container-children">
                            <div  class="ts-col-half ts-pr">
                                <div id="children-1" class="ts-dropdown ts-d-none">
                                    <p class="ts-fixed">Child Age</p>
                                    <div class="ts-select">
                                        <span class="ts-vacation-select-children-1">1</span>
                                        <i></i>
                                    </div>
                                    <input type="hidden" class="ts-vacation-val-children-1" value="1">
                                    <ul id="ts-select-vacation-children-1" class="ts-dropdown-menu ts-child-dropdown">
                                        <li id="1">1</li>
                                        <li id="2">2</li>
                                        <li id="3">3</li>
                                        <li id="4">4</li>
                                        <li id="5">5</li>
                                        <li id="6">6</li>
                                        <li id="7">7</li>
                                        <li id="8">8</li>
                                        <li id="9">9</li>
                                        <li id="10">10</li>
                                        <li id="11">11</li>
                                        <li id="12">12</li>
                                        <li id="13">13</li>
                                        <li id="14">14</li>
                                        <li id="15">15</li>
                                        <li id="16">16</li>
                                        <li id="17">17</li>
                                    </ul>
                                </div>
                            </div>
                            <div  class="ts-col-half pl">
                                <div id="children-2" class="ts-dropdown ts-d-none">
                                    <p class="ts-fixed">Child Age</p>
                                    <div class="ts-select">
                                        <span id="ts-vacation-select-children-2">1</span>
                                        <i></i>
                                    </div>
                                    <input type="hidden" class="ts-vacation-val-children-2" value="1">
                                    <ul id="ts-select-vacation-children-2" class="ts-dropdown-menu ts-child-dropdown">
                                        <li id="1">1</li>
                                        <li id="2">2</li>
                                        <li id="3">3</li>
                                        <li id="4">4</li>
                                        <li id="5">5</li>
                                        <li id="6">6</li>
                                        <li id="7">7</li>
                                        <li id="8">8</li>
                                        <li id="9">9</li>
                                        <li id="10">10</li>
                                        <li id="11">11</li>
                                        <li id="12">12</li>
                                        <li id="13">13</li>
                                        <li id="14">14</li>
                                        <li id="15">15</li>
                                        <li id="16">16</li>
                                        <li id="17">17</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ts-d-flex ts-container-children">
                            <div  class="ts-col-half ts-pr">
                                <div id="children-3" class="ts-dropdown ts-d-none">
                                    <p class="ts-fixed">Child Age</p>
                                    <div class="ts-select">
                                        <span class="ts-vacation-select-children-3">1</span>
                                        <i></i>
                                    </div>
                                    <input type="hidden" class="ts-vacation-val-children-3" value="1">
                                    <ul id="ts-select-vacation-children-3" class="ts-dropdown-menu ts-child-dropdown">
                                        <li id="1">1</li>
                                        <li id="2">2</li>
                                        <li id="3">3</li>
                                        <li id="4">4</li>
                                        <li id="5">5</li>
                                        <li id="6">6</li>
                                        <li id="7">7</li>
                                        <li id="8">8</li>
                                        <li id="9">9</li>
                                        <li id="10">10</li>
                                        <li id="11">11</li>
                                        <li id="12">12</li>
                                        <li id="13">13</li>
                                        <li id="14">14</li>
                                        <li id="15">15</li>
                                        <li id="16">16</li>
                                        <li id="17">17</li>
                                    </ul>
                                </div>
                            </div>
                            <div  class="ts-col-half pl">
                                <div id="children-4" class="ts-dropdown ts-d-none">
                                    <p class="ts-fixed">Child Age</p>
                                    <div class="ts-select">
                                        <span id="ts-vacation-select-children-4">1</span>
                                        <i></i>
                                    </div>
                                    <input type="hidden" class="ts-vacation-val-children-4" value="1">
                                    <ul id="ts-select-vacation-children-4" class="ts-dropdown-menu ts-child-dropdown">
                                        <li id="1">1</li>
                                        <li id="2">2</li>
                                        <li id="3">3</li>
                                        <li id="4">4</li>
                                        <li id="5">5</li>
                                        <li id="6">6</li>
                                        <li id="7">7</li>
                                        <li id="8">8</li>
                                        <li id="9">9</li>
                                        <li id="10">10</li>
                                        <li id="11">11</li>
                                        <li id="12">12</li>
                                        <li id="13">13</li>
                                        <li id="14">14</li>
                                        <li id="15">15</li>
                                        <li id="16">16</li>
                                        <li id="17">17</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div>
                            <a id="ts-btn-vacation-done" href="#" class="ts-btn-trip ts-btn-close">done</a>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="ts-d-flex ts-m-block ts-pt  ">
    <div class="ts-col-half ts-col-m-full ts-py-m">
        <div class="ts-checkbox">
            <input type="checkbox" id="chk-allInclusive" name="" value="">
            <label for="chk-allInclusive"><span>All Inclusive Only</span></label>
        </div>
    </div>
    <div class="ts-col-half ts-col-m-full ts-py-m">
        <button id="ts-btn-vacation" class="ts-btn-trip" disabled="disabled"> Search Vacations
            <svg height="24" viewBox="0 0 24 24" width="24"
                 xmlns="http://www.w3.org/2000/svg">
                <path
                        d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                <path d="M0 0h24v24H0z" fill="none"></path>
            </svg>
        </button>
    </div>
</div>