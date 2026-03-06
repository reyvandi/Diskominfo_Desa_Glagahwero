<footer class="bg-[#0D2B5E] text-white py-10">
  <div class="max-w-7xl mx-auto px-4 sm:px-6">

    {{-- Grid: 1 col mobile, 3 col desktop --}}
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-20 items-start">

      {{-- Map --}}
      <div class="sm:col-span-2 lg:col-span-1">
        <h3 class="text-base font-bold mb-3">Location</h3>
        <div class="w-full h-44 rounded overflow-hidden border border-white/10">
          <iframe
            src="https://maps.google.com/maps?q=Desa%20Glagahwero&z=15&output=embed"
            class="w-full h-full border-0"
            allowfullscreen
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>

      {{-- About Us --}}
      <div>
        <h3 class="text-base font-bold mb-3">About Us</h3>
        <p class="text-sm leading-relaxed text-gray-200">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed do eiusmod tempor incididunt ut labore et dolore
          magna aliqua. Ut enim ad minim veniam, quis nostrud
          exercitation
        </p>
      </div>

      {{-- Our Contact --}}
      <div>
        <h3 class="text-base font-bold mb-3">Our Contact</h3>
        <p class="text-sm text-gray-200 mb-1">08123456789</p>
        <p class="text-sm text-gray-200 mb-4">jemberid@gmail.com</p>

        {{-- Sosial Media Icons --}}
        <div class="flex items-center gap-3">
          {{-- Facebook --}}
          <a href="#" class="border border-white rounded w-8 h-8 flex items-center justify-center hover:bg-white hover:text-[#0D2B5E] transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 512 512">
              <path d="M512 256C512 114.6 397.4 0 256 0S0 114.6 0 256C0 376 82.7 476.8 194.2 504.5l0-170.3-52.8 0 0-78.2 52.8 0 0-33.7c0-87.1 39.4-127.5 125-127.5 16.2 0 44.2 3.2 55.7 6.4l0 70.8c-6-.6-16.5-1-29.6-1-42 0-58.2 15.9-58.2 57.2l0 27.8 83.6 0-14.4 78.2-69.3 0 0 175.9C413.8 494.8 512 386.9 512 256z"/>
            </svg>
          </a>
          {{-- Instagram --}}
          <a href="#" class="border border-white rounded w-8 h-8 flex items-center justify-center hover:bg-white hover:text-[#0D2B5E] transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
              <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
              <circle cx="12" cy="12" r="4"/>
              <circle cx="17.5" cy="6.5" r="0.5" fill="currentColor" stroke="none"/>
            </svg>
          </a>
          {{-- YouTube --}}
          <a href="#" class="border border-white rounded w-8 h-8 flex items-center justify-center hover:bg-white hover:text-[#0D2B5E] transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 001.46 6.42 29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.6C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.95A29 29 0 0023 12a29 29 0 00-.46-5.58zM9.75 15.02V8.98L15.5 12l-5.75 3.02z"/>
            </svg>
          </a>
          {{-- LinkedIn --}}
          <a href="#" class="border border-white rounded w-8 h-8 flex items-center justify-center hover:bg-white hover:text-[#0D2B5E] transition">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
              <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6zM2 9h4v12H2z"/>
              <circle cx="4" cy="4" r="2"/>
            </svg>
          </a>
        </div>
      </div>

    </div>

    {{-- Bottom copyright --}}
    <div class="mt-10 pt-5 border-t border-white/10 text-center text-xs text-gray-400">
      &copy; {{ date('Y') }} Desa Glagahwero. All rights reserved.
    </div>

  </div>
</footer>
