<?php get_header() ?>
<main>
    <div class="relative bg-gray-900 -mt-1">
        <div class="sm:hidden relative h-32 bg-indigo-600 sm:h-72 md:absolute md:right-0 md:top-0 md:h-full md:w-2/5">
            <?php $banner=get_post_meta( get_the_ID(), 'banner_page', true ); ?>
            <?php if(!empty($banner[0]['banner_image'])) { ?>
                <img class="w-full h-full object-cover" src="<?php echo $banner[0]['banner_image'] ?>" alt="vacation deals">
            <?php } elseif (is_page('cuba-vacations')) { ?>
                <img class="w-full h-full object-cover" src="<?php echo THEME_IMAGE_HERO.'/spring-break.jpg'?>" alt="vacation deals">
            <?php } elseif (is_page('punta-cana-vacations')) { ?>
                <img class="w-full h-full object-cover" src="<?php echo THEME_IMAGE_HERO.'/hotair-bg.jpg'?>" alt="vacation deals">
            <?php } ?>
            <div aria-hidden="true"
                 class="absolute inset-0 bg-gradient-to-r from-blue-100 to-blue-200 mix-blend-multiply"></div>
        </div>
        <div class="md:hidden relative mx-auto max-w-md px-4 pt-6 pb-10 ">
            <div class="md:mr-auto md:w-1/2 md:pr-10">
                <p class="mt-2 text-white text-2xl font-bold">
                    <?php the_title() ?>
                </p>
            </div>
        </div>

        <div class="hidden md:block relative mx-auto max-w-md px-4 py-12 sm:max-w-7xl sm:px-6 sm:py-20 md:py-28 lg:px-8 lg:pb-44 lg:pt-24">
            <div class="md:mr-auto md:w-1/2 md:pr-10">
                <p class="mt-2 text-white text-3xl font-extrabold sm:text-4xl">
                    <?php the_title() ?>
                </p>
                <p class="mt-3 text-base text-gray-300">
                    <?php echo strip_tags(get_the_excerpt()); ?>
                </p></div>
        </div>
        <div class="hidden sm:block relative h-56 bg-indigo-600 sm:h-72 md:absolute md:right-0 md:top-0 md:h-full md:w-2/5">
            <?php if(!empty($banner[0]['banner_image'])) { ?>
                <img class="w-full h-full object-cover" src="<?php echo $banner[0]['banner_image'] ?>" alt="vacation deals">
            <?php } else { ?>
                <img class="w-full h-full object-cover" src="<?php echo THEME_IMAGE_HERO.'/spring-break.jpg'?>" alt="vacation deals">
            <?php } ?>
            <div aria-hidden="true"
                 class="absolute inset-0 bg-gradient-to-r from-blue-100 to-blue-200 mix-blend-multiply"></div>
        </div>
    </div>

    <section class="relative max-w-7xl -mt-5 mx-auto xl:-mt-32 lg:-mt-28 md:-mt-8 px-0 md:px-4 pb-12 lg:px-6 lg:mb-6"
             aria-labelledby="contact-heading">
        <?php echo do_shortcode('[tr_search_by_vue]') ?>
    </section>

    <div class="relative bg-white">
        <div class="relative max-w-7xl mx-auto mt-4 mb-12 lg:mb-16 lg:mt-8">
            <?php
            $search_url = get_post_meta($post->ID, 'vacation_search_url', true);
            echo (!empty($search_url)) ? do_shortcode('[ts_vacation_single_page]') : do_shortcode('[ts-vacation-city]');  ?>
        </div>
    </div>
    <?php $Travel_Guide=get_post_meta( get_the_ID(), 'Travel_Guide', true );
    $images=get_post_meta( get_the_ID(), 'slider_image', true );
    $map_url=get_post_meta( get_the_ID(), 'Map_url', true );
    $city_infos1=get_post_meta( get_the_ID(), 'city_info_todo', true );
    $elementor=get_post_meta( get_the_ID(), 'elementor_radio', true );
    ?>
    <div class="relative bg-white">
        <div class="relative max-w-7xl mx-auto mt-4 mb-12 lg:mb-16 ">
            <section class="overflow-hidden text-gray-700">
                <div class="container px-4 py-2 mx-auto ">
                    <?php if(!empty($Travel_Guide[0]['Travel_Guide_Title'])) { ?>
                        <div class="sm:flex sm:items-baseline sm:justify-between mt-4 mb-12"><h1
                                    class="text-xl tracking-tight font-extrabold text-gray-900 sm:text-2xl md:text-3xl">
                                <span class="block xl:inline"><?php  echo $Travel_Guide[0]['Travel_Guide_Title'] ?></span>
                            </h1></div>
                    <?php } ?>
                    <div class="flex flex-wrap -m-1 md:-m-2">
                        <?php if(!empty($images)) { ?>

                        <?php
                        $cnt=1;
                        if(!empty($images)) {
                            foreach ((array)$images as $item) {
                                if ($cnt == 1) {
                                    $item1 = $item;
                                    break;
                                }
                            }
                        }
                        ?>


                        <div class="flex flex-wrap w-1/2">
                            <div class="w-full p-1 md:p-2">
                                <img alt="gallery" class="block object-cover object-center w-full h-full rounded-lg"
                                     src="<?php if(!empty($images))  echo $item1 ?>">
                            </div>
                            <?php } ?>
                        </div>

                        <div class="flex flex-wrap w-1/2">
                            <div class="w-full p-1 md:p-2">
                                <?php if(!empty($map_url)){ ?>
                                    <iframe src="<?php echo $map_url.'&output=embed'?>"
                                            class="rounded-lg w-full h-80" style="border:0;" allowfullscreen=""
                                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                                <?php } ?>
                            </div>
                            <?php if(!empty(get_post_meta( get_the_ID(), 'weather', true ))){ ?>

                                <div class="w-1/2 p-1 md:p-2">
                                    <div class="h-28 bg-white rounded-lg border">
                                        <?php echo do_shortcode(get_post_meta( get_the_ID(), 'weather', true )); ?>
                                    </div>
                                </div>
                            <?php } ?>
                            <?php if(!empty(get_post_meta( get_the_ID(), 'currency', true ))){ ?>
                                <div class="w-1/2 p-1 md:p-2">
                                    <div class="h-28 flex bg-white rounded-lg border items-center justify-center space-x-4 ">
                                        <div class="flex text-base font-semibold space-x-4 items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                 class="hi-solid hi-cube inline-block w-10 h-10" version="1.1"
                                                 viewBox="0 0 512 512">
                                                <g id="surface1">
                                                    <path d="M 437.019531 74.980469 C 388.667969 26.628906 324.378906 0 256 0 C 187.621094 0 123.332031 26.628906 74.980469 74.980469 C 26.628906 123.332031 0 187.621094 0 256 C 0 324.378906 26.628906 388.667969 74.980469 437.019531 C 123.332031 485.371094 187.621094 512 256 512 C 324.378906 512 388.667969 485.371094 437.019531 437.019531 C 485.371094 388.667969 512 324.378906 512 256 C 512 187.621094 485.371094 123.332031 437.019531 74.980469 Z M 256 458 C 144.617188 458 54 367.382812 54 256 C 54 144.617188 144.617188 54 256 54 C 367.382812 54 458 144.617188 458 256 C 458 367.382812 367.382812 458 256 458 Z M 256 458 "
                                                          style="stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"></path>
                                                    <path d="M 256 84 C 161.160156 84 84 161.160156 84 256 C 84 350.839844 161.160156 428 256 428 C 350.839844 428 428 350.839844 428 256 C 428 161.160156 350.839844 84 256 84 Z M 320.53125 317.371094 C 316.886719 324.226562 311.976562 329.777344 305.796875 334.007812 C 299.613281 338.242188 292.503906 341.335938 284.460938 343.277344 C 280.058594 344.34375 275.539062 345.105469 270.90625 345.589844 L 270.90625 380.550781 L 240.90625 380.550781 L 240.90625 344.929688 C 233.574219 343.921875 226.289062 342.328125 219.058594 340.101562 C 205.847656 336.039062 193.992188 330.285156 183.496094 322.832031 L 198.992188 292.605469 C 200.515625 294.128906 203.265625 296.121094 207.246094 298.574219 C 211.222656 301.03125 215.921875 303.488281 221.34375 305.941406 C 226.761719 308.398438 232.773438 310.472656 239.378906 312.164062 C 245.980469 313.859375 252.75 314.703125 259.695312 314.703125 C 279 314.703125 288.652344 308.523438 288.652344 296.160156 C 288.652344 292.265625 287.546875 288.964844 285.351562 286.253906 C 283.148438 283.546875 280.015625 281.175781 275.953125 279.144531 C 271.890625 277.109375 266.976562 275.25 261.222656 273.554688 C 255.460938 271.863281 249.027344 270 241.917969 267.96875 C 233.28125 265.597656 225.789062 263.015625 219.4375 260.21875 C 213.089844 257.425781 207.792969 254.125 203.5625 250.3125 C 199.328125 246.503906 196.152344 242.101562 194.039062 237.105469 C 191.921875 232.113281 190.863281 226.144531 190.863281 219.199219 C 190.863281 210.054688 192.554688 201.925781 195.945312 194.816406 C 199.328125 187.703125 204.027344 181.777344 210.039062 177.035156 C 216.050781 172.296875 223.035156 168.695312 230.996094 166.238281 C 234.203125 165.253906 237.507812 164.472656 240.90625 163.882812 L 240.90625 131.191406 L 270.90625 131.191406 L 270.90625 163.453125 C 278.21875 164.398438 285.152344 166.085938 291.699219 168.523438 C 302.367188 172.507812 311.679688 177.203125 319.640625 182.621094 L 304.148438 211.070312 C 302.960938 209.886719 300.800781 208.277344 297.667969 206.242188 C 294.535156 204.210938 290.722656 202.222656 286.238281 200.273438 C 281.75 198.328125 276.882812 196.679688 271.636719 195.320312 C 266.382812 193.96875 261.050781 193.289062 255.632812 193.289062 C 245.980469 193.289062 238.78125 195.066406 234.042969 198.625 C 229.300781 202.179688 226.929688 207.175781 226.929688 213.609375 C 226.929688 217.335938 227.820312 220.429688 229.597656 222.882812 C 231.375 225.339844 233.953125 227.496094 237.34375 229.359375 C 240.730469 231.222656 245.003906 232.914062 250.171875 234.4375 C 255.335938 235.960938 261.304688 237.574219 268.078125 239.265625 C 276.882812 241.636719 284.882812 244.175781 292.082031 246.882812 C 299.277344 249.59375 305.371094 252.980469 310.367188 257.042969 C 315.359375 261.109375 319.214844 265.976562 321.925781 271.648438 C 324.632812 277.324219 325.988281 284.308594 325.988281 292.601562 C 325.992188 302.257812 324.167969 310.511719 320.53125 317.371094 Z M 320.53125 317.371094 "
                                                          style="stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"></path>
                                                </g>
                                            </svg>

                                            <span>Currency</span></div>
                                        <p class="font-bold text-lg"><?php echo get_post_meta( get_the_ID(), 'currency', true ); ?></p></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </section>
            <?php

            if(!empty($elementor) && $elementor=="false"){ ?>
            <section>
                <div class="mx-auto max-w-7xl bg-white">
                    <section class="relative z-20 overflow-hidden ">
                        <div class="container">
                            <div class="flex flex-wrap -mx-4 my-8">
                                <div class="w-full px-4">
                                     <?php if(!empty($city_infos1)){
                            foreach (  $city_infos1 as $city_info1 ) {?>
                                    <div class="w-full bg-white border border-gray-100 rounded-lg p-4 my-4">
                                        <button class="faq-btn flex w-full justify-between items-center">
                                            <div class="text-left w-full"><h1
                                                        class="tracking-tight font-extrabold text-gray-900 text-xl">
                                                    <?php  echo $city_info1['WhatToDoTitle'] ?>
                                                </h1></div>
                                            <div class="w-full max-w-[40px] h-10 flex items-center justify-end pt-1 rounded-lg bg-opacity-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                     viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </button>


                                        <div class="outclick " style="display: contents">
                                            <?php  echo $city_info1['WhatToDoDescription'] ?>
                                        </div>
                                    </div>
                            <?php }}?>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </section>
            <?php } elseif (empty($elementor) || $elementor=="true") { ?>
            <section class="relative my-12 lg:my-16">
                <div class="text-left px-4">
                    <?php the_content() ?>
                </div>
            </section>
<?php } ?>
        </div>
    </div>
    <?php $questions=get_post_meta( get_the_ID(), 'questions', true );
    if(!empty($questions)){ ?>
        <div class="mx-auto max-w-7xl bg-white">
            <section class="relative z-20 overflow-hidden ">
                <div class="container">
                    <div class="flex flex-wrap">
                        <div class="w-full px-4">
                            <div class="mb-6 lg:mb-10 max-w-[520px]"><span
                                        class="font-normal text-tiny block text-rose-600">FAQs </span>
                                <h2 class="font-extrabold text-2xl sm:text-4xl text-gray-900 mb-4 ">Frequently Asked
                                    Questions
                                </h2></div>
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-4">
                        <?php $questions=get_post_meta( get_the_ID(), 'questions', true );
                        $count=1;
                        if(!empty($questions)){
                            foreach (  $questions as $question ) {?>

                                <div class="w-full lg:w-1/2 px-4">
                                    <div class="bg-white border border-gray-100 rounded-lg p-4 lg:px-6 xl:px-8 mb-8">
                                        <button class="faq-btn flex w-full justify-between items-center">
                                            <div class="text-left">
                                                <h4 class="text-base text-left font-semibold text-black">
                                                    <?php echo $question['question'] ?>
                                                </h4>
                                            </div>
                                            <div class="max-w-[40px] h-10 flex items-center justify-end pt-1 rounded-lg bg-opacity-5">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20"
                                                     fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                          d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                            </div>
                                        </button>
                                        <div class="outclick " style="display: contents">
                                            <div class="faq-content" style="">
                                                <p class="text-tiny text-gray-700 leading-relaxed py-3">
                                                    <?php echo $question['answer'] ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <?php $count++;}} ?>

                        <script type="application/ld+json">
                                {"@context":"https://schema.org","@type":"FAQPage","mainEntity":[
                                <?php $cnt_for=0; $cnt_q=count($questions);
                            if($cnt_q>4 ) $cnt_for=4; else $cnt_for=$cnt_q;
                            if($cnt_q!=0){
                                for($i = 0; $i < $cnt_for; ++$i) {
                                    ?>
                                {"@type":"Question","name":"<?php echo $questions[$i]['question'] ?>",
                                "acceptedAnswer":{"@type":"Answer","text":"<?php echo $questions[$i]['answer'] ?>"}}<?php echo ($i == $cnt_for-1) ? ']}' : ',';?>
                                <?php  }
                            } ?>

                       </script>

                    </div>
                </div>
            </section>
        </div>
    <?php } ?>
    <?php get_template_part('template/global/newsletter') ?>
    <?php $More_destinations_to_explore=get_post_meta( get_the_ID(), 'More_destinations_to_explore', true );
    $Top_Flight_Destinations=get_post_meta( get_the_ID(), 'Top_Flight_Destinations', true );
    ?>
    <?php if(!empty($Top_Flight_Destinations)   ) { ?>
        <div class="bg-gray-800">
            <div class="container xl:max-w-7xl mx-auto px-4 py-16">
                <section class="relative py-4">
                    <div class="text-left max-w-4xl">
                        <div class="sm:flex sm:items-baseline sm:justify-between"><h1
                                    class="text-xl tracking-tight font-extrabold text-white sm:text-2xl md:text-3xl"><span
                                        class="block xl:inline">

                                <?php echo !empty($More_destinations_to_explore) ? $More_destinations_to_explore[0]['More_destinations_Title'] : 'More Destinations to Explore'?>
                            </span></h1></div>
                        <p class="text-md text-white sm:text-md md:text-md lg:mx-0 my-4">
                            <?php echo !empty($More_destinations_to_explore) ? $More_destinations_to_explore[0]['More_destinations_Description'] : 'Trip Support is the right way to reach your travel dreams.' ?>
                        </p></div>
                </section>

                <div class="grid grid-cols-1 md:grid-cols-5 gap-4 text-white">
                    <?php if(!empty($Top_Flight_Destinations)){
                        foreach (  $Top_Flight_Destinations as $Top_Flight_Destination ) {?>
                            <a href="<?php echo $Top_Flight_Destination['Flight_Destinations_Url'] ?>" class="h-10 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-lg hover:bg-rose-600">
                                <div class="text-tiny"><?php echo $Top_Flight_Destination['Flight_Destinations_Title'] ?></div>
                            </a>
                        <?php } } ?>
                </div>
            </div>
        </div>
    <?php } ?>
</main>
<?php get_footer() ?>
