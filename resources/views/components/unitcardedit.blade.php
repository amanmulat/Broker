<x-app-layout>
    <x-slot name="header"> 
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Units') }}
        </h2>
    </x-slot>
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 py-3 md:py-6">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <form action="{{route('unit.update' , $unit )}}" method="POST" enctype="multipart/form-data" class="p-6 bg-white border-b border-gray-200" >
                    @csrf
                    {{method_field('PATCH') }}
                    {{-- {{ csrf_field() }}  --}}
                    <div class="grid lg:grid-cols-2 lg:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" value='{{$unit->unit_name}}' required name="unit_name" id="unit_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="unit_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Unit Name</label>
                        </div>
                        <div class="grid lg:grid-cols-3 lg:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" value='{{$unit->bed}}' required  name="bedroom" id="bedroom" min="0"  oninput="this.value = Math.abs(this.value)" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="bedroom" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bedroom</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" value='{{$unit->bath}}' required  name="bathroom" id="bathroom" min="0"  oninput="this.value = Math.abs(this.value)" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="bathroom" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Bathroom</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" value='{{$unit->area}}' required  name="area" id="area" min="0"  class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="area" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Area (in m2)</label>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 lg:gap-6">
                        <div class="grid lg:grid-cols-2 lg:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="file" name="unit_cover" id="unit_cover" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="unit_cover" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Cover Image</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <img src="{{asset('images/'.$unit->unit_cover)}}" alt="cover image">
                            </div>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" value='{{$unit->tour}}'  name="tour" id="tour" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="tour" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Virtual Tour</label>
                        </div>
                        
                    </div>
                    <div class="grid lg:grid-cols-2 lg:gap-6">
                        
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="number" value='{{$unit->sorting}}' required  name="sorting" id="sorting" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="sorting" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sorting</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                            <textarea id="message"  name="description"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Description" required >{{$unit->desc}}</textarea>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 lg:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input value='{{$unit->location['location_name']}}' required  type="text" name="location_name" id="location_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="location_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">location_name</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" value='{{$unit->location['google_location']}}' required  name="google_location" id="google_location" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="google_location" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Google Location</label>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 lg:gap-6">
                        <div class="grid lg:grid-cols-3 lg:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Available</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" value='{{$unit->sell['sell'] ?? ''}}' required  name="sell" id="sell" min="0"  oninput="this.value = Math.abs(this.value)" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="sell" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Sell Price</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" value='{{$unit->sell['sell_currency'] ?? ''}}' required  name="sell_currency" id="sell_currency" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="sell_currency" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Currency</label>
                            </div>
                        </div>
                        <div class="grid lg:grid-cols-4 lg:gap-6">
                            <div class="relative z-0 w-full mb-6 group">
                                <input checked id="checked-checkbox" type="checkbox" value="" class="w-4 h-4 text-blue-600 bg-gray-100 rounded border-gray-300 focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                <label for="checked-checkbox" class="ml-2 text-sm font-medium text-gray-900 dark:text-gray-300">Available</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="number" value='{{$unit->rent['rent'] ?? ''}}'   name="rent" id="rent" min="0"  oninput="this.value = Math.abs(this.value)" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="rent" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Rent Price</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" value='{{$unit->rent['rent_currency'] ?? ''}}'   name="rent_currency" id="rent_currency" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="rent_currency" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Currency</label>
                            </div>
                            <div class="relative z-0 w-full mb-6 group">
                                <input type="text" value='{{$unit->rent['rent_period'] ?? ''}}'   name="rent_period" id="rent_period" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                <label for="rent_period" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Period</label>
                            </div>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-2 lg:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="kind" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Kind Options</label>
                            <select multiple id="kind" name="kind[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option @if(in_array('ap' ,$unit->kind)) selected @endif value="ap">Appartment</option>
                                <option @if(in_array('vl' ,$unit->kind)) selected @endif value="vl">Villa</option>
                                <option @if(in_array('ld' ,$unit->kind)) selected @endif value="ld">land</option>
                                <option @if(in_array('cd' ,$unit->kind)) selected @endif value="cd">compound</option>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Status Options</label>
                            <select multiple id="status" name="status[]" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                <option @if(in_array('av' ,$unit->status)) selected @endif value="av" class="options">Available</option>
                                <option @if(in_array('rt' ,$unit->status)) selected @endif value="rt" class="options">Rented</option>
                                <option @if(in_array('sd' ,$unit->status)) selected @endif value="sd" class="options">Sold</option>
                                <option @if(in_array('uc' ,$unit->status)) selected @endif id='uconst' class="options" value="uc">Under construction</option>
                            </select>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <label for="progress" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Progress</label>
                            <input id="progress" value="{{$unit->progress ?? 0}}" disabled  oninput="this.nextElementSibling.value = this.value" type="range" min="0" max="100" class="w-full h-2 bg-gray-200 rounded-lg appearance-none cursor-pointer dark:bg-gray-700">
                             <output></output>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" value='{{$unit->furnished}}'  name="furnished" id="furnished" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="furnished" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Furnished (Do not fill if not furnished)</label>
                        </div>
                    </div>
                    <div class="grid lg:grid-cols-4 lg:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="agent_name"  value='{{$unit->contact['agent_name'] ?? ''}}' required id="agent_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="agent_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="agent_email" value='{{$unit->contact['agent_email'] ?? ''}}' required name="agent_email" id="agent_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="agent_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Email</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" value='{{$unit->contact['agent_phone'] ?? ''}}' required  name="agent_phone" id="agent_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                            <label for="agent_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone number (123-456-7890)</label>
                        </div>
                        <div class="relative z-0 w-full mb-6 group">
                            <textarea id="contact_form_text"  name="contact_form_text"  rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Contact text" required >{{$unit->contact['contact_form_text']}}</textarea>
                            <label for="contact_form_text" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Contact Form Text</label>
                        </div>                        
                    </div>
                    <div class="grid lg:grid-cols-2 lg:gap-6">
                        <div class="relative z-0 w-full mb-6 group">
                            <button id="unitBgAdd" type="button">add</button>
                            <button id="unitBgRemove" type="button">remove</button>
                            @foreach ($unit->unit_image as $item)
                            <div class="grid lg:grid-cols-2 lg:gap-6">
                                <div class="relative z-0 w-full mb-6 group" > 
                                    <input type="file" name="unit_image[]" id="unit_image" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                    <label for="unit_image" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Unit Images</label>
                                </div>
                                <img src="{{asset('images/'.$item)}}" alt="cover image">
                            </div>
                            @endforeach
                            <div id="bgDiv" class="relative z-0 w-full mb-1 group"></div> 
                        </div>
                        <div>
                            <div>
                                <button id="unitAmenAdd" type="button">add</button>
                                <button id="unitAmenRemove" type="button">remove</button>  
                            </div>
                            @if($unit->amenities)
                            <div class="grid lg:grid-cols-2 lg:gap-6">
                                @foreach ($unit->amenities as $item)
                                <div class="grid lg:grid-cols-2 lg:gap-6">
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="file" name="amenities_icon[]" id="amenities_icon" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                        <label for="amenities_icon" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Amenity Image</label>
                                    </div>
                                    @if (isset($item[0]))
                                    <div class="relative z-0 w-full mb-6 group">
                                        <img src="{{asset('images/'.($item[0]))}}" alt="cover image">
                                    </div>
                                        
                                    @endif
                                </div>
                                <div>
                                    <div class="relative z-0 w-full mb-6 group">
                                        <input type="text" value="{{$item[1] ?? ''}}" name="amenities[]" id="amenity" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" "  />
                                        <label for="amenity" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Amenity</label>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                            <div id="amenities" class="grid lg:grid-cols-2 lg:gap-6"></div>
                        </div>
                    </div>
                    
                    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Submit</button>
                </form>
        </div>
    </div>
</x-app-layout>