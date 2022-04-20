<?php

namespace Inc;

final class Init {
    public static function get_services() {
        return [
            Base\Enqueue::class,
            Api\FeaturedVacations::class,
            Api\SearchBoxFlights::class,
            Api\SearchBoxVacations::class,
            Api\SearchBox::class
        ];
    }

    private static function instantiate( $class ) {
        return new $class;
    }

    public static function register_services() {
        foreach ( self::get_services() as $class ) {
            $service = self::instantiate( $class );
            $service->register();
        }
    }


}


