<!-- This example requires Tailwind CSS v2.0+ -->
<div class="bg-white">
  <!-- Header -->
  <div class="relative pb-32 bg-gray-800">
    <img class="w-full h-full object-cover" src="@asset("images/3up-fishing.jpeg")" alt="">
    <div class="relative max-w-7xl mx-auto py-24 px-4 sm:py-32 sm:px-6 lg:px-8">
      <h1 class="text-4xl font-extrabold tracking-tight text-white md:text-5xl lg:text-6xl">What We Offer</h1>
      <p class="mt-6 max-w-3xl text-xl text-gray-300">Although our main objective is to provide you with World Class fishing, we offer other amazing activities to help you get the most out of your stay in Tamardino.</p>
    </div>
  </div>

  <!-- Overlapping cards -->
  <section class="-mt-32 max-w-7xl mx-auto relative z-10 pb-32 px-4 sm:px-6 lg:px-8" aria-labelledby="contact-heading">
    <h2 class="sr-only" id="contact-heading">Contact us</h2>
    <div class="grid grid-cols-1 gap-y-20 lg:grid-cols-3 lg:gap-y-0 lg:gap-x-8">
      <div class="flex flex-col bg-white rounded-2xl shadow-xl">
        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/phone -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Costa Rica Sport Fishing</h3>
          <p class="mt-4 text-base text-gray-500">Enjoy half-day and full-day fishing charters out of Tamarindo Beach and Playa Flamingo, Costa Rica. Steve and Liisa Quinn create customized vacation packages with the best fishing guides and sport fishing charters.</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>

      <div class="flex flex-col bg-white rounded-2xl shadow-xl">
        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/support -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636l-3.536 3.536m0 5.656l3.536 3.536M9.172 9.172L5.636 5.636m3.536 9.192l-3.536 3.536M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-5 0a4 4 0 11-8 0 4 4 0 018 0z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Scuba Diving</h3>
          <p class="mt-4 text-base text-gray-500">Looking to bring a high quality diving experience to Costa Rica, Seakret Divers Costa Rica was established in 2020. Founders Adrianna Trejos, Scott Jackson, Torin Melville and Luis Carlos Huertas chose the Papagayo region for its massive diversity of marine life, gorgeous scenery and fun yet rural area for tourism. Plus, the local dive sites are perfect for beginner divers without losing appeal to more advanced divers.</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>

      <div class="flex flex-col bg-white rounded-2xl shadow-xl">
        <div class="flex-1 relative pt-16 px-6 pb-8 md:px-8">
          <div class="absolute top-0 p-5 inline-block bg-indigo-600 rounded-xl shadow-lg transform -translate-y-1/2">
            <!-- Heroicon name: outline/newspaper -->
            <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
          </div>
          <h3 class="text-xl font-medium text-gray-900">Adventure Tours</h3>
          <p class="mt-4 text-base text-gray-500">Costa Rica ranks #2 in the world for adventure tourism. We offer tours of Costa Rica for adrenaline seekers or family-oriented, more relaxing tours. From atv tours or zipline including the longest ocean-view zipline in the world. To relax on a catamaran sunset cruise, horseback ride on the beach, or explore a boat river estuary tour.</p>
        </div>
        <div class="p-6 bg-gray-50 rounded-bl-2xl rounded-br-2xl md:px-8">
          <a href="#" class="text-base font-medium text-indigo-700 hover:text-indigo-600">Contact us<span aria-hidden="true"> &rarr;</span></a>
        </div>
      </div>
    </div>
  </section>
</div>
