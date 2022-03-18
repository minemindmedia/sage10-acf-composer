@if ($navigation)
  <div class="relative z-50 flex">
    <div class="z-50 flex-1 bg-white">
      <div class="flex items-center w-full h-full pl-8">
        <img class="w-32" src="@asset("images/logo.png")" alt="sageacfc Costa Rica">
      </div>
    </div>
    @foreach ($navigation as $item)
    @php
      $thumb = get_field('thumbnail', $item->id);
      $subtext = get_field('subtext', $item->id);
    @endphp
      <div x-data="{ main_menu: false }" class="container w-auto mx-auto" x-cloak>
        <div class="inline-flex">
          <div x-on:click="main_menu = true" class="z-10 bg-white shadow">
            <div class="flex px-4 py-6 cursor-pointer max-w-7xl sm:px-6 lg:px-8" >      
              <span>{{ $item->label }}</span>
              <!-- <x-iconoir-nav-arrow-down class="w-6 h-6 ml-2 hover:opacity-50" /> -->
            </div>
          </div>
          <div x-show="main_menu" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-30"></div>
          @if ($item->children)
            <div x-show.transition="main_menu" x-on:click.away="main_menu = false" class="absolute inset-x-0 z-50 transform shadow-lg mt-[72px]">
              <div class="p-16 bg-gray-100">
                <div class="flex ">
                    <div class="flex-1">
                      <h4 class="flex w-full mb-4 text-2xl font-bold">{{ $item->label }}</h4>
                    </div>
                    <div>
                      <div x-on:click="main_menu = false" class="cursor-pointer">
                        <!-- <x-iconoir-delete-circled-outline class="w-8 h-8 hover:opacity-50" /> -->
                      </div>
                    </div>
                  </div>
                  @php
                    $total_items = count($item->children);
                  @endphp
                  <div class="grid grid-cols-3">
                    @foreach ($item->children as $child)
                    @php
                      $thumb = get_field('nav_thumb', $child->id);
                      $subtext = get_field('subtext', $child->id);
                    @endphp
                    
                    <a href="{{ get_permalink() }}" class="flex p-6 space-x-4 bg-gray-100 hover:bg-gray-200">
                      <div class="w-32">
                        @if($thumb)
                          <div class="inline-flex items-center justify-center w-32 mr-4">
                            <img src="{{ $thumb['url'] }}" alt="{{ $thumb['alt'] }}">
                          </div>
                        @endif
                      </div>
                      <div>
                        <h3 class="mb-2 text-xl font-medium whitespace-nowrap">{!! $child->label !!}</h3>
                        <p class="flex-1">{{ $subtext }}</p>
                      </div>
                    </a>
                    @endforeach
                  </div>
              </div>
            </div>
          @endif
        </div>
      </div>
    @endforeach
  </div>
@endif