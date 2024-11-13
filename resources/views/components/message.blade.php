<div class="xl:col-span-9 lg:col-span-7 md:col-span-7">
    <div class="rounded-md shadow dark:shadow-gray-700 bg-white dark:bg-slate-900">
        <div class="flex justify-between items-center border-b border-gray-100 dark:border-gray-800 p-4">
            <div class="flex">
                <img src="/assets/images/client/01.jpg" class="size-11 rounded-full shadow dark:shadow-gray-700" alt="">
                <div class="overflow-hidden ms-3">
                    <a href="#" class="block font-semibold text-truncate">{{ $user->first_name }} {{ $user->last_name }}</a>
                    <span class="text-slate-400 flex items-center text-sm"><span class="bg-green-600 text-white text-[10px] font-bold rounded-full size-2 me-1"></span> Online</span>
                </div>
            </div>

            <div class="dropdown relative">
                <button data-dropdown-toggle="dropdown" class="dropdown-toggle items-center" type="button">
                    <span class="size-8 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[20px] text-center bg-green-600/5 hover:bg-green-600 border-green-600/10 hover:border-green-600 text-green-600 hover:text-white rounded-md"><i class="mdi mdi-dots-vertical"></i></span>
                </button>
                <!-- Dropdown menu -->
                <div class="dropdown-menu absolute end-0 m-0 mt-4 z-10 w-44 rounded-md overflow-hidden bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 hidden" onclick="event.stopPropagation();">
                    <ul class="py-2 text-start">
                        <li>
                            <a href="" class="block py-1.5 px-4 hover:text-green-600"><i class="mdi mdi-account-outline"></i> Profile</a>
                        </li>
                        <li>
                            <a href="" class="block py-1.5 px-4 hover:text-green-600"><i class="mdi mdi-cog-outline"></i> Profile Settings</a>
                        </li>
                        <li>
                            <a href="" class="block py-1.5 px-4 hover:text-green-600"><i class="mdi mdi-trash-can-outline"></i> Delete</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <ul class="p-4 list-none mb-0 min-h-[548px] max-h-[548px]" data-simplebar>

        </ul>

        <div class="p-2 border-t border-gray-100 dark:border-gray-800">
            <form action="{{ route('user', $user->id) }}" method="POST" class="flex">
                @csrf
                <input type="text" name="message" class="form-input w-full py-2 px-3 h-9 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-100 dark:border-gray-800 focus:ring-0" placeholder="Enter Message..." required>
                <input type="hidden" name="sender_id" value="{{$auth->id}}">
                <input type="hidden" name="receiver_id" value="{{ $user->id }}">

                <div class="min-w-[125px] text-end">
                    <button type="submit" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md"><i class="mdi mdi-send"></i></button>
                    <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md"><i class="mdi mdi-emoticon-happy-outline"></i></a>
                    <a href="#" class="size-9 inline-flex items-center justify-center tracking-wide align-middle duration-500 text-[16px] text-center bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md"><i class="mdi mdi-paperclip"></i></a>
                </div>
            </form>
        </div>
    </div>
</div>