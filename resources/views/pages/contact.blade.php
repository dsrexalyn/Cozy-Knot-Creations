@extends('layouts.app')

@section('content')


 <section class="mt-5 bg-center bg-no-repeat bg-[url('https://scontent.fmnl9-3.fna.fbcdn.net/v/t1.15752-9/431300368_1116660262872082_8050365820952428486_n.jpg?_nc_cat=100&ccb=1-7&_nc_sid=5f2048&_nc_eui2=AeEMBLlOyW38hsZlRzzptj6e92b-C8qS9Qb3Zv4LypL1BiiQMeYpQt3K7Pc10G2HMVtz41fjGcgNykeDwN23kN7d&_nc_ohc=GX2GbeUQgQAAX8NiVNB&_nc_ht=scontent.fmnl9-3.fna&oh=03_AdQ6PWm4VJOQjZIxofamYKn66b3e16HwhvBiQ0R8KJ_umA&oe=6629EEC6')] bg-gray-500 bg-blend-multiply">
    <div class="max-w-screen-xl px-4 py-24 mx-auto text-center lg:py-56">
        <h1 class="mb-4 text-4xl font-extrabold leading-none tracking-tight text-white md:text-5xl lg:text-6xl">Say Hello! </h1>
        <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
         Please note that this contact page is for Cozy Knot Creations store customers only. Due to the overwhelming amount of crochet questions, we cannot offer support on individual projects and questions relating to Bella Coco tutorials. If you need further assistance for projects, we have a supportive crochet group on Facebook. Thank you for your understanding. </p>
         <p class="mb-8 text-lg font-normal text-gray-300 lg:text-xl sm:px-16 lg:px-48">
            For help or assistance with orders made through Cozy Knot Creations please email:cozyknotcreations@gmail.com PLEASE NOTE: We cannot help with any orders made through Crochet Society as we have not have access to order or payment details. Please email:crochetsociety@practicalpublishing.co.uk </p>
        <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
        </div>
    </div>
</section>

<!-- drawer init and show -->
<div class="text-center">
   <button class="text-lg text-black bg-pink-50 mt-4 mb-4 hover:bg-pink-100 focus:ring-4 focus:ring-pink-300 font-medium rounded-lg px-5 py-2.5 dark:bg-blue-600 dark:hover:bg-pink-700 focus:outline-none dark:focus:ring-blue-800" type="button" data-drawer-target="drawer-contact" data-drawer-show="drawer-contact" aria-controls="drawer-contact">
     𝑺𝒉𝒐𝒘 𝑪𝒐𝒏𝒕𝒂𝒄𝒕 𝑭𝒐𝒓𝒎
   </button>
</div>

<!-- drawer component -->
<div id="drawer-contact" class="fixed top-0 left-0 z-40 h-screen p-4 overflow-y-auto transition-transform -translate-x-full bg-blue-50 w-80 dark:bg-gray-800" tabindex="-1" aria-labelledby="drawer-contact-label">
   <h5 id="drawer-label" class="inline-flex items-center mb-6 text-base font-semibold text-gray-500 uppercase dark:text-gray-400"><svg class="w-4 h-4 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 16">
    <path d="m10.036 8.278 9.258-7.79A1.979 1.979 0 0 0 18 0H2A1.987 1.987 0 0 0 .641.541l9.395 7.737Z"/>
    <path d="M11.241 9.817c-.36.275-.801.425-1.255.427-.428 0-.845-.138-1.187-.395L0 2.6V14a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V2.5l-8.759 7.317Z"/>
  </svg>𝐂𝐨𝐧𝐭𝐚𝐜𝐭𝐬</h5>
   <button type="button" data-drawer-hide="drawer-contact" aria-controls="drawer-contact" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 absolute top-2.5 end-2.5 inline-flex items-center justify-center dark:hover:bg-gray-600 dark:hover:text-white" >
      <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
         <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
      </svg>
      <span class="sr-only">Close menu</span>
   </button>
   <form class="mb-6">
      <div class="mb-6">
         <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your email</label>
         <input type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Email" required />
      </div>

      <div class="mb-6">
         <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Your message</label>
         <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
      </div>
      <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 w-full focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800 block">Send message</button>
   </form>
   <p class="mb-2 text-sm text-gray-500 dark:text-gray-400">
      <a href="#" class="hover:underline">ccozyknot@gmail.com</a>
   </p>
   <p class="text-sm text-gray-500 dark:text-gray-400">
      <a href="#" class="hover:underline">0922-456-7890</a>
   </p>
</div>

<footer class="m-4 bg-white rounded-lg shadow-2xl dark:bg-gray-900">
   <div class="w-full max-w-screen-xl p-4 mx-auto md:py-8">
       <div class="mr-9 sm:flex sm:items-center sm:justify-between">
           <a href="https://cozyknotcreations.com/" class="flex items-center mb-4 space-x-3 sm:mb-0 rtl:space-x-reverse">
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
       <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="https://cozyknotcreations.com/" class="hover:underline">Cozy Knot Creations™</a>. All Rights Reserved.</span>
   </div>
</footer>

@endsection
