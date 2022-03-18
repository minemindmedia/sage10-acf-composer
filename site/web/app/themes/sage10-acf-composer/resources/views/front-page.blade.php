@extends('layouts.app')

@section('content')
  @include('partials.page-header')
  

  <div>
    <div class="pt-10 bg-gray-900 bg-top bg-no-repeat bg-cover sm:pt-16 lg:pt-8 lg:pb-14 lg:overflow-hidden" style="background-image: url('/images/deep-sea.jpeg')">
      <div class="mx-auto max-w-7xl lg:px-8">
        <div class="lg:grid lg:grid-cols-2 lg:gap-8">
          <div class="max-w-md px-4 mx-auto sm:max-w-2xl sm:px-6 sm:text-center lg:px-0 lg:text-left lg:flex lg:items-center">
            <div class="lg:py-24">
              <a href="#" class="inline-flex items-center p-1 pr-2 text-white bg-black rounded-full sm:text-base lg:text-sm xl:text-base hover:text-gray-200">
                <span class="px-3 py-0.5 text-white text-xs font-semibold leading-5 uppercase tracking-wide bg-indigo-500 rounded-full">Why sageacfc?</span>
                <span class="ml-4 text-sm">Our pledge to you</span>
                <!-- Heroicon name: solid/chevron-right -->
                <svg class="w-5 h-5 ml-2 text-gray-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" />
                </svg>
              </a>
              <h1 class="mt-4 text-4xl font-extrabold tracking-tight text-white sm:mt-5 sm:text-6xl lg:mt-6 xl:text-6xl">
                <span class="block">Tamarindo's #1</span>
                <span class="block text-yellow-400">Sport Fishing Operation!</span>
              </h1>
              <p class="mt-3 text-base text-gray-300 sm:mt-5 sm:text-xl lg:text-lg">Your trip to Costa Rica is more than a fishing trip and we understand and appreciate this. We are here to answer any and all questions you may have about Tamarindo, fishing charters and full vacation packages. We have not hosted a single client who has left Costa Rica and not wanting to return.</p>
              <div class="mt-10 sm:mt-12">
                <form action="#" class="sm:max-w-xl sm:mx-auto lg:mx-0">
                  <div class="sm:flex">
                    <div class="mt-3 sm:mt-0">
                      <div x-data="{ open: false }" class="flex justify-center">
                          <!-- Trigger -->
                          <span x-on:click="open = true">
                              <button type="button" class="block w-full px-4 py-3 font-medium text-white bg-indigo-500 rounded-md shadow hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-300 focus:ring-offset-gray-900">Inquire Now</button>
                          </span>
                          @include('components.modals.reservations')
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <div class="mt-12 -mb-16 sm:-mb-48 lg:m-0 lg:relative">
            <div class="max-w-md px-4 mx-auto sm:max-w-2xl sm:px-6 lg:max-w-none lg:px-0">
              <!-- Illustration taken from Lucid Illustrations: https://lucid.pixsellz.io/ -->
              <img class="w-full lg:absolute lg:inset-y-0 lg:left-0" src="@asset("images/swordfish.png")" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    @include('sections.adventures-3up')
  </div>



@endsection
