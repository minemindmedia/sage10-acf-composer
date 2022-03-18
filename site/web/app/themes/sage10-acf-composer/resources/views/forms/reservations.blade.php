<x-html-forms :form="$form" id="reservations">
  <div class="flex flex-col space-y-8">
    <div class="grid grid-cols-3 grid-rows-1 gap-4">
      <div>
        <label for="Your name" class="block">Your name:
          <input
            name="name"
            type="text"
            value=""
            class="block w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
            autofocus
            required
          >
        </label>
      </div>

      <div>
        <label for="email" class="block">Email:
          <input
            name="email"
            type="text"
            value=""
            class="block w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
            required
          >
        </label>
      </div>

      <div>
        <label for="phone" class="block">Phone:
          <input
            name="phone"
            type="phone"
            value=""
            class="block w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
            required
          >
        </label>
      </div>
    </div>

    <div class="grid grid-cols-2 gap-4">
      <div>
        <label for="arrival_date" class="block">Arrival date:
          <input
            name="arrival_date"
            type="date"
            class="block w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
            x-ref="arrival_date"
            required
          >
        </label>
      </div>
    
      <div class="">
        <label for="departure_date" class="block">Departure date:
          <input
            name="departure_date"
            type="date"
            class="block w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
            x-ref="departure_date"
            required
          >
        </label>
      </div>
    </div>
    <div>
      <p>Please select the charter you're most interested in:</p>
    </div>
    <div>

      <!-- Radio Group -->
      <div
          x-data="{
              value: null,
              select(option) { this.value = option },
              isSelected(option) { return this.value === option },
              hasRovingTabindex(option, el) {
                  // If this is the first option element and no option has been selected, make it focusable.
                  if (this.value === null && Array.from(el.parentElement.children).indexOf(el) === 0) return true

                  return this.isSelected(option)
              },
              selectNext(e) {
                  let el = e.target
                  let siblings = Array.from(el.parentElement.children)
                  let index = siblings.indexOf(el)
                  let next = siblings[index === siblings.length - 1 ? 0 : index + 1]

                  next.click(); next.focus();
              },
              selectPrevious(e) {
                  let el = e.target
                  let siblings = Array.from(el.parentElement.children)
                  let index = siblings.indexOf(el)
                  let previous = siblings[index === 0 ? siblings.length - 1 : index - 1]

                  previous.click(); previous.focus();
              },
          }"
          @keydown.down.stop.prevent="selectNext"
          @keydown.right.stop.prevent="selectNext"
          @keydown.up.stop.prevent="selectPrevious"
          @keydown.left.stop.prevent="selectPrevious"
          role="radiogroup"
          :aria-labelledby="$id('radio-group-label')"
          x-id="['radio-group-label']"
      >
          <!-- Radio Group Label -->
          <label :id="$id('radio-group-label')" role="none" class="hidden">Charter selection:<span x-text="value"></span></label>

          <div class="max-w-full mt-4 space-y-4">
              <!-- Option -->
              <div
                  x-data="{ option: 'full-day-charter' }"
                  @click="select(option)"
                  @keydown.enter.stop.prevent="select(option)"
                  @keydown.space.stop.prevent="select(option)"
                  :aria-checked="isSelected(option)"
                  :tabindex="hasRovingTabindex(option, $el) ? 0 : -1"
                  :aria-labelledby="$id('radio-option-label')"
                  :aria-describedby="$id('radio-option-description')"
                  x-id="['radio-option-label', 'radio-option-description']"
                  role="radio"
                  class="flex w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
              >
                  <!-- Checked Indicator -->
                  <span
                      :class="{ 'bg-blue-900': isSelected(option) }"
                      class="inline-flex items-center justify-center w-4 h-4 mt-1 border-2 border-gray-400 rounded-full ring-1 ring-gray-400"
                      aria-hidden="true"
                  ></span>

                  <span class="ml-3">
                      <!-- Primary Label -->
                      <p :id="$id('radio-option-label')">Full Day Charter</p>

                      <!-- Secondary Information -->
                      <span :id="$id('radio-option-description')" class="mt-2 text-sm">
                          7:15am - 4:00pm / 8+ hrs
                      </span>
                  </span>
              </div>

              <div class="grid grid-cols-2 grid-rows-2 gap-4">
                <div
                  x-data="{ option: 'three-quarter-day-charter' }"
                  @click="select(option)"
                  @keydown.enter.stop.prevent="select(option)"
                  @keydown.space.stop.prevent="select(option)"
                  :aria-checked="isSelected(option)"
                  :tabindex="hasRovingTabindex(option, $el) ? 0 : -1"
                  :aria-labelledby="$id('radio-option-label')"
                  :aria-describedby="$id('radio-option-description')"
                  x-id="['radio-option-label', 'radio-option-description']"
                  role="radio"
                  class="flex w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
              >
                  <!-- Checked Indicator -->
                  <span
                      :class="{ 'bg-blue-900': isSelected(option) }"
                      class="inline-flex items-center justify-center w-4 h-4 mt-1 border-2 border-gray-400 rounded-full ring-1 ring-gray-400"
                      aria-hidden="true"
                  ></span>

                  <span class="ml-3">
                      <!-- Primary Label -->
                      <p :id="$id('radio-option-label')">3/4 Day Charter</p>

                      <!-- Secondary Information -->
                      <span :id="$id('radio-option-description')" class="mt-2 text-sm">
                          7:15am - 2:00pm / 6+ hrs
                      </span>
                  </span>
                </div>

                <div
                  x-data="{ option: 'half-day-charter' }"
                  @click="select(option)"
                  @keydown.enter.stop.prevent="select(option)"
                  @keydown.space.stop.prevent="select(option)"
                  :aria-checked="isSelected(option)"
                  :tabindex="hasRovingTabindex(option, $el) ? 0 : -1"
                  :aria-labelledby="$id('radio-option-label')"
                  :aria-describedby="$id('radio-option-description')"
                  x-id="['radio-option-label', 'radio-option-description']"
                  role="radio"
                  class="flex w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
              >
                  <!-- Checked Indicator -->
                  <span
                      :class="{ 'bg-blue-900': isSelected(option) }"
                      class="inline-flex items-center justify-center w-4 h-4 mt-1 border-2 border-gray-400 rounded-full ring-1 ring-gray-400"
                      aria-hidden="true"
                  ></span>

                  <span class="ml-3">
                      <!-- Primary Label -->
                      <p :id="$id('radio-option-label')">Half Day Charter</p>

                      <!-- Secondary Information -->
                      <span :id="$id('radio-option-description')" class="mt-2 text-sm">
                          5+ hrs
                      </span>
                  </span>
                </div>

                <div
                  x-data="{ option: 'early-morning-charter-short' }"
                  @click="select(option)"
                  @keydown.enter.stop.prevent="select(option)"
                  @keydown.space.stop.prevent="select(option)"
                  :aria-checked="isSelected(option)"
                  :tabindex="hasRovingTabindex(option, $el) ? 0 : -1"
                  :aria-labelledby="$id('radio-option-label')"
                  :aria-describedby="$id('radio-option-description')"
                  x-id="['radio-option-label', 'radio-option-description']"
                  role="radio"
                  class="flex w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
              >
                  <!-- Checked Indicator -->
                  <span
                      :class="{ 'bg-blue-900': isSelected(option) }"
                      class="inline-flex items-center justify-center w-4 h-4 mt-1 border-2 border-gray-400 rounded-full ring-1 ring-gray-400"
                      aria-hidden="true"
                  ></span>

                  <span class="ml-3">
                      <!-- Primary Label -->
                      <p :id="$id('radio-option-label')">Early Morning Charter (Short)</p>

                      <!-- Secondary Information -->
                      <span :id="$id('radio-option-description')" class="mt-2 text-sm">
                          5:00am - 2:00pm / 9+ hrs
                      </span>
                  </span>
                </div>

                <div
                  x-data="{ option: 'early-morning-charter-long' }"
                  @click="select(option)"
                  @keydown.enter.stop.prevent="select(option)"
                  @keydown.space.stop.prevent="select(option)"
                  :aria-checked="isSelected(option)"
                  :tabindex="hasRovingTabindex(option, $el) ? 0 : -1"
                  :aria-labelledby="$id('radio-option-label')"
                  :aria-describedby="$id('radio-option-description')"
                  x-id="['radio-option-label', 'radio-option-description']"
                  role="radio"
                  class="flex w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
              >
                  <!-- Checked Indicator -->
                  <span
                      :class="{ 'bg-blue-900': isSelected(option) }"
                      class="inline-flex items-center justify-center w-4 h-4 mt-1 border-2 border-gray-400 rounded-full ring-1 ring-gray-400"
                      aria-hidden="true"
                  ></span>

                  <span class="ml-3">
                      <!-- Primary Label -->
                      <p :id="$id('radio-option-label')">Early Morning Charter (Long)</p>

                      <!-- Secondary Information -->
                      <span :id="$id('radio-option-description')" class="mt-2 text-sm">
                          5:00am - 4:00pm / 11+ hrs
                      </span>
                  </span>
                </div>
              </div>
          </div>
      </div>
    </div>
    <div class="grid grid-cols-1 grid-rows-1 gap-4">
      <div class="flex">
        <label for="Your name" class="flex-1 mr-12 whitespace-nowrap">If you're planning a charter, how many will be in your party?<br>
          <span class="italic">(We can accommodate groups up to 16 people)</span></label>
          <input
            name="Your name"
            type="number"
            value="1"
            class="block w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
            autofocus
            required
          >
        
      </div>
    </div>
    <div>
      <p>We provide a wide range of other activities to keep you busy during your vsit. If you're interested in any of the following, please select all that apply:</p>
    </div>
    <div class="grid grid-cols-3 gap-4">
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="sunsetCatamaranTour" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Sunset catamaran tour
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="atvTour" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              ATV Beach & Mountain Tour
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="sportFishingPackages" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Sport Fishing Packages
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="scubaSnorkeling" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Scuba or Snorkeling
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="surfTrips" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Surf Trips
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="horsebackRiding" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Horseback Riding
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="ziplining" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Zipline Canopy Tours
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="yogaClasses" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Yoga Classes
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="volcanoTrips" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Volcano Trips
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="turtleTours" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Turtle Tours
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="spaTrips" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              SPA Trips
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="massage" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              In-House Massage
          </label>
      </div>
      <div
          x-data="{ value: false }"
          class="flex items-center justify-start"
          x-id="['toggle-label']"
      >
        <input type="hidden" name="cloudForest" :value="value">
          <button
              x-ref="toggle"
              @click="value = ! value"
              type="button"
              role="switch"
              :aria-checked="value"
              :aria-labelledby="$id('toggle-label')"
              :class="value ? 'bg-blue-900 border-2 border-blue-900' : 'bg-white border-2 border-gray-400'"
              class="relative inline-flex w-10 px-0 py-1 mr-2 rounded-full"
          >
              <span
                  :class="value ? 'bg-white translate-x-5' : 'bg-gray-500 translate-x-1'"
                  class="w-3 h-3 transition rounded-full"
                  aria-hidden="true"
              ></span>
          </button>
          <label
              @click="$refs.toggle.click(); $refs.toggle.focus()"
              :id="$id('toggle-label')"
              class="text-black transition-colors dark:text-white"
          >
              Rain & Cloudforest Trips
          </label>
      </div>
    </div>
    <div class="">
      <label for="inquiryMessage" class="block">If you have any additional information about your trips, please include it here:
        <textarea
          name="inquiryMessage"
          cols="30"
          rows="4"
          class="flex w-full p-2 mt-1 border border-b-2 border-gray-400 shadow-sm border-b-gray-500 focus:border-t-0 focus:border-r-0 focus:border-l-0 focus:border-b-blue-900 focus:ring-0 focus:outline-none"
          x-ref="inquiryMessage"
          required
        ></textarea>
      </label>
    </div>

    <div>
      <input
        type="submit"
        value="Submit"
        class="cursor-pointer btn btn-md btn-primary"
      />
    </div>
  </div>
</x-html-forms>


