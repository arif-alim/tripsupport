<?php 
  $explore_australia = array('Australia Hotels', 'Porter Vacations', 'Sunquest Vacations', 'My Trip Vacations', 'Testing Vacations', 'Another test Vacation', 'testing', 'test');
  $explore_caribbean = array('Caribbean Hotels', 'Porter Vacations', 'Sunquest Vacations', 'My Trip Vacations', 'Testing Vacations', 'Another test Vacation', 'testing', 'test');
  $explore_domestic = array('Dometic Hotels', 'Porter Vacations', 'Sunquest Vacations', 'My Trip Vacations', 'Testing Vacations', 'Another test Vacation', 'testing', 'test');
  $explore_europe = array('Hotels in Europe', 'Porter Vacations', 'Sunquest Vacations', 'My Trip Vacations', 'Testing Vacations', 'Another test Vacation', 'testing', 'test');
  $explore_middle_east = array('seasonal', 'Porter Vacations', 'Sunquest Vacations', 'My Trip Vacations', 'Testing Vacations', 'Another test Vacation', 'testing', 'test');
  $explore_usa = array('ehloo', 'Porter Vacations', 'Sunquest Vacations', 'My Trip Vacations', 'Testing Vacations', 'Another test Vacation', 'testing', 'test');
?>

<div class="bg-gradient-to-r from-slate-900 to-blue-800">
  <div class="container xl:max-w-7xl mx-auto px-4 py-16">
    <section class="relative py-4">
      <div class="text-left max-w-4xl">
        <div class="sm:flex sm:items-baseline sm:justify-between">
          <h1 class="text-xl tracking-tight font-extrabold text-white sm:text-2xl md:text-3xl">
            <span class="block xl:inline">
              More Destinations to Explore
            </span>
          </h1>
        </div>
        <p class="text-md text-white sm:text-base md:text-base lg:mx-0 my-4 font-medium">
          Find the Right Flight and Book with Confidence.
        </p>
      </div>
    </section>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-white">

      <!-- Explore Hotels in Australia -->
      <?php if ($pagename == 'hotels-in-australia') { ?>
        <?php foreach($explore_australia as $link) {?>
          <a href="/cheap-flights-to-bagotville" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $link; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

      <!-- Explore Hotels in Caribbean -->
      <?php if ($pagename == 'hotels-in-caribbean') { ?>
        <?php foreach($explore_caribbean as $link) {?>
          <a href="/cheap-flights-to-bagotville" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $link; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

      <!-- Explore Domestic Hotels -->
      <?php if ($pagename == 'domestic-hotels') { ?>
        <?php foreach($explore_domestic as $link) {?>
          <a href="/cheap-flights-to-bagotville" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $link; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

      <!-- Explore Hotels in Europe -->
      <?php if ($pagename == 'hotels-in-europe') { ?>
        <?php foreach($explore_europe as $link) {?>
          <a href="/cheap-flights-to-bagotville" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $link; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

      <!-- Explore Hotels in Middle East -->
      <?php if ($pagename == 'hotels-in-middle-east') { ?>
        <?php foreach($explore_middle_east as $link) {?>
          <a href="/cheap-flights-to-bagotville" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $link; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>

      <!-- Explore Hotels in USA -->
      <?php if ($pagename == 'hotels-in-usa') { ?>
        <?php foreach($explore_usa as $link) {?>
          <a href="/cheap-flights-to-bagotville" class="h-9 flex px-4 py-2 items-center bg-gray-300 bg-opacity-25 rounded-md hover:bg-rose-600 capitalize">
            <div class="text-tiny font-medium flex">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="mr-2 h-5 w-5"
                viewBox="0 0 24 24"
                fill="currentColor"
              >
                <path
                  fill-rule="evenodd"
                  d="M3.64 14.26l2.86.95 4.02-4.02-8-4.59 1.16-1.16c.1-.1.26-.14.41-.1l9.3 2.98c1.58-1.58 3.15-3.2 4.77-4.75.31-.33.7-.58 1.16-.73.45-.16.87-.27 1.25-.34.55-.05.98.4.93.93-.07.38-.18.8-.34 1.25-.15.46-.4.85-.73 1.16l-4.75 4.78 2.97 9.29c.05.15 0 .29-.1.41l-1.17 1.16-4.57-8.02L8.8 17.5l.95 2.84L8.6 21.5l-2.48-3.62L2.5 15.4l1.14-1.14z"
                  clip-rule="evenodd"
                />
              </svg>
              <?php echo $link; ?>
            </div>
          </a>
        <?php } ?>
      <?php } ?>
    </div>
  </div>
</div>
