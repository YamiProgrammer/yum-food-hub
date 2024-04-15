<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>

    @vite('resources/css/app.css')

</head>
<body class="bg-lighthouse">

  @include('components.sidebar')
  
  <main class="w-auto min-h-screen">
    <div class="h-full ml-14 mb-10 md:ml-64">

    @include('components.topbar')

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6 m-10 ">
      <div class="grid grid-row-2">
        <!-- CAROUSEL -->
        <div class="sliderAx mb-5">

          <!-- 1st CONTAINER -->
          <div id="slider-1" class="container my-auto mx-auto">
            <div class="bg-cover bg-pale-ale bg-center border rounded-lg h-auto text-dynamic-black font-poppins py-12 px-10 object-fill">
              <div class="md:w-[1/2] lg:w-[650px]">
                <p class="text-3xl font-bold">Get Discount Voucher</p>
                <p class="text-3xl font-bold">Up To 25%</p>
                <p class="text-2xl mb-10 mt-2 leading-none">Nunc scelerisque nisi eu arcu vehicula tempor. Aliquam quis libero sed felis bibendum faucibus. </p>
                <a href="#" class="bg-dynamic-black py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
              </div>  
            </div>
            <br>
         </div>

         <!-- 2nd CONTAINER -->
        <div id="slider-2" class="container my-auto mx-auto">
          <div class="bg-cover bg-dynamic-black bg-top border rounded-lg h-auto text-white font-poppins py-12 px-10 object-fill">
            <div class="md:w-[650px]">
              <p class="text-3xl font-bold">Get Discount Voucher</p>
              <p class="text-3xl font-bold">Up To 25%</p>
              <p class="text-2xl mb-10 mt-2 leading-none">Nunc scelerisque nisi eu arcu vehicula tempor. Aliquam quis libero sed felis bibendum faucibus. </p>
              <a href="#" class="bg-pale-ale py-4 px-8 text-dynamic-black font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact us</a>
            </div>

          </div>
          <br>
        </div>

        <!-- CONTAINER BUTTONS -->
       <div  class="flex justify-between w-12 mx-auto pb-2">
        <button id="sButton1" onclick="sliderButton1()" class="bg-pale-ale rounded-full w-4 pb-2 " ></button>
        <button id="sButton2" onclick="sliderButton2()" class="bg-pale-ale rounded-full w-4 p-2"></button>
      </div>
    </div>
    <!-- /CAROUSEL -->

    <div class="bg-white border border-gray-100 shadow-md shadow-black/5 p-6 rounded-md ">
            <div class="flex justify-between mb-4 items-start font-poppins">
                <!-- CATEGORY -->
                <div class="font-bold">Category</div>
                <a href="#"><div class="font-bold">See all -></div></a>
            </div>

            <!-- TABS -->
            <div class="md:w-auto mx-auto mt-4 rounded">
                <ul id="tabs" class="flex flex-col sm:flex-row w-auto px-1 pt-2 font-poppins text-sm">
                    <li class="px-4 py-2 -mb-px font-bold text-gray-800 border-b-2 border-dynamic-black bg-pale-ale rounded-t opacity-50"><a id="default-tab" href="#first">Kambing Special</a></li>
                    <li class="px-4 py-2 font-bold text-gray-800 rounded-t opacity-50"><a href="#second">Lutong Bahay</a></li>
                    <li class="px-4 py-2 font-bold text-gray-800 rounded-t opacity-50"><a href="#third">Noddle Dishes</a></li>
                    <li class="px-4 py-2 font-bold text-gray-800 rounded-t opacity-50"><a href="#fourth">Chicken</a></li>
                    <li class="px-4 py-2 font-bold text-gray-800 rounded-t opacity-50"><a href="#five">Sizzling</a></li>
                    <li class="px-4 py-2 font-bold text-gray-800 rounded-t opacity-50"><a href="#five">Silog</a></li>
                </ul>

                <!-- Popular Dishes -->
                <div class="flex justify-between mt-5 mb-4 items-start font-poppins">
                <div class="font-bold">Popular Dishes</div>
                <a href="#"><div class="font-bold">See all -></div></a>
                </div>
                
                <!-- TAB CONTENTS -->
                <div id="tab-contents">
                    <!-- TAB 1  -->
                    <div id="first" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-2 lg:grid-cols-4 xl:grid-cols-4">
                      <!-- ITEM #1 -->
                      <div class="flex h-auto items-center justify-center font-poppins">
                        <div class="mx-auto px-5">
                          <div class="max-w-xs cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
                            <img class="w-full rounded-lg object-cover object-center" src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="product" />
                            <p class="my-4 pl-4 font-bold text-dynamic-black text-center">Sinampalukan</p>
                            <div class="flex justify-between items-starts">
                              <p class="mb-4 text-lg font-semibold text-gray-800">₱250</p>
                              <p class="mb-4 text-lg font-semibold text-fortress-grey line-through">₱360</p>
                            </div>
                            <button type="submit" class="bg-pale-ale text-dynamic-black font-bold font-poppins text-xs rounded-md p-2 w-full ">Order</button>
                          </div>
                        </div>
                      </div>
                      <!-- ITEM #2 -->
                      <div class="flex h-auto items-center justify-center font-poppins">
                        <div class="mx-auto px-5">
                          <div class="max-w-xs cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
                            <img class="w-full rounded-lg object-cover object-center" src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="product" />
                            <p class="my-4 pl-4 font-bold text-dynamic-black text-center">Kaldereta</p>
                            <div class="flex justify-between items-starts">
                              <p class="mb-4 text-lg font-semibold text-gray-800">₱250</p>
                              <p class="mb-4 text-lg font-semibold text-fortress-grey line-through">₱370</p>
                            </div>
                            <button type="submit" class="bg-pale-ale text-dynamic-black font-bold font-poppins text-xs rounded-md p-2 w-full ">Order</button>
                          </div>
                        </div>
                      </div>    
                      <!-- ITEM #3 -->
                      <div class="flex h-auto items-center justify-center font-poppins">
                        <div class="mx-auto px-5">
                          <div class="max-w-xs cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
                            <img class="w-full rounded-lg object-cover object-center" src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="product" />
                            <p class="my-4 pl-4 font-bold text-dynamic-black text-center">Papaitan</p>
                            <div class="flex justify-between items-starts">
                              <p class="mb-4 text-lg font-semibold text-gray-800">₱250</p>
                              <p class="mb-4 text-lg font-semibold text-fortress-grey line-through">₱390</p>
                            </div>
                            <button type="submit" class="bg-pale-ale text-dynamic-black font-bold font-poppins text-xs rounded-md p-2 w-full ">Order</button>
                          </div>
                        </div>
                      </div>
                      <!-- ITEM #4 -->
                      <div class="flex h-auto items-center justify-center font-poppins">
                        <div class="mx-auto px-5">
                          <div class="max-w-xs cursor-pointer rounded-lg bg-white p-2 shadow duration-150 hover:scale-105 hover:shadow-md">
                            <img class="w-full rounded-lg object-cover object-center" src="https://images.unsplash.com/photo-1511556532299-8f662fc26c06?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="product" />
                            <p class="my-4 pl-4 font-bold text-dynamic-black text-center">Kilawin</p>
                            <div class="flex justify-between items-starts">
                              <p class="mb-4 text-lg font-semibold text-gray-800">₱250</p>
                              <p class="mb-4 text-lg font-semibold text-fortress-grey line-through">₱360</p>
                            </div>
                            <button type="submit" class="bg-flame-seal text-dynamic-black font-bold font-poppins text-xs rounded-md p-2 w-full ">Order</button>
                          </div>
                        </div>
                      </div>

                    <!-- TAB 2 -->
                    </div>
                    <div id="second" class="hidden p-4">
                      Second tab
                    </div>

                    <!-- TAB 3 -->
                    <div id="third" class="hidden p-4">
                      Third tab
                    </div>

                    <!-- TAB 4 -->
                    <div id="fourth" class="hidden p-4">
                      Fourth tab
                    </div>

                    <!-- TAB 5 -->
                    <div id="five" class="hidden p-4">
                      Five tab
                    </div>

                    <!-- TAB 6 -->
                    <div id="six" class="hidden p-4">
                      Five tab
                    </div>
                </div>
                <!-- /TAB CONTENTS -->
            </div>
        </div>
      </div>
      
        <!-- 2ND COLUMN  -->
        <div class=" bg-doctor border border-gray-100 shadow-md shadow-black/5 p-4 rounded-md lg:ml-44">
          <div class="mb-10">
            <div class="font-bold font-poppins text-2xl">Your Balance</div>
          </div>

              <div class="w-full h-auto flex justify-center items-center">
                <div class="w-[364px] h-[170px] relative z-0 rounded-lg">

                <div class="absolute inset-0 py-2 px-4 z-10 bg-black opacity-[31%] -rotate-12 rounded-lg">
                    <div class="mt-3 mb-4 font-poppins">Current Balance</div>
                    <div class="font-normal text-3xl">₱ 5,647.89</div>
                    <div class="flex justify-between mt-5 items-start font-poppins">
                    <div class=" font-medium text-sm">as of april 3, 2024</div>
                    <a href="#"><div class="font-medium text-sm underline">view history</div></a>
                  </div>
                </div>

                  <div class="absolute inset-0 py-2 px-4 z-10 bg-black opacity-[55%] -rotate-6 rounded-lg">
                    <div class="mt-3 mb-4 font-poppins">Current Balance</div>
                    <div class="font-normal text-3xl">₱ 5,647.89</div>
                    <div class="flex justify-between mt-5 items-start font-poppins">
                    <div class=" font-medium text-sm">as of april 3, 2024</div>
                    <a href="#"><div class="font-medium text-sm underline">view history</div></a>
                  </div>
                </div>

                <div class="absolute inset-0 py-2 px-4 z-10 bg-liquorice rounded-lg font-poppins">
                    <div class="mt-3 mb-4 text-white-smoke">Current Balance</div>
                    <div class="font-normal text-3xl text-white-smoke">₱ 5,647.89</div>
                    <div class="flex justify-between mt-5 items-start">
                    <div class=" font-medium text-sm text-baby-grey">as of april 3, 2024</div>
                    <a href="#"><div class="font-medium text-sm underline text-clouded">view history</div></a>
                  </div>
                </div>
              </div>
            </div>

            <div class="font-poppins">
              <div class="mt-14 text-sm">Your Address</div>
              <div class="text-medium">0406-B, San Marcelino St., Ermita Manila, 1000</div>
              <button type="submit" class="bg-dynamic-black text-white font-bold font-poppins text-xs rounded-md p-3 w-28 mr-2 mt-3">Add details</button>
              <button type="submit" class="bg-disco text-dynamic-black font-bold font-poppins text-xs rounded-md p-3 w-28">Add note</button>
            </div>

            <div class="mt-10">
              <div class="text-2xl font-poppins font-bold">My Order</div>
              <div class="flex justify-center items-center py-24 font-poppins text-moon">You haven't ordered anything yet.</div>
            </div>

        </div>

    </div> 
    </div>
 
  </main>

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/@popperjs/core@2"></script>

    <script>
        // Tabs
        let tabsContainer = document.querySelector("#tabs");

        let tabTogglers = tabsContainer.querySelectorAll("a");
        console.log(tabTogglers);

        tabTogglers.forEach(function(toggler){
            toggler.addEventListener("click", function(e){
                e.preventDefault();

                let tabName = this.getAttribute("href");

                let tabContents = document.querySelector("#tab-contents");

                for (let i = 0; i < tabContents.children.length; i++) {

                tabTogglers[i].parentElement.classList.remove("bg-pale-ale","border-dynamic-black", "border-b",  "-mb-px", "opacity-100");  tabContents.children[i].classList.remove("hidden");
                if ("#" + tabContents.children[i].id === tabName) {
                continue;
                }
                tabContents.children[i].classList.add("hidden");

                }
                e.target.parentElement.classList.add("bg-pale-ale","border-dynamic-black", "border-b-4", "-mb-px", "opacity-100");
            });
        });

        // start: Popper
        const popperInstance = {}
        document.querySelectorAll('.dropdown').forEach(function (item, index) {
            const popperId = 'popper-' + index
            const toggle = item.querySelector('.dropdown-toggle')
            const menu = item.querySelector('.dropdown-menu')
            menu.dataset.popperId = popperId
            popperInstance[popperId] = Popper.createPopper(toggle, menu, {
                modifiers: [
                    {
                        name: 'offset',
                        options: {
                            offset: [0, 8],
                        },
                    },
                    {
                        name: 'preventOverflow',
                        options: {
                            padding: 24,
                        },
                    },
                ],
                placement: 'bottom-end'
            });
        })
        document.addEventListener('click', function (e) {
            const toggle = e.target.closest('.dropdown-toggle')
            const menu = e.target.closest('.dropdown-menu')
            if (toggle) {
                const menuEl = toggle.closest('.dropdown').querySelector('.dropdown-menu')
                const popperId = menuEl.dataset.popperId
                if (menuEl.classList.contains('hidden')) {
                    hideDropdown()
                    menuEl.classList.remove('hidden')
                    showPopper(popperId)
                } else {
                    menuEl.classList.add('hidden')
                    hidePopper(popperId)
                }
            } else if (!menu) {
                hideDropdown()
            }
        })

        function hideDropdown() {
            document.querySelectorAll('.dropdown-menu').forEach(function (item) {
                item.classList.add('hidden')
            })
        }
        function showPopper(popperId) {
            popperInstance[popperId].setOptions(function (options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        { name: 'eventListeners', enabled: true },
                    ],
                }
            });
            popperInstance[popperId].update();
        }
        function hidePopper(popperId) {
            popperInstance[popperId].setOptions(function (options) {
                return {
                    ...options,
                    modifiers: [
                        ...options.modifiers,
                        { name: 'eventListeners', enabled: false },
                    ],
                }
            });
        }
        // end: Popper

        // Carousel
        var cont=0;
        
        function loopSlider(){
        var xx= setInterval(function(){
        switch(cont)
        {
        case 0:{
            $("#slider-1").fadeOut(400);
            $("#slider-2").delay(400).fadeIn(400);
            $("#sButton1").removeClass("bg-dynamic-black");
            $("#sButton2").addClass("bg-dynamic-black");
        cont=1;
        
        break;
        }
        case 1:
        {
        
            $("#slider-2").fadeOut(400);
            $("#slider-1").delay(400).fadeIn(400);
            $("#sButton2").removeClass("bg-dynamic-black");
            $("#sButton1").addClass("bg-dynamic-black");
           
        cont=0;
        
        break;
        }
        
        
        }},8000);

}

function reinitLoop(time){
clearInterval(xx);
setTimeout(loopSlider(),time);
}



function sliderButton1(){

    $("#slider-2").fadeOut(400);
    $("#slider-1").delay(400).fadeIn(400);
    $("#sButton2").removeClass("bg-dynamic-black");
    $("#sButton1").addClass("bg-dynamic-black");
    reinitLoop(4000);
    cont=0
    
    }
    
    function sliderButton2(){
    $("#slider-1").fadeOut(400);
    $("#slider-2").delay(400).fadeIn(400);
    $("#sButton1").removeClass("bg-dynamic-black");
    $("#sButton2").addClass("bg-dynamic-black");
    reinitLoop(4000);
    cont=1
    
    }

    $(window).ready(function(){
        $("#slider-2").hide();
        $("#sButton1").addClass("bg-dynamic-black");
        

        loopSlider();
     
        
    
    
    
    
    });
    </script>

</body>
</html>