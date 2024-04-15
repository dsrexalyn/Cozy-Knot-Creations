@extends('layouts.app')

@section('content')



<div id="default-carousel" class="relative w-full h-full px-10 mt-5 mb-4" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-56 overflow-hidden rounded-md md:h-96">
         <!-- Item 1 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.15752-9/430869744_1095518295039553_6525135464565032366_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeGAatT1b4dg053nUlsHWfR_UPutUfTlpchQ-61R9OWlyJ8ETSFZYO9rtcjs3FB0f5Q52nf9BQphcU7mkC1AR1Rx&_nc_ohc=_s2F2W9BmEoAX_buIYN&_nc_ht=scontent.fmnl9-1.fna&oh=03_AdT7ZKfrZbPsp9yquAPV6UGcbuvuZcUjG5hUO75uBHD0RA&oe=6629CAFD" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 2 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://scontent.fmnl9-2.fna.fbcdn.net/v/t1.15752-9/432759199_2844478762371133_499054534300598439_n.jpg?_nc_cat=101&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEJSQkMnQNEJPHKZIbg66nMmcaz-uvoXwCZxrP66-hfAB7A0HMllyJPUFC99Ac01XqzWm55wznNq4afoK5dXIdb&_nc_ohc=4YsgEM5X9XQAX8oxhjk&_nc_ht=scontent.fmnl9-2.fna&oh=03_AdSZVr6glh17oQdAX6QyCm4m0qA0Ba_iNRzy8SLl2JaO3w&oe=6629D4B6" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 3 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.15752-9/432917918_1148294646172265_2069208685667105496_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHYDft5G3Bzftkzgg2kghkw0mfQkIpXQezSZ9CQildB7NFNUanAhxGdsh-Uq0TVYDykHC7_ZEGy7skMFdiEWyJM&_nc_ohc=57Bdi1DJrcMAX9beFYF&_nc_ht=scontent.fmnl9-1.fna&oh=03_AdQJCEBilnA_atd4iQausQJ-NkdNCN57-kPNUgJ9zl2q_g&oe=6629DFD1" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
        </div>
        <!-- Item 4 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://scontent.fmnl9-3.fna.fbcdn.net/v/t1.15752-9/431300368_1116660262872082_8050365820952428486_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEMBLlOyW38hsZlRzzptj6e92b-C8qS9Qb3Zv4LypL1BiiQMeYpQt3K7Pc10G2HMVtz41fjGcgNykeDwN23kN7d&_nc_ohc=GX2GbeUQgQAAX8NiVNB&_nc_ht=scontent.fmnl9-3.fna&oh=03_AdQ6PWm4VJOQjZIxofamYKn66b3e16HwhvBiQ0R8KJ_umA&oe=6629EEC6" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/4 left-1/2" alt="...">
        </div>
        <!-- Item 5 -->
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.15752-9/432991614_991204079038068_9193084924168305270_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeHR9HgP8JYar0qi5tL18-pEFMFfDx0P3LMUwV8PHQ_cs8UxXvpUELvHiBiknwuv5mq9Rk1ewGxRd6He78dnVOFU&_nc_ohc=BY8X5JfEs_8AX_k16Y9&_nc_ht=scontent.fmnl9-1.fna&oh=03_AdTE-Q2ovUp7AvwIJMgA_vhjXNa8jpggq79Zjmf4a6CayQ&oe=6629D32E" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-3/4 left-1/2" alt="...">
        </div>
    </div>
    <!-- Slider indicators -->
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2 rtl:space-x-reverse">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
    </div>
    <!-- Slider controls -->
    <button type="button" class="absolute top-0 start-0 mx-[3%] z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button" class="absolute top-0 end-0 z-30 mx-[3%] flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<h1 class="mt-3 ml-5 font-sans text-5xl font-extrabold text-center text-yellow-500">𝐿𝑎𝑡𝑒𝑠𝑡 𝑃𝑟𝑜𝑑𝑢𝑐𝑡𝑠</h1>

<div class="grid grid-cols-2 gap-10 mt-6 px-52 mb-13 md:grid-cols-3">
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://scontent.fmnl9-1.fna.fbcdn.net/v/t1.15752-9/434243115_941903490671727_1662293620075595963_n.jpg?_nc_cat=111&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEZcPaNovQX1Ue5JmXObhgC1lO5evZ38h3WU7l69nfyHXllTvfcF3vcXCPxNwSgaKpVfHMnkqDQHvvKg2oyDpvv&_nc_ohc=Hlq56ju3MlQAX-9yTny&_nc_ht=scontent.fmnl9-1.fna&oh=03_AdQv9WGqb8JPhOEgan88eslUqAYSWYDv9Oeh2BLU768vyg&oe=6629D169" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://scontent.fmnl9-3.fna.fbcdn.net/v/t1.15752-9/432453317_1821695801631813_9163723435156720699_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeH_7S5DzfDdr6JCW4jt2nyb8MPvVHNMze7ww-9Uc0zN7okJgxVRurZa89KFv0f_wE9I63THSwOsUj83dG_bma_P&_nc_ohc=v-r0DwrVkz4AX9wI8fN&_nc_ht=scontent.fmnl9-3.fna&oh=03_AdRzEuxyP9d96KN3C7jLCi1W3lVfTPf0veWfyJAJmyaPLQ&oe=6629EC25" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://scontent.fmnl9-3.fna.fbcdn.net/v/t1.15752-9/432394116_760485815804435_2649634450723550930_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEa5bSmZMYl2YPryp9RD5PuWvO91048bnFa873XTjxucaZMeQt_iuVZxk1pRfjd3D3kWae5oc3N8xBDd1UlRomC&_nc_ohc=e4LCqMK5aeEAX_nqq5F&_nc_ht=scontent.fmnl9-3.fna&oh=03_AdTt8_Ni3hmzH2SvVDCxZDR0Y8flVICAn8wQ6R6R8ZTzTA&oe=6629D824" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://i.pinimg.com/564x/1b/e9/44/1be9446a6f04d6141bead427c9a9618b.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://i.pinimg.com/564x/37/69/73/3769734fcccc6c689c3bf7ca8a3c06ff.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://i.pinimg.com/474x/30/77/4c/30774cafbe957e668a40c7d3122942e8.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://i.pinimg.com/originals/5b/e5/f0/5be5f0a163d5ab14524bcbc397dad29c.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://www.mmmaking.com/cdn/shop/products/IMG_48022_900x.jpg?v=1684279933" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://i.pinimg.com/736x/8d/73/a8/8d73a825fb8eb5ba6725dab7c2f3f948.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://boogzelclothing.com/cdn/shop/files/Smiley-Face-Crochet-Bandana-Boogzel-Clothing-4_800x.jpg?v=1693123831" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://i.ebayimg.com/images/g/eScAAOSw2odlLIvD/s-l1200.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://m.media-amazon.com/images/I/71aokFjqdJL._AC_UF1000,1000_QL80_.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://www.stitching-together.com/wp-content/uploads/2019/01/Multicolored-crochet-scarf-hanging.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://i0.wp.com/blog.treasurie.com/wp-content/uploads/crochet-scarf-patterns-2.jpg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://www.woolcouturecompany.com/cdn/shop/products/accessories-crochet-kit-hannahs-beginner-scarf-353759_1024x1024.jpg?v=1663152051" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://img.kwcdn.com/product/open/2023-10-12/1697104220324-9648cabfcafe46fc95b8c5f61d80c37a-goods.jpeg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://www.blingcute.com/cdn/shop/products/il_794xN.3438840425_hqz7.jpg?v=1645427453" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://img.kwcdn.com/product/fancy/a5eb60e3-ffdb-4b03-97d0-960ef735b5db.jpg?imageMogr2/auto-orient%7CimageView2/2/w/800/q/70/format/webp" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://kawaiibabe.com/cdn/shop/products/knit-tulip-fairy-crop-top-angelcore-shirt-tank-tee-shirts-tops-kawaii-babe-900_800x.jpg?v=1664416519" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://i5.walmartimages.com/seo/LSFYSZD-Crochet-Hollow-Out-Patchwork-T-shirts-Aesthetic-Vintage-Skinny-Knitted-Crop-Top-90s-00s-Retro-Backless-Tie-up-Tees-Sweater_149b625d-11bd-4d0d-a541-0820ac8016cd.39cd8b06b2cb619e0c563050e2b396ed.jpeg" alt="">
    </div>
    <div>
        <img class="h-auto max-w-full rounded-lg" src="https://ae01.alicdn.com/kf/S5cfd29930dce42d297a44a7f46f7b865B.jpg_640x640Q90.jpg_.webp" alt="">
    </div>
</div>



<footer class="m-4 bg-white rounded-lg shadow-2xl dark:bg-gray-900">
    <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
        <div class="mr-9 sm:flex sm:items-center sm:justify-between">
            <a href="http://127.0.0.1:8000/" class="flex items-center mb-4 space-x-3 sm:mb-0 rtl:space-x-reverse">
                <img src="https://seeklogo.com/images/T/takashi-murakami-logo-A3E27DC9E7-seeklogo.com.png" class="h-8" alt="Flowbite Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">Cozy Knot Creations</span>
            </a>
            <ul class="flex flex-wrap items-center mb-6 text-sm font-medium text-gray-500 sm:mb-0 dark:text-gray-400">
                <li>
                    <a href="privacypolicy" class="hover:underline me-4 md:me-6">Privacy Policy</a>
                </li>
                <li>
                    <a href="licensing" class="hover:underline me-4 md:me-6">Licensing</a>
                </li>
                <li>
                    <a href="termsandcondition" class="hover:underline">Terms and Condition</a>
                </li>
            </ul>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
        <div class="ml-5 sm:flex sm:items-center sm:justify-between">
            <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="http://127.0.0.1:8000/" class="hover:underline">Cozy Knot Creations™</a>. All Rights Reserved.
            </span>
            <div class="flex mt-4 mr-9 sm:justify-center sm:mt-0">
                <a href="https://www.facebook.com/profile.php?id=61557843552189&is_tour_dismissed" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M13.135 6H15V3h-1.865a4.147 4.147 0 0 0-4.142 4.142V9H7v3h2v9.938h3V12h2.021l.592-3H12V6.591A.6.6 0 0 1 12.592 6h.543Z" clip-rule="evenodd"/>
                      </svg>
                    <span class="sr-only">Facebook page</span>
                </a>
                <a href="https://twitter.com/CozykCreations" class="text-gray-500 hover:text-gray-900 dark:hover:text-white ms-5">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M13.795 10.533 20.68 2h-3.073l-5.255 6.517L7.69 2H1l7.806 10.91L1.47 22h3.074l5.705-7.07L15.31 22H22l-8.205-11.467Zm-2.38 2.95L9.97 11.464 4.36 3.627h2.31l4.528 6.317 1.443 2.02 6.018 8.409h-2.31l-4.934-6.89Z"/>
                      </svg>
                    <span class="sr-only">Twitter page</span>
                </a>
                <a href="https://www.google.com/search?q=cozy+knot+creations&sca_esv=c755e3cdc8e39e37&sca_upv=1&rlz=1C1PASC_enPH995PH995&sxsrf=ACQVn084ehBtb2jnrCKtu26kI0ZQebsX8A%3A1712384116508&ei=dOgQZtPcHsrcseMPgemj8AI&ved=0ahUKEwjT5u7396yFAxVKbmwGHYH0CC4Q4dUDCBA&uact=5&oq=cozy+knot+creations&gs_lp=Egxnd3Mtd2l6LXNlcnAiE2Nvenkga25vdCBjcmVhdGlvbnMyBxAAGIAEGAoyCxAAGIAEGIoFGIYDSLUiUKENWPUgcAB4ApABAJgBtwOgAbcKqgEHMi0xLjIuMbgBA8gBAPgBAZgCBaACwgrCAgQQABhHwgIGEAAYFhgemAMAiAYBkAYIkgcJMS4wLjEuMi4xoAfrDQ&sclient=gws-wiz-serp" class="ml-5 text-gray-500 hover:text-gray-900 dark:hover:text-white">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12.037 21.998a10.313 10.313 0 0 1-7.168-3.049 9.888 9.888 0 0 1-2.868-7.118 9.947 9.947 0 0 1 3.064-6.949A10.37 10.37 0 0 1 12.212 2h.176a9.935 9.935 0 0 1 6.614 2.564L16.457 6.88a6.187 6.187 0 0 0-4.131-1.566 6.9 6.9 0 0 0-4.794 1.913 6.618 6.618 0 0 0-2.045 4.657 6.608 6.608 0 0 0 1.882 4.723 6.891 6.891 0 0 0 4.725 2.07h.143c1.41.072 2.8-.354 3.917-1.2a5.77 5.77 0 0 0 2.172-3.41l.043-.117H12.22v-3.41h9.678c.075.617.109 1.238.1 1.859-.099 5.741-4.017 9.6-9.746 9.6l-.215-.002Z" clip-rule="evenodd"/>
                      </svg>
                    <span class="sr-only">Gmail</span>
                </a>
            </div>
</footer>

@endsection
