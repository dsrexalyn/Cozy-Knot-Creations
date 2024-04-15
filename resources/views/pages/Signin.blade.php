@extends('layouts.app')

@section('content')

<div class="py-5 bg-indigo-100">
<div class="p-4 ml-10 ml-auto mr-auto width-360 d-flex">
    <form class="space-y-4" action="#">
        <div>
            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
            <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Email" required />
        </div>
        <div>
            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your password</label>
            <input type="password" name="password" id="password" placeholder="••••••••" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required />
        </div>
        <div class="flex justify-between">
            <div class="flex items-start">
                <div class="flex items-center h-5">
                    <input id="remember" type="checkbox" value="" class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-600 dark:border-gray-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" required />
                </div>
                <label for="remember" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Remember me</label>
            </div>
            <a href="#" class="text-sm text-blue-700 hover:underline dark:text-blue-500">Forget Password?</a>
        </div>
        <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
        <div class="text-sm font-medium text-gray-500 dark:text-gray-300">
            Not registered? <a href="#" class="text-blue-700 hover:underline dark:text-blue-500">Create account</a>
        </div>
    </form>
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
