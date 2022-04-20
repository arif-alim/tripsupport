// Tabs
const tab = document.querySelectorAll('.ts-tab');

const onClickTabNavLink = () => {
    const tab = document.querySelectorAll('.ts-tab');

    Array.prototype.forEach.call(tab, e => {
        const tabNavLinks = e.querySelectorAll('.ts-tab-nav-link');

        Array.prototype.forEach.call(tabNavLinks, (e, tabIndex) => {
            e.addEventListener('click', event => {
                const tabPanes = e.closest('.ts-tab').querySelector('.ts-tab-body').children;
                const tabNavItems = e.closest('.ts-tab').querySelector('.ts-tab-nav').querySelectorAll('.ts-tab-nav-item');

                event.preventDefault();

                Array.prototype.forEach.call(tabNavItems, (e, indexNav) => {
                    if (indexNav === tabIndex) {
                        e.classList.add('ts-active');
                    } else {
                        e.classList.remove('ts-active');
                    }
                });

                Array.prototype.forEach.call(tabPanes, (e, indexPane) => {
                    if (indexPane === tabIndex) {
                        e.classList.add('ts-active');
                    } else {
                        e.classList.remove('ts-active');
                    }
                });
            }, false);
        });
    });
}

// Init
const init = () => {
    // Tabs Init
    onClickTabNavLink();
};

document.addEventListener('DOMContentLoaded', init);
/*end tab*/
/*picker*/
jQuery('#dp-rtd>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-rtd',
    format: 'yyyy-mm-dd',
    startDate: Date.now(),
    pick: function () {
        jQuery('#dp-rtr').click()
    }
});
jQuery('#dp-rtr>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-rtr',
    format: 'yyyy-mm-dd',
    startDate: Date.now(),
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-owd>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-owd',
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-mcd-1>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-mcd-1',
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-mcd-2>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-mcd-2',
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-vd>input[data-toggle="datepicker"]').datepicker({
    format: 'yyyy-mm-dd',
    trigger: '#dp-vd',
    startDate: Date.now(),
    pick: function () {
        jQuery('body').click()
    }
});


jQuery('#dp-rtd-m>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-rtd-m',
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-rtr-m>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-rtr-m',
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-owd-m>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-owd-m',
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-mcd-m-1>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-mcd-m-1',
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-mcd-m-2>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-mcd-m-2',
    pick: function () {
        jQuery('body').click()
    }
});
jQuery('#dp-vd-m>input[data-toggle="datepicker"]').datepicker({
    trigger: '#dp-vd-m',
    pick: function () {
        jQuery('body').click()
    }
});

/*end picker*/


/*Spinner*/
jQuery("input[type='nuts-pyer']").inputSpinner();
jQuery("input.ts-spinner").attr('readonly', true);
//jQuery(".ts-flights-round-trip-adult").parent().next('div').addClass()
/*end Spinner*/


/*Dropdown Menu   https://codepen.io/General-Dev/ets-pyed/JRjwPa?default-tab=result&theme-id=0*/
jQuery('.ts-dropdown').click(function () {
    jQuery(this).attr('tabindex', 1).focus();
    jQuery(this).toggleClass('ts-active');
    jQuery(this).find('.ts-dropdown-menu').slideToggle(300);
});
jQuery('.ts-dropdown').focusout(function () {
    jQuery(this).removeClass('ts-active');
    jQuery(this).find('.ts-dropdown-menu').slideUp(300);
});
jQuery('.ts-div-dropdown .ts-div-select').click(function () {
    jQuery(this).next('.ts-div-dropdown-menu').slideDown();
});
jQuery('.ts-btn-close').click(function (event) {
    jQuery(this).parents('.ts-div-dropdown-menu').slideUp();
    event.stopPropagation();
})
jQuery('.ts-vacation-ul-adults li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

    let adult = parseInt(jQuery('.ts-vacation-select-adults-d').text());
    let child = parseInt(jQuery('.ts-vacation-select-children').text());
    let rooms = parseInt(jQuery('#ts-vacation-select-rooms').text());

    if ((adult + child) > 6) {
        jQuery('#error-passengers').removeClass('ts-d-none');
    } else {
        jQuery('#error-passengers').addClass('ts-d-none');
    }

    if (((adult + child) % rooms) == 0) {
        jQuery('#error-rooms').addClass('ts-d-none');
    } else {
        jQuery('#error-rooms').removeClass('ts-d-none');
    }

    if (rooms > 1 && child > 0) {
        jQuery('#error-rooms-child').removeClass('ts-d-none');
    } else {
        jQuery('#error-rooms-child').addClass('ts-d-none');
    }

    jQuery('.ts-vacations-travellers').text(adult+child);

});
jQuery('#ts-select-vacation-children li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

    let adult = parseInt(jQuery('.ts-vacation-select-adults-d').text());
    let child = parseInt(jQuery('.ts-vacation-select-children').text());
    let rooms = parseInt(jQuery('#ts-vacation-select-rooms').text());

    if ((adult + child) > 6) {
        jQuery('#error-passengers').removeClass('ts-d-none');
    } else {
        jQuery('#error-passengers').addClass('ts-d-none');
    }

    if (((adult + child) % rooms) == 0) {
        jQuery('#error-rooms').addClass('ts-d-none');
    } else {
        jQuery('#error-rooms').removeClass('ts-d-none');
    }

   if (rooms > 1 && child > 0) {
        jQuery('#error-rooms-child').removeClass('ts-d-none');
    } else {
        jQuery('#error-rooms-child').addClass('ts-d-none');
    }

    jQuery('[id^=children-]').addClass('ts-d-none');
    if (child > 0) {
        for (let i = 0; i < child; i++) {
            let selectorChild = '#children-' + (i + 1);
            jQuery(selectorChild).removeClass('ts-d-none').parent().parent().addClass('ts-py');
        }
    }

    jQuery('.ts-vacations-travellers').text(adult+child);

});
jQuery('.ts-vacation-ul-rooms li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

    let adult = parseInt(jQuery('.ts-vacation-select-adults-d').text());
    let child = parseInt(jQuery('.ts-vacation-select-children').text());
    let rooms = parseInt(jQuery('#ts-vacation-select-rooms').text());

    if (((adult + child) % rooms) == 0) {
        jQuery('#error-rooms').addClass('ts-d-none');
        jQuery('.ts-div-dropdown-menu').slideUp();
    } else {
        jQuery('#error-rooms').removeClass('ts-d-none');
        jQuery('.ts-div-dropdown-menu').slideDown();
    }
   if (rooms > 1 && child > 0) {
        jQuery('#error-rooms-child').removeClass('ts-d-none');
    } else {
        jQuery('#error-rooms-child').addClass('ts-d-none');
    }

});

jQuery('.ts-flights-round-trip-ul-airline-class li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

});

jQuery('.ts-flights-one-way-ul-airline-class li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

});

jQuery('.ts-vacation-ul-duration li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

    console.log(jQuery('#ts-vacation-select-duration').val());
});

jQuery('.ts-vacation-select-rooms li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

});


jQuery('#ts-select-vacation-children-1 li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

});

jQuery('#ts-select-vacation-children-2 li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

});

jQuery('#ts-select-vacation-children-3 li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

});

jQuery('#ts-select-vacation-children-4 li').click(function () {

    jQuery(this).parents('.ts-dropdown').find('span').text(jQuery(this).text());
    jQuery(this).parents('.ts-dropdown').find('input').attr('value', jQuery(this).attr('id'));

});

/*End Dropdown Menu*/

let ts_vacation_popup_get_cities = [];

/*popup*/
jQuery('#ts-popup').on('click', function () {
    console.log('clicked');
    ts_vacation_popup_get_cities = [];
    if (jQuery('#vacation-from-desktop').val().trim()
        && Object.keys(states_get_departures).length != 0
        && states_get_departures.constructor != Object) {
        //
        let vfd = jQuery('#vacation-from-desktop').val();
        let item_vfd = states_get_departures.filter(c => c.name == vfd);
        if (item_vfd?.length) {
            let params_hierarchical_destinations = {
                'action': 'get_hierarchical_destinations',
                'codes': item_vfd[0].codes,
                'name': item_vfd[0].name
            };

            console.log(item_vfd)

            jQuery.post(ts_config.ajax_url, params_hierarchical_destinations, function (resp) {
                jQuery('.ts-popup-wrapper-main').html(resp);
                onClickTabNavLink();
                jQuery('.ts-svg-icon-popup').on('click', function () {
                    jQuery('.ts-popup-wrapper').fadeOut();
                })
                jQuery('.ts-wrapper-chekbox div').addClass('ts-checkbox ts-checkbox-gray');
                jQuery('.ts-wrapper-chekbox span').addClass('ts-text-black');

                jQuery('.ts-popup-wrapper').fadeIn();


                jQuery('.all-cities').on('click', function (e) {
                    e.preventDefault();
                    let chk = jQuery(this).data('check');
                    let chk_remove = jQuery(this).data('remove');
                    let checkboxes = jQuery(this).next().find('input[type=checkbox]');
                    checkboxes.prop('checked', !chk);
                    jQuery(this).data('check', !chk);

                    if (chk || chk_remove) {
                        jQuery(this).data('remove', false);
                        for (let i = 0; i < checkboxes.length; i++) {
                            let country_id = jQuery(checkboxes[i]).attr('id');
                            jQuery(checkboxes[i]).prop('checked', false);
                            let selector_li = `li#${country_id}`;
                            jQuery('.multi-select-countries ').find(selector_li).remove();
                        }
                    } else {
                        for (let i = 0; i < checkboxes.length; i++) {
                            let country_id = jQuery(checkboxes[i]).attr('id');
                            let country_name = jQuery(checkboxes[i]).next().find('span').text();
                            jQuery('.multi-select-countries').append(`<li class="${country_id}">${country_name}<i>×</i></li>`);
                        }
                    }
                })


                jQuery('input[type="checkbox"]').on('change', function (e) {
                    let checkbox = jQuery(this);
                    let checked = checkbox.prop('checked');

                    let country_id = checkbox.attr('id');
                    let country_name = checkbox.next().find('span').text();

                    if (checked) {
                        let check_all = jQuery(this).parent().parent().parent().find('.all-cities')[0];
                        console.log(check_all)
                        jQuery(check_all).data('remove', true);
                        jQuery('.multi-select-countries').append(`<li class="${country_id}">${country_name}<i>×</i></li>`);
                    } else {
                        let selector_li = `li#${country_id}`;
                        jQuery('.multi-select-countries ').find(selector_li).remove();
                    }

                })


                jQuery('.ts-clear-list').on('click', function () {
                    jQuery('.multi-select-countries').empty();
                    jQuery('input[type=checkbox]').prop('checked', false);
                })

                jQuery(".multi-select-countries").delegate("li i", "click", function () {
                    let parent= jQuery(this).parent();
                    jQuery('#'+parent.attr('class')).prop('checked', false);
                    parent.remove();
                })


                jQuery('.ts-vacation-popup-btn').on('click', function () {

                    //console.log('btn')

                    let popup_cities = jQuery('.ts-vacation-popup-multi-select-countries-ul').find('li');
                    for (let i = 0; i < popup_cities.length; i++) {
                        let city = jQuery(popup_cities[i]).attr('id');
                        ts_vacation_popup_get_cities.push(city);
                    }
                    jQuery('.ts-popup-wrapper').fadeOut();

                    //console.log(ts_vacation_popup_get_cities.join(','));
                    //jQuery('#vacation-to-desktop').val('Multiple Destinations');
                    jQuery('#vacation-to-desktop').typeahead('val', 'Multiple Destinations');
                    //console.log(jQuery('#vacation-to-desktop').val());
                    if (!ts_vacation_popup_get_cities) {
                        jQuery('#ts-btn-vacation').prop('disabled', true);
                    } else {
                        jQuery('#ts-btn-vacation').prop('disabled', false);
                    }

                })


            })


        }
    }

});

/*end popup*/


jQuery('#vacation-from-desktop,#vacation-to-desktop').on('blur input', function () {
    if (!jQuery('#vacation-from-desktop').val().trim() || !jQuery('#vacation-to-desktop').val().trim()) {
        jQuery('#ts-btn-vacation').prop('disabled', true);
    } else {
        jQuery('#ts-btn-vacation').prop('disabled', false);
    }
})


let btn_vacation = jQuery('#ts-btn-vacation').prop('disabled');

jQuery('#ts-btn-vacation').on('click', function () {
    let allInclusive = jQuery('#chk-allInclusive').prop('checked');
    let duration = jQuery('#ts-vacation-select-duration').val();
    let rooms = jQuery('#ts-vacation-select-rooms').text();
    let children = parseInt(jQuery('.ts-vacation-select-children').text());
    let adults = jQuery('.ts-vacation-select-adults-d').text();
    let departureDate = jQuery('.ts-vacation-date-picker').datepicker('getDate', true);


    let _children = [];


    for (i = 0; i < children; i++) {
        let el = '.ts-vacation-val-children-' + (i + 1);
        let item = jQuery(el).val();
        _children.push(item);
    }

    console.log(ts_vacation_popup_get_cities.join(','));
    if (ts_vacation_popup_get_cities.length > 0) {
        v_to = ts_vacation_popup_get_cities.toString();
    }


    if (btn_vacation) {
        let url = "https://tripsupport.ca/vacation?From=" + v_from;
        url += '&';
        url += 'To=';
        url += v_to;
        url += '&';
        url += 'DepartureDate=';
        url += departureDate;
        url += '&';
        url += 'Durations=';
        url += duration;
        url += '&';
        url += 'AllInclusive=';
        url += allInclusive;
        url += '&';
        url += 'NumberOfRooms=';
        url += rooms;
        url += '&';
        url += 'NumberOfAdults=';
        url += adults;
        url += '&';
        url += 'ChildrenAges=[';
        url += _children;
        url += ']';
        window.location.href = url;
    }
})


let v_from = '';
let v_to = '';
let states_get_departures;
let states_get_destinations;
let params_get_departures = {
    'action': 'get_departures',
};

jQuery('#vacation-from-desktop').on('blur input', function () {
    if (!jQuery(this).val().trim()) {
        states_get_departures = '';
        states_get_destinations = '';
        jQuery('#vacation-from-desktop').typeahead('val', '');
        jQuery('#vacation-to-desktop').typeahead('val', '');
        v_from = '';
        v_to = '';
    }
});

jQuery('#vacation-to-desktop').on('blur input', function () {
    if (!jQuery(this).val().trim()) {
        states_get_destinations = '';
        jQuery('#vacation-to-desktop').typeahead('val', '');
        v_to = '';
    }
});

jQuery.post(ts_config.ajax_url, params_get_departures, function (resp) {
    states_get_departures = JSON.parse(resp);

    console.log(JSON.parse(resp));

    let cities_from_vacation = new Bloodhound({
        datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
        queryTokenizer: Bloodhound.tokenizers.whitespace,
        local: states_get_departures
    });

    cities_from_vacation.initialize();

    jQuery('#vacation-from-desktop').typeahead(
        null, {
            name: 'cities_from_vacation',
            displayKey: 'name',
            source: cities_from_vacation.ttAdapter()
        }).on('typeahead:selected', function (event, data) {
        jQuery('#vacation-from-desktop').val(data.codes);
        states_get_destinations = '';
        v_from = data.codes;
        //console.log(v_from)
        jQuery('#vacation-to-desktop').typeahead('val', '');
    });
    jQuery('#vacation-from-desktop').bind('typeahead:select', function (ev, suggestion) {
        let data = JSON.parse(JSON.stringify(suggestion));
        let codes = data.codes;
        let name = data.name;
        let params_get_destinations = {
            'action': 'get_destinations',
            'codes': codes,
            'name': name
        };
        jQuery.post(ts_config.ajax_url, params_get_destinations, function (resp) {

            console.log(JSON.parse(resp));

            states_get_destinations = JSON.parse(resp);
            let cities_to_vacation = new Bloodhound({
                datumTokenizer: Bloodhound.tokenizers.obj.whitespace('name'),
                queryTokenizer: Bloodhound.tokenizers.whitespace,
                local: states_get_destinations
            });

            cities_to_vacation.initialize();

            jQuery('#vacation-to-desktop').typeahead(
                null, {
                    name: 'cities_to_vacation',
                    displayKey: 'name',
                    source: cities_to_vacation.ttAdapter()
                }).on('typeahead:selected', function (event, data) {
                v_to = data.ids;
                //console.log(v_to)
                jQuery('#vacation-to-desktop').val(data.ids);

            });

        });

    });
});

/*end search*/
/*custom tab mobile*/
jQuery('.ts-tab-nav-custom span').click(function () {
    const tab_parent_id = jQuery(this).attr('id');
    jQuery('.ts-tab-custom-body').removeClass('ts-active-tab');
    jQuery('.ts-tab-nav-custom span').removeClass('ts-nav-active');
    jQuery(this).addClass('ts-nav-active');
    jQuery('div[data-target="' + tab_parent_id + '"]').addClass('ts-active-tab');
});

jQuery('.ts-custom_radio input[type="radio"][name="tab"]').change(function () {
    const tab_id = jQuery('.ts-custom_radio input[type="radio"][name="tab"]:checked').attr('id');
    jQuery('.ts-tab-custom-child div').removeClass('ts-active-tab');
    jQuery('div[data-target="' + tab_id + '"]').addClass('ts-active-tab');

});


// round trip

let states_flights_round_trip_from = '';
let ts_flights_round_trip_from_an = '';
let ts_flights_round_trip_from = '';
let states_flights_round_trip_go_to = '';
let ts_flights_round_trip_go_to_an = '';
let ts_flights_round_trip_go_to = '';


jQuery('.ts-flights-round-trip-from').on('input', function () {
    if (!jQuery(this).val().trim()) {
        states_flights_round_trip_from = '';
        ts_flights_round_trip_from = '';
        ts_flights_round_trip_from_an = '';
        jQuery('.ts-flights-round-trip-from').typeahead('val', '');
        return;
    }

    let val_from = jQuery(this).val();

    let params_get_flights_round_trip = {
        'action': 'get_flights_round_trip',
        'code': val_from
    };


    jQuery.post(ts_config.ajax_url, params_get_flights_round_trip, function (resp) {

        console.log(JSON.parse(resp));

        jQuery('.ts-flights-round-trip-from').typeahead('destroy');

        states_flights_round_trip_from = JSON.parse(resp);
        let cities_flights_round_trip_from = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('an'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: states_flights_round_trip_from
        });

        cities_flights_round_trip_from.initialize();

        jQuery('.ts-flights-round-trip-from').typeahead(
            null, {
                name: 'cities_flights_round_trip_from',
                displayKey: 'an',
                source: cities_flights_round_trip_from.ttAdapter(),
                templates: {
                    suggestion: function (data) {
                        return '<div class="tt-suggestion ts-template"><span>' + data.cn + '</span><b>' + data.ct + ' (' + data.ac + ')</b><small>' + data.an + '</small></div>'
                    }
                }
            }).on('typeahead:selected', function (event, data) {
            ts_flights_round_trip_from = data.ac;
            ts_flights_round_trip_from_an = data.an;
            jQuery('.ts-flights-round-trip-from').val(data.ac);

        });
        jQuery('.ts-flights-round-trip-from').focus();
    });


});


jQuery('.ts-flights-round-trip-go-to').on('input', function () {
    if (!jQuery(this).val().trim()) {
        states_flights_round_trip_go_to = '';
        ts_flights_round_trip_go_to = '';
        ts_flights_round_trip_go_to_an = '';
        jQuery('.ts-flights-round-trip-go-to').typeahead('val', '');
        return;
    }

    ts_flights_round_trip_go_to = jQuery(this).val();

    let params_get_flights_round_trip = {
        'action': 'get_flights_round_trip',
        'code': ts_flights_round_trip_go_to
    };


    jQuery.post(ts_config.ajax_url, params_get_flights_round_trip, function (resp) {

        console.log(JSON.parse(resp));

        jQuery('.ts-flights-round-trip-go-to').typeahead('destroy');

        states_flights_round_trip_go_to = JSON.parse(resp);
        let cities_flights_round_trip_go_to = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('an'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: states_flights_round_trip_go_to
        });

        cities_flights_round_trip_go_to.initialize();

        jQuery('.ts-flights-round-trip-go-to').typeahead(
            null, {
                name: 'cities_flights_round_trip_go_to',
                displayKey: 'an',
                source: cities_flights_round_trip_go_to.ttAdapter(),
                templates: {
                    suggestion: function (data) {
                        return '<div class="tt-suggestion ts-template"><span>' + data.cn + '</span><b>' + data.ct + ' (' + data.ac + ')</b><small>' + data.an + '</small></div>'
                    }
                }
            }).on('typeahead:selected', function (event, data) {
            ts_flights_round_trip_go_to = data.ac;
            ts_flights_round_trip_go_to_an = data.an;
            jQuery('.ts-flights-round-trip-go-to').val(data.ac);

        });
        jQuery('.ts-flights-round-trip-go-to').focus();
    });

});


jQuery('html').click(function () {
    jQuery('.ts-btn-close').trigger('click');
});

jQuery('.ts-div-dropdown').click(function (event) {
    event.stopPropagation();
});


jQuery('.ts-flights-round-trip-adult').on("change", function (event) {
    let adult = parseInt(jQuery(this).val());
    let child = parseInt(jQuery('.ts-flights-round-trip-adult-child').val());
    let infant = parseInt(jQuery('.ts-flights-round-trip-adult-infant').val());


    jQuery('.ts-flights-round-trip-travellers').text(adult+child+infant);
})

jQuery('.ts-flights-round-trip-adult-child').on("change", function (event) {
    let adult = parseInt(jQuery('.ts-flights-round-trip-adult').val());
    let child = parseInt(jQuery(this).val());
    let infant = parseInt(jQuery('.ts-flights-round-trip-adult-infant').val());


    jQuery('.ts-flights-round-trip-travellers').text(adult+child+infant);
})

jQuery('.ts-flights-round-trip-adult-infant').on("change", function (event) {
    let adult = parseInt(jQuery('.ts-flights-round-trip-adult').val());
    let child = parseInt(jQuery('.ts-flights-round-trip-adult-child').val());
    let infant = parseInt(jQuery(this).val());


    jQuery('.ts-flights-round-trip-travellers').text(adult+child+infant);
})


let ts_flights_round_trip_adult = '';
let ts_flights_round_trip_adult_child = '';
let ts_flights_round_trip_adult_infant = '';

jQuery('.ts-flights-round-trip-btn').on('click', function () {

    let isFlexiSearch = jQuery('.ts-flights-round-trip-flexsearch').prop('checked');
    let departDate = jQuery('.ts-flights-round-trip-dp-departure').datepicker('getDate', true);
    let returnDate = jQuery('.ts-flights-round-trip-dp-return').datepicker('getDate', true);
    let airlineClass = jQuery('.ts-flights-round-trip-airline-class').text();
    ts_flights_round_trip_adult = jQuery('.ts-flights-round-trip-adult').val();
    ts_flights_round_trip_adult_child = jQuery('.ts-flights-round-trip-adult-child').val();
    ts_flights_round_trip_adult_infant = jQuery('.ts-flights-round-trip-adult-infant').val();

    let url = "https://tripsupport.ca/flight/roundtrip;tripType=roundtrip";
    url += ';';
    url += 'destination=';
    url += ts_flights_round_trip_go_to;
    url += ';';
    url += 'origin=';
    url += ts_flights_round_trip_from;
    url += ';';
    url += 'IsFlexiSearch=';
    url += isFlexiSearch;
    url += ';';
    url += 'departDate=';
    url += departDate;
    url += ';';
    url += 'returnDate=';
    url += returnDate;
    url += ';';
    url += 'adult=';
    url += ts_flights_round_trip_adult;
    url += ';';
    url += 'child=';
    url += ts_flights_round_trip_adult_child;
    url += ';';
    url += 'infant=';
    url += ts_flights_round_trip_adult_infant;
    url += ';';
    url += 'class=';
    url += airlineClass;
    url += ';';
    url += 'multiOrigin=';
    url += ts_flights_round_trip_from_an;
    url += ';';
    url += 'multiDestination=';
    url += ';';
    url += ts_flights_round_trip_go_to_an;
    window.location.href = url;
})


let states_flights_one_way_from = '';
let ts_flights_one_way_from_an = '';
let ts_flights_one_way_from = '';
let states_flights_one_way_go_to = '';
let ts_flights_one_way_go_to_an = '';
let ts_flights_one_way_go_to = '';


jQuery('.ts-flights-one-way-from').on('input', function () {
    if (!jQuery(this).val().trim()) {
        states_flights_one_way_from = '';
        ts_flights_one_way_from = '';
        ts_flights_one_way_from_an = '';
        jQuery('.ts-flights-one-way-from').typeahead('val', '');
        return;
    }

    let val_from = jQuery(this).val();

    let params_get_flights_round_trip = {
        'action': 'get_flights_round_trip',
        'code': val_from
    };


    jQuery.post(ts_config.ajax_url, params_get_flights_round_trip, function (resp) {

        console.log(JSON.parse(resp));

        jQuery('.ts-flights-one-way-from').typeahead('destroy');

        states_flights_one_way_from = JSON.parse(resp);
        let cities_flights_one_way_from = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('an'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: states_flights_one_way_from
        });

        cities_flights_one_way_from.initialize();

        jQuery('.ts-flights-one-way-from').typeahead(
            null, {
                name: 'cities_flights_one_way_from',
                displayKey: 'an',
                source: cities_flights_one_way_from.ttAdapter(),
                templates: {
                    suggestion: function (data) {
                        return '<div class="tt-suggestion ts-template"><span>' + data.cn + '</span><b>' + data.ct + ' (' + data.ac + ')</b><small>' + data.an + '</small></div>'
                    }
                }
            }).on('typeahead:selected', function (event, data) {
            ts_flights_one_way_from = data.ac;
            ts_flights_one_way_from_an = data.an;
            jQuery('.ts-flights-one-way-from').val(data.ac);

        });
        jQuery('.ts-flights-one-way-from').focus();
    });


});


jQuery('.ts-flights-one-way-go-to').on('input', function () {
    if (!jQuery(this).val().trim()) {
        states_flights_one_way_go_to = '';
        ts_flights_one_way_go_to = '';
        ts_flights_one_way_go_to_an = '';
        jQuery('.ts-flights-one-way-go-to').typeahead('val', '');
        return;
    }

    ts_flights_one_way_go_to = jQuery(this).val();

    let params_get_flights_round_trip = {
        'action': 'get_flights_round_trip',
        'code': ts_flights_one_way_go_to
    };


    jQuery.post(ts_config.ajax_url, params_get_flights_round_trip, function (resp) {

        console.log(JSON.parse(resp));

        jQuery('.ts-flights-one-way-go-to').typeahead('destroy');

        states_flights_one_way_go_to = JSON.parse(resp);
        let cities_flights_one_way_go_to = new Bloodhound({
            datumTokenizer: Bloodhound.tokenizers.obj.whitespace('an'),
            queryTokenizer: Bloodhound.tokenizers.whitespace,
            local: states_flights_one_way_go_to
        });

        cities_flights_one_way_go_to.initialize();

        jQuery('.ts-flights-one-way-go-to').typeahead(
            null, {
                name: 'cities_flights_one_way_go_to',
                displayKey: 'an',
                source: cities_flights_one_way_go_to.ttAdapter(),
                templates: {
                    suggestion: function (data) {
                        return '<div class="tt-suggestion ts-template"><span>' + data.cn + '</span><b>' + data.ct + ' (' + data.ac + ')</b><small>' + data.an + '</small></div>'
                    }
                }
            }).on('typeahead:selected', function (event, data) {
            ts_flights_one_way_go_to = data.ac;
            ts_flights_one_way_go_to_an = data.an;
            jQuery('.ts-flights-one-way-go-to').val(data.ac);

        });
        jQuery('.ts-flights-one-way-go-to').focus();
    });

});


jQuery('.ts-flights-one-way-adult').on("change", function (event) {
    let adult = parseInt(jQuery(this).val());
    let child = parseInt(jQuery('.ts-flights-one-way-adult-child').val());
    let infant = parseInt(jQuery('.ts-flights-one-way-adult-infant').val());



    jQuery('.ts-flights-one-way-travellers').text(adult+child+infant);
})

jQuery('.ts-flights-one-way-adult-child').on("change", function (event) {
    let child = parseInt(jQuery(this).val());
    let adult = parseInt(jQuery('.ts-flights-one-way-adult').val());
    let infant = parseInt(jQuery('.ts-flights-one-way-adult-infant').val());



    jQuery('.ts-flights-one-way-travellers').text(adult+child+infant);
})

jQuery('.ts-flights-one-way-adult-infant').on("change", function (event) {
    let infant = parseInt(jQuery(this).val());
    let adult = parseInt(jQuery('.ts-flights-one-way-adult-child').val());
    let child = parseInt(jQuery('.ts-flights-one-way-adult-child').val());



    jQuery('.ts-flights-one-way-travellers').text(adult+child+infant);
})


let ts_flights_one_way_adult = '';
let ts_flights_one_way_adult_child = '';
let ts_flights_one_way_adult_infant = '';

jQuery('.ts-flights-one-way-btn').on('click', function () {

    let isFlexiSearch = jQuery('.ts-flights-one_way-flexsearch').prop('checked');
    let departDate = jQuery('.ts-flights-one_way-dp-departure').datepicker('getDate', true);
    let airlineClass = jQuery('.ts-flights-one-way-airline-class').text();
    ts_flights_one_way_adult = jQuery('.ts-flights-one_way-adult').val();
    ts_flights_one_way_adult_child = jQuery('.ts-flights-one_way-adult-child').val();
    ts_flights_one_way_adult_infant = jQuery('.ts-flights-one_way-adult-infant').val();

    let url = "https://tripsupport.ca/flight/oneway;tripType=oneway";
    url += ';';
    url += 'destination=';
    url += ts_flights_one_way_go_to;
    url += ';';
    url += 'origin=';
    url += ts_flights_one_way_from;
    url += ';';
    url += 'IsFlexiSearch=';
    url += isFlexiSearch;
    url += ';';
    url += 'departDate=';
    url += departDate;
    url += ';';
    url += 'adult=';
    url += ts_flights_one_way_adult;
    url += ';';
    url += 'child=';
    url += ts_flights_one_way_adult_child;
    url += ';';
    url += 'infant=';
    url += ts_flights_one_way_adult_infant;
    url += ';';
    url += 'class=';
    url += airlineClass;
    url += ';';
    url += 'multiOrigin=';
    url += ts_flights_one_way_from_an;
    url += ';';
    url += 'multiDestination=';
    url += ';';
    url += ts_flights_one_way_go_to_an;
    window.location.href = url;
})





