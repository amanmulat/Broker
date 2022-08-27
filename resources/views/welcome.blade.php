<x-guest-layout>
        <div class="w-4/5 mr-auto ml-auto">
            <div class="flex flex-wrap">
                @livewire('unit-list', ['units' => $units])
            </div>
        </div>
        <x-Modal/>
        
        <div id="contact-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
            <div class="relative p-4 w-full max-w-md h-full md:h-auto">
                <!-- Modal content -->
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="contact-modal">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>  
                    </button>
                    <div class="py-6 px-6 lg:px-8">
                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">Send us a message</h3>
                        <form class="space-y-6" action="#">
                            <div>
                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="name@company.com" required>
                            </div>
                            <div>
                                <label for="phone" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your phone</label>
                                <input type="text" name="phone" id="phone" placeholder="Phone Number" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" required>
                            </div>
                            <div>
                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                                <textarea id="message" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Your message..."></textarea>
                            </div>
                            <button type="submit" class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login to your account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
  
    @livewireScripts
    {{-- <script src="{{asset('js/app.js')}}"></script> --}}
   {{-- <script src="https://unpkg.com/flowbite@1.4.5/dist/flowbite.js"></script> --}}
   {{-- <script src="{{asset('js/tabs.js')}}"  ></script> --}}
    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
    </script>
    <script>
        $(document).ready(function(){

            $(document).on('click', '#getUser', function(e){

                e.preventDefault();

                var url = $(this).data('url');// leave it blank before ajax call
                $('#modal-loader').show();      // load ajax loader

                $.ajax({
                    url: url,
                    type: 'GET',
                    dataType: 'json'
                })
                .done(function(data , unit  , jqXHR){
                    $('#sellPrice').html(data.sell.sell)
                    $('#sellCurrency').html(data.sell.sell_currency)
                    $('#rentCurrency').html(data.rent.rent_currency)
                    $('#rentPrice').html(data.rent.rent)
                    $('#rentPeriod').html(data.rent.rent_period)
                    $('#locationName').html(data.location.location_name)
                    $('#desc').html(data.desc)
                    var image = ''
                    data.unit_image.forEach(element => {
                        image = image + ' ' + `<img class="col-span-2 h-72 w-full object-cover" src='images/${element}' alt="something">`
                    });
                    $('#modalImage').html(image)
                    
                    
                    $('#dynamic-content').html('');    
                    $('#dynamic-content').empty().html(data)// load response 
                    $('#modal-loader').hide();        // hide ajax loader   
                })
                .fail(function(){
                    $('#dynamic-content').html('<i class="glyphicon glyphicon-info-sign"></i> Something went wrong, Please try again...');
                    $('#modal-loader').hide();
                });

            });

        });

    </script>
    <script>
         $(document).ready(function(){
            window.addEventListener("load", (event) => {
                var rent = document.querySelectorAll(".commas");
                if (rent && rent.length > 0) {
                    rent.forEach((rents) => {
                        var some = rents.innerHTML.replace(/\B(?=(\d{3})+(?!\d))/g, ",");
                        rents.innerHTML = some;
                    });
                }
            });
        });

   </script>
</x-guest-layout>


