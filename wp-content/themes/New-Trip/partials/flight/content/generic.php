<div class="mx-auto max-w-7xl bg-white">
  <section class="pt-8 relative z-20 overflow-hidden px-4">
    <div class="container">
      <div class="d-flex d-flex-wrap -mx-4">
        <div class="w-full px-4">
          <h1 class="text-2xl tracking-tight font-extrabold text-slate-900 sm:text-3xl md:text-4xl"> 
            <span class="block xl:inline">Calgary</span>
          </h1>
        </div>
      </div>
      <div class="max-w-5xl py-4">
        <p class="mt-2 text-tiny text-slate-900 sm:mt-3  md:mt-3 md:text-base lg:mx-0">
          The Calgary International Airport (YYC) is the biggest airport in the province of Alberta. This airport is located a short drive outside of the main city of Calgary, and it is the best airport option when flying to and from Banff. Calgary International Airport is a hub for both WestJet and Air Canada, so you have ample flight options from this airport with these two airlines. There are WestJet flights that offer direct flights from Calgary, and cheap flights from Calgary to Vancouver. Flair Airlines is another carrier from Calgary that often has affordable flight options, as well. The Edmonton Airport is a little over two hours away from the city of Calgary, and it is the other primary airport when flying to and from this region. 
        </p>
        <p class="mt-2 text-tiny text-slate-900 sm:mt-3  md:mt-3 md:text-base lg:mx-0">
          At Trip Support, we can assist you in finding the best YYC deals so that you do not break the bank booking your trip. Our Book Now Pay Later option allows you to secure the cheapest flight price and pay the remaining cost of your ticket in instalments. Book Now Pay Later ensures that you can lock in the ideal price for your ticket and allows the stressors that may come with traveling to be nonexistent.


        </p>
      </div>
      <div class="flex items-center gap-4 lg:gap-8">

        <div class="mt-4 lg:mt-8 sm:w-2/3">
          <div id="carouselExampleCrossfade" class="carousel slide carousel-fade relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button
                type="button"
                data-bs-target="#carouselExampleCrossfade"
                data-bs-slide-to="0"
                class="active"
                aria-current="true"
                aria-label="Slide 1"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCrossfade"
                data-bs-slide-to="1"
                aria-label="Slide 2"
              ></button>
              <button
                type="button"
                data-bs-target="#carouselExampleCrossfade"
                data-bs-slide-to="2"
                aria-label="Slide 3"
              ></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden rounded-lg">
              <div class="carousel-item active float-left w-full">
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp"
                  class="block w-full"
                  alt="Wild Landscape"
                />
              </div>
              <div class="carousel-item float-left w-full">
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                  class="block w-full"
                  alt="Camera"
                />
              </div>
              <div class="carousel-item float-left w-full">
                <img
                  src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                  class="block w-full"
                  alt="Exotic Fruits"
                />
              </div>
            </div>
            <button
              class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
              type="button"
              data-bs-target="#carouselExampleCrossfade"
              data-bs-slide="prev"
            >
              <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button
              class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
              type="button"
              data-bs-target="#carouselExampleCrossfade"
              data-bs-slide="next"
            >
              <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        </div>
        <div class="flex-col mt-4 lg:mt-8 sm:w-1/3 space-y-4">
          <div class="h-28 bg-white rounded-lg border">
            <?php echo do_shortcode(get_post_meta( get_the_ID(), 'weather', true )); ?>
          </div>
          <?php if(!empty(get_post_meta( get_the_ID(), 'currency', true )))?>
          <div class="p-1 md:p-2">
            <div class="h-28 flex bg-white rounded-lg border items-center justify-center space-x-4 ">
              <div class="flex text-base font-semibold space-x-4 items-center">
                <svg xmlns="http://www.w3.org/2000/svg" class="hi-solid hi-cube inline-block w-10 h-10" version="1.1" viewBox="0 0 512 512">
                  <g id="surface1">
                    <path d="M 437.019531 74.980469 C 388.667969 26.628906 324.378906 0 256 0 C 187.621094 0 123.332031 26.628906 74.980469 74.980469 C 26.628906 123.332031 0 187.621094 0 256 C 0 324.378906 26.628906 388.667969 74.980469 437.019531 C 123.332031 485.371094 187.621094 512 256 512 C 324.378906 512 388.667969 485.371094 437.019531 437.019531 C 485.371094 388.667969 512 324.378906 512 256 C 512 187.621094 485.371094 123.332031 437.019531 74.980469 Z M 256 458 C 144.617188 458 54 367.382812 54 256 C 54 144.617188 144.617188 54 256 54 C 367.382812 54 458 144.617188 458 256 C 458 367.382812 367.382812 458 256 458 Z M 256 458 " style="stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"></path> 
                    <path d="M 256 84 C 161.160156 84 84 161.160156 84 256 C 84 350.839844 161.160156 428 256 428 C 350.839844 428 428 350.839844 428 256 C 428 161.160156 350.839844 84 256 84 Z M 320.53125 317.371094 C 316.886719 324.226562 311.976562 329.777344 305.796875 334.007812 C 299.613281 338.242188 292.503906 341.335938 284.460938 343.277344 C 280.058594 344.34375 275.539062 345.105469 270.90625 345.589844 L 270.90625 380.550781 L 240.90625 380.550781 L 240.90625 344.929688 C 233.574219 343.921875 226.289062 342.328125 219.058594 340.101562 C 205.847656 336.039062 193.992188 330.285156 183.496094 322.832031 L 198.992188 292.605469 C 200.515625 294.128906 203.265625 296.121094 207.246094 298.574219 C 211.222656 301.03125 215.921875 303.488281 221.34375 305.941406 C 226.761719 308.398438 232.773438 310.472656 239.378906 312.164062 C 245.980469 313.859375 252.75 314.703125 259.695312 314.703125 C 279 314.703125 288.652344 308.523438 288.652344 296.160156 C 288.652344 292.265625 287.546875 288.964844 285.351562 286.253906 C 283.148438 283.546875 280.015625 281.175781 275.953125 279.144531 C 271.890625 277.109375 266.976562 275.25 261.222656 273.554688 C 255.460938 271.863281 249.027344 270 241.917969 267.96875 C 233.28125 265.597656 225.789062 263.015625 219.4375 260.21875 C 213.089844 257.425781 207.792969 254.125 203.5625 250.3125 C 199.328125 246.503906 196.152344 242.101562 194.039062 237.105469 C 191.921875 232.113281 190.863281 226.144531 190.863281 219.199219 C 190.863281 210.054688 192.554688 201.925781 195.945312 194.816406 C 199.328125 187.703125 204.027344 181.777344 210.039062 177.035156 C 216.050781 172.296875 223.035156 168.695312 230.996094 166.238281 C 234.203125 165.253906 237.507812 164.472656 240.90625 163.882812 L 240.90625 131.191406 L 270.90625 131.191406 L 270.90625 163.453125 C 278.21875 164.398438 285.152344 166.085938 291.699219 168.523438 C 302.367188 172.507812 311.679688 177.203125 319.640625 182.621094 L 304.148438 211.070312 C 302.960938 209.886719 300.800781 208.277344 297.667969 206.242188 C 294.535156 204.210938 290.722656 202.222656 286.238281 200.273438 C 281.75 198.328125 276.882812 196.679688 271.636719 195.320312 C 266.382812 193.96875 261.050781 193.289062 255.632812 193.289062 C 245.980469 193.289062 238.78125 195.066406 234.042969 198.625 C 229.300781 202.179688 226.929688 207.175781 226.929688 213.609375 C 226.929688 217.335938 227.820312 220.429688 229.597656 222.882812 C 231.375 225.339844 233.953125 227.496094 237.34375 229.359375 C 240.730469 231.222656 245.003906 232.914062 250.171875 234.4375 C 255.335938 235.960938 261.304688 237.574219 268.078125 239.265625 C 276.882812 241.636719 284.882812 244.175781 292.082031 246.882812 C 299.277344 249.59375 305.371094 252.980469 310.367188 257.042969 C 315.359375 261.109375 319.214844 265.976562 321.925781 271.648438 C 324.632812 277.324219 325.988281 284.308594 325.988281 292.601562 C 325.992188 302.257812 324.167969 310.511719 320.53125 317.371094 Z M 320.53125 317.371094 " style="stroke:none;fill-rule:nonzero;fill:rgb(0%,0%,0%);fill-opacity:1;"></path> 
                  </g> 
                </svg>
                <span>Currency</span>
              </div>
              <p class="font-bold text-lg"><?php echo get_post_meta( get_the_ID(), 'currency', true ); ?></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</div>

