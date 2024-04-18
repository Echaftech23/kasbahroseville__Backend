// -- Get the rooms with pagination
// SELECT * FROM rooms LIMIT 10 OFFSET 0;

// -- For each room, get the reservations with their payments in the specified date range
// SELECT * FROM reservations
// WHERE room_id = 2
// AND id IN (
// SELECT reservation_id FROM payments
// WHERE updated_at BETWEEN '2024-04-07 17:04:21' AND '2024-04-15 22:24:13'
// );

// -- For each reservation, get the payment
// SELECT * FROM payments WHERE reservation_id = 2;

// -- Calculate the total amount for each room
// SELECT SUM(totalAmount) FROM payments WHERE reservation_id IN (
// SELECT id FROM reservations WHERE room_id = 2
// );

// $rooms = Room::with('type')->latest()->paginate(10);


<td class="whitespace-nowrap px-4 py-3 sm:px-5">
                                        <div class="flex items-center">
                                            <div x-data="{
                                                open: false,
                                                name: '',
                                                nameError: false,
                                                submitForm: function() {
                                                    if (this.name) {
                                                        let form = document.querySelector('#payment-form-' + {{ $room->id }});
                                                        form.submit();
                                                    }
                                                }
                                            }">
                                                <!-- Button trigger modal -->
                                                <a @click="open = true, name = '{{ $room->name }}'"
                                                    class="badge mr-2 text-white space-x-2 p-2 px-3 text-[13px] rounded-sm font-semibold flex items-center focus:bg-[#6576FF] hover:bg-[#6576FF] hover:text-white focus:text-white bg-blue-600 dark:bg-navy-500 dark:text-navy-100">
                                                    <span>View</span>
                                                </a>

                                                <!-- Modal -->
                                                <div x-show="open"
                                                    class="fixed z-50 inset-0 flex items-center justify-center"
                                                    aria-labelledby="modal-title" role="dialog" aria-modal="true">
                                                    <div class="fixed w-full h-full  top-0 left-0 bg-gray-500 bg-opacity-75 transition-opacity"
                                                        aria-hidden="true"></div>

                                                    <!-- Modal content -->
                                                    <div
                                                        class="bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all w-11/12 sm:max-w-3xl sm:w-full">
                                                        <div class="pb-4 sm:py-6 sm:pb-4">
                                                            <div class="flex items-center justify-between px-4 sm:px-4 sm:pl-8 mb-4">
                                                                <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                    id="modal-title">
                                                                    Details
                                                                </h3>
                                                                <button type="button" @click="open = false"
                                                                    class=" text-gray-400 bg-transparent  hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white">
                                                                    <svg class="w-3 h-3" aria-hidden="true"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 14 14">
                                                                        <path stroke="currentColor" stroke-linecap="round"
                                                                            stroke-linejoin="round" stroke-width="2"
                                                                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                                                    </svg>
                                                                </button>
                                                            </div>
                                                            <div class="w-11/12 mb-6 mx-auto">
                                                                <div class="min-w-full max-h-80 overflow-auto">
                                                                    <table class="w-full border-2 text-left">
                                                                        <thead>
                                                                            <tr class="bg-[#F8FAFC] border-b-[0.7px]">
                                                                                <th
                                                                                    class="whitespace-nowrap px-4 py-3 text-[13px] text-[#364A62] lg:px-5">
                                                                                    ID
                                                                                </th>
                                                                                <th
                                                                                    class="whitespace-nowrap px-4 py-3 text-[13px] text-[#364A62] lg:px-5">
                                                                                    Room Name
                                                                                </th>
                                                                                <th
                                                                                    class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                                    Payment
                                                                                </th>
                                                                                <th
                                                                                    class="whitespace-nowrap px-4 py-3 uppercase text-[13px] text-[#364A62] lg:px-5">
                                                                                    Amount
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody x-data="{ expanded: false }">
                                                                            @foreach ($rooms as $room)
                                                                                <tr class="border-y">
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                                                        {{ $room->id }}</td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $room->name }}
                                                                                    </td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $room->type->type }}
                                                                                    </td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $from->format('d M Y') }}
                                                                                    </td>
                                                                                </tr>
                                                                                 <tr class="border-y">
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 sm:px-5">
                                                                                        {{ $room->id }}</td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $room->name }}
                                                                                    </td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $room->type->type }}
                                                                                    </td>
                                                                                    <td
                                                                                        class="whitespace-nowrap px-4 py-3 text-sm font-medium text-slate-700 dark:text-navy-100 sm:px-5">
                                                                                        {{ $from->format('d M Y') }}
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>


            
















                                    

                                    {{-- <div class="w-full max-w-full  rounded-sm border bg-white shadow-default">
                <div class="grid grid-cols-7 rounded-t-sm bg-primary text-black">
                    @foreach ($days as $day)
                        <div
                            class="flex h-15 items-center justify-center p-1 text-xs font-semibold sm:text-base xl:p-5 first:rounded-tl-sm last:rounded-tr-sm">
                            <span class="w-full h-full flex items-center justify-center">
                                {{ $day }}<span class="hidden lg:block"> day </span>
                            </span>
                        </div>
                    @endforeach
                </div>
                {{-- @dd($calendarDays); --}}
                <div class="grid grid-cols-7">
                    @foreach ($calendarDays as $day)
                        <div
                            class="ease relative h-20 cursor-pointer border p-2 transition duration-500 hover:bg-gray md:h-25 md:p-6 xl:h-31">
                            <div
                                class="mx-auto flex h-24 w-10 flex-col overflow-hidden sm:w-full md:h-40 md:w-20 lg:w-28 2xl:w-40">
                                <span class="font-medium text-black">{{ $day['date']->format('d') }}</span>

                                @if ($day['event'])
                                    <div class="group h-16 w-full flex-grow cursor-pointer py-1 md:h-30">
                                        <span class="group-hover:text-primary md:hidden"> More </span>
                                        <div
                                            class="event bg-[#D4EFFA] text-[#1127E3] absolute left-2 z-99 mb-1 flex w-[90%] flex-col rounded-sm border-l-[3px] border-primary bg-gray px-3 py-1 text-left">
                                            <span class="event-name text-[12px] text- font-semibold">
                                                {{ $day['event']->user->name }}
                                            </span>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div> --}}
