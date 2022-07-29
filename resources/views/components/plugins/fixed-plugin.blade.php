<div fixed-plugin>
    <a fixed-plugin-button class="bottom-7.5 {{ (Request::is('rtl') ? 'left-7.5' : ' right-7.5') }} text-size-xl z-990 shadow-soft-lg rounded-circle fixed cursor-pointer bg-white px-4 py-2 text-slate-700">
      <i class="py-2 pointer-events-none fa fa-cog"> </i>
    </a>
    <!-- -right-90 in loc de 0-->
    <div fixed-plugin-card class="z-sticky shadow-soft-3xl w-90 ease-soft {{ (Request::is('rtl') ? '-left-90 right-auto' : '-right-90 left-auto') }} fixed top-0 flex h-full min-w-0 flex-col break-words rounded-none border-0 bg-white bg-clip-border px-2.5 duration-200">
      <div class="px-6 pt-4 pb-0 mb-0 bg-white border-b-0 rounded-t-2xl">
        <div class="{{ (Request::is('rtl') ? 'float-right' : 'float-left') }}">
          <h5 class="mt-4 mb-0">Soft UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="{{ (Request::is('rtl') ? 'float-left' : 'float-right') }} mt-6">
          <button fixed-plugin-close-button class="inline-block p-0 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border-0 rounded-lg shadow-none cursor-pointer hover:scale-102 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 active:opacity-85 text-slate-700">
            <i class="fa fa-close"></i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="h-px mx-0 my-1 bg-transparent bg-gradient-horizontal-dark" />
      <div class="flex-auto p-6 pt-0 sm:pt-4">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>
        <a href="javascript:void(0)">
          <div class="my-2 {{ (Request::is('rtl') ? 'text-right' : 'text-left') }}" sidenav-colors>
            <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-fuchsia relative inline-block cursor-pointer whitespace-nowrap border border-solid border-slate-700 text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" active-color data-color="fuchsia" onclick="sidebarColor(this)"></span>
            <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-dark-gray relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="dark-gray" onclick="sidebarColor(this)"></span>
            <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-cyan relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="cyan" onclick="sidebarColor(this)"></span>
            <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-lime relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="lime" onclick="sidebarColor(this)"></span>
            <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-orange relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="orange" onclick="sidebarColor(this)"></span>
            <span class="py-2.2-em text-size-xs px-3.6-em rounded-circle h-5.75 mr-1.25 w-5.75 ease-soft-in-out bg-gradient-red relative inline-block cursor-pointer whitespace-nowrap border border-solid border-white text-center align-baseline font-bold uppercase leading-none text-white transition-all duration-200 hover:border-slate-700" data-color="red" onclick="sidebarColor(this)"></span>
          </div>
        </a>
        <!-- Sidenav Type -->
        <div class="mt-4">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="leading-normal text-size-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="flex">
          <button transparent-style-btn class="inline-block w-full px-4 py-3 mb-2 font-bold text-center text-white uppercase align-middle transition-all border border-transparent border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-fuchsia xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-fuchsia bg-fuchsia-500 hover:border-fuchsia-500" data-class="bg-transparent" active-style>Transparent</button>
          <button white-style-btn class="inline-block w-full px-4 py-3 mb-2 {{ (Request::is('rtl') ? 'mr-2' : 'ml-2') }} font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg cursor-pointer xl-max:cursor-not-allowed xl-max:opacity-65 xl-max:pointer-events-none xl-max:bg-gradient-fuchsia xl-max:text-white xl-max:border-0 hover:scale-102 hover:shadow-soft-xs active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 border-fuchsia-500 bg-none text-fuchsia-500 hover:border-fuchsia-500" data-class="bg-white">White</button>
        </div>
        <p class="block mt-2 leading-normal text-size-sm xl:hidden">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-4">
          <h6 class="mb-0">Navbar Fixed</h6>
        </div>
        <div class="min-h-6 mb-0.5 block pl-0">
          <input navbarFixed class="rounded-10 duration-250 ease-soft-in-out after:rounded-circle after:shadow-soft-2xl after:duration-250 h-5-em relative {{ (Request::is('rtl') ? 'checked:after:-translate-x-5.25 float-right mt-1 mr-auto bg-right after:-translate-x-px' : 'checked:after:translate-x-5.25 float-left mt-1 ml-auto bg-left after:translate-x-px') }} w-10 cursor-pointer appearance-none border border-solid border-gray-200 bg-slate-800/10 bg-none bg-contain  bg-no-repeat align-top transition-all after:absolute after:top-px after:h-4 after:w-4 after:bg-white after:content-[''] checked:border-slate-800/95 checked:bg-slate-800/95 checked:bg-none checked:bg-right" type="checkbox" />
        </div>
        <hr class="h-px bg-transparent bg-gradient-horizontal-dark sm:my-6" />
        <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center text-white uppercase align-middle transition-all bg-transparent border-0 rounded-lg cursor-pointer leading-pro text-size-xs ease-soft-in hover:shadow-soft-xs hover:scale-102 active:opacity-85 tracking-tight-soft shadow-soft-md bg-150 bg-x-25 bg-gradient-dark-gray" href="https://www.creative-tim.com/product/soft-ui-dashboard-tall" target="_blank">Free Download</a>
        <a class="inline-block w-full px-6 py-3 mb-4 font-bold text-center uppercase align-middle transition-all bg-transparent border border-solid rounded-lg shadow-none cursor-pointer active:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft bg-150 bg-x-25 border-slate-700 text-slate-700 hover:bg-transparent hover:text-slate-700 hover:shadow-none active:bg-slate-700 active:text-white active:hover:bg-transparent active:hover:text-slate-700 active:hover:shadow-none" href="https://www.creative-tim.com/learning-lab/tailwind/html/quick-start/soft-ui-dashboard/" target="_blank">View documentation</a>

        <div class="w-full text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/soft-ui-dashboard-tall" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/soft-ui-dashboard-tall on GitHub" target="_blank">Star</a>
          <h6 class="mt-4">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20out%20Soft%20UI%20Dashboard%20Tailwind%20Laravel%20Livewire%20made%20by%20%40CreativeTim%20%26%20%40UPDIVISION%20%23webdesign%20%23dashboard%20%23tailwind%20%23laravel%20%23livewire&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard-tall" class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-twitter"></i> Tweet </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/soft-ui-dashboard-tall" class="inline-block px-6 py-3 mb-0 mr-2 font-bold text-center text-white uppercase align-middle transition-all border-0 rounded-lg cursor-pointer hover:shadow-soft-xs hover:scale-102 active:opacity-85 leading-pro text-size-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 me-2 border-slate-700 bg-slate-700" target="_blank"> <i class="mr-1 fab fa-facebook-square"></i> Share </a>
        </div>
      </div>
    </div>
  </div>