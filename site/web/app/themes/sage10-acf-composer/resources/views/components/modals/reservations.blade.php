<div
  x-show="open"
  style="display: none"
  x-on:keydown.escape.prevent.stop="open = false"
  role="dialog"
  aria-modal="open"
  x-id="['modal-title']"
  :aria-labelledby="$id('modal-title')"
  class="fixed inset-0 z-50 overflow-y-auto"
>
  <div x-show="open" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>
  <div
      x-show="open" x-transition
      x-on:click="open = false"
      class="relative flex items-center justify-center min-h-screen p-4"
  >
    <div
        x-on:click.stop
        x-trap.noscroll.inert="open"
        class="relative w-full max-w-4xl p-12 overflow-y-auto bg-white border border-black rounded-lg shadow-lg"
    >
        <h2 class="text-3xl font-bold" :id="$id('modal-title')">Make a reservation</h2>
        <p class="mt-2 mb-8 text-gray-600">Fill out the form below to send us your reservation inquiry. We'll get back to you shortly!</p>
        @htmlform('reservations')
    </div>
  </div>
</div>