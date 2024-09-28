<div class="flex-1 overflow-y-auto p-6">

    <div class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 mb-3">
        <div class="w-full md:w-1/2">
            <h2 class="text-3xl font-bold mb-1">Earnings</h2>
            <p class="text-gray-400 font-extralight text-sm">Here's an overview off all your booking revenue</p>
        </div>
    </div>

    {{-- earning statistics --}}
    <div class="">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <!-- Total Earnings -->
                <div class="bg-option rounded-xl p-6 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="bg-primary-500 p-3 rounded-xl">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.36412 26.5416C5.58745 26.5416 3.3125 24.5232 3.3125 22.0382V19.6582C3.3125 19.1799 3.70917 18.7832 4.1875 18.7832C4.66583 18.7832 5.0625 19.1799 5.0625 19.6582C5.0625 21.1165 6.47412 22.2132 8.36412 22.2132C10.2541 22.2132 11.6658 21.1165 11.6658 19.6582C11.6658 19.1799 12.0625 18.7832 12.5408 18.7832C13.0191 18.7832 13.4158 19.1799 13.4158 19.6582V22.0382C13.4158 24.5232 11.1524 26.5416 8.36412 26.5416ZM5.36577 23.1816C5.87911 24.1382 7.03412 24.7916 8.36412 24.7916C9.69412 24.7916 10.8491 24.1266 11.3625 23.1816C10.5341 23.6832 9.50745 23.9749 8.36412 23.9749C7.22078 23.9749 6.19411 23.6832 5.36577 23.1816Z" fill="#F8F8F8"/>
                                <path d="M8.36412 20.7665C6.45078 20.7665 4.73582 19.8915 3.88416 18.5032C3.51082 17.8965 3.3125 17.1848 3.3125 16.4615C3.3125 15.2365 3.84915 14.0932 4.82915 13.2415C6.71915 11.5848 9.97413 11.5849 11.8758 13.2299C12.8558 14.0932 13.4041 15.2365 13.4041 16.4615C13.4041 17.1848 13.2058 17.8965 12.8325 18.5032C11.9925 19.8915 10.2774 20.7665 8.36412 20.7665ZM8.36412 13.7082C7.45412 13.7082 6.61414 14.0115 5.98414 14.5598C5.38914 15.0732 5.0625 15.7498 5.0625 16.4615C5.0625 16.8698 5.16745 17.2432 5.37745 17.5932C5.91412 18.4799 7.05745 19.0282 8.36412 19.0282C9.67078 19.0282 10.8141 18.4799 11.3391 17.6049C11.5491 17.2666 11.6541 16.8815 11.6541 16.4732C11.6541 15.7615 11.3275 15.0848 10.7325 14.5598C10.1141 14.0115 9.27412 13.7082 8.36412 13.7082Z" fill="#F8F8F8"/>
                                <path d="M8.36412 23.9751C5.48245 23.9751 3.3125 22.1201 3.3125 19.6701V16.4618C3.3125 13.9768 5.57578 11.9585 8.36412 11.9585C9.68245 11.9585 10.9425 12.4135 11.8875 13.2302C12.8675 14.0935 13.4158 15.2368 13.4158 16.4618V19.6701C13.4158 22.1201 11.2458 23.9751 8.36412 23.9751ZM8.36412 13.7085C6.54412 13.7085 5.0625 14.9451 5.0625 16.4618V19.6701C5.0625 21.1285 6.47412 22.2251 8.36412 22.2251C10.2541 22.2251 11.6658 21.1285 11.6658 19.6701V16.4618C11.6658 15.7501 11.3392 15.0735 10.7442 14.5485C10.1142 14.0118 9.27412 13.7085 8.36412 13.7085Z" fill="#F8F8F8"/>
                                <path d="M22.2126 17.2667C20.4509 17.2667 18.9576 15.96 18.8176 14.28C18.7242 13.3117 19.0743 12.3667 19.7743 11.6784C20.3576 11.0717 21.1859 10.7334 22.0609 10.7334H24.4992C25.6542 10.7684 26.5409 11.6783 26.5409 12.7983V15.2018C26.5409 16.3218 25.6543 17.2317 24.5343 17.2667H22.2126ZM24.4642 12.4834H22.0726C21.6642 12.4834 21.2909 12.6351 21.0226 12.9151C20.6843 13.2417 20.5209 13.685 20.5676 14.1284C20.6259 14.8984 21.3726 15.5167 22.2126 15.5167H24.4992C24.6509 15.5167 24.7909 15.3768 24.7909 15.2018V12.7983C24.7909 12.6233 24.6509 12.4951 24.4642 12.4834Z" fill="#F8F8F8"/>
                                <path d="M18.6673 24.7918H15.7506C15.2723 24.7918 14.8756 24.3952 14.8756 23.9168C14.8756 23.4385 15.2723 23.0418 15.7506 23.0418H18.6673C21.6773 23.0418 23.6256 21.0935 23.6256 18.0835V17.2668H22.2139C20.4523 17.2668 18.9589 15.9602 18.8189 14.2802C18.7256 13.3118 19.0756 12.3668 19.7756 11.6785C20.359 11.0718 21.1872 10.7335 22.0622 10.7335H23.6139V9.91683C23.6139 7.18683 22.0156 5.30847 19.4256 5.00514C19.1456 4.95847 18.9006 4.9585 18.6556 4.9585H8.1556C7.8756 4.9585 7.60725 4.98182 7.33892 5.01682C4.77225 5.34348 3.19727 7.21016 3.19727 9.91683V12.2502C3.19727 12.7285 2.8006 13.1252 2.32227 13.1252C1.84393 13.1252 1.44727 12.7285 1.44727 12.2502V9.91683C1.44727 6.3235 3.66398 3.72184 7.10564 3.29017C7.42064 3.2435 7.78227 3.2085 8.1556 3.2085H18.6556C18.9356 3.2085 19.2973 3.22016 19.6706 3.27849C23.1123 3.67516 25.3639 6.2885 25.3639 9.91683V11.6085C25.3639 12.0868 24.9673 12.4835 24.4889 12.4835H22.0622C21.6539 12.4835 21.2806 12.6352 21.0123 12.9152C20.674 13.2418 20.5106 13.6851 20.5573 14.1285C20.6156 14.8985 21.3623 15.5168 22.2023 15.5168H24.5006C24.9789 15.5168 25.3756 15.9135 25.3756 16.3918V18.0835C25.3756 22.0968 22.6806 24.7918 18.6673 24.7918Z" fill="#F8F8F8"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Total earnings</p>
                            <p class="text-xl font-bold">₦8,000,000</p>
                            <p class="text-green-500 text-xs">+24% this month</p>
                        </div>
                    </div>
                </div>

                <!-- Payable Earnings -->
                <div class="bg-option rounded-xl p-6 flex items-center justify-between">
                    <div class="flex items-center space-x-4">
                        <div class="bg-primary-500 p-3 rounded-xl">
                            <svg width="28" height="28" viewBox="0 0 28 28" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.36412 26.5416C5.58745 26.5416 3.3125 24.5232 3.3125 22.0382V19.6582C3.3125 19.1799 3.70917 18.7832 4.1875 18.7832C4.66583 18.7832 5.0625 19.1799 5.0625 19.6582C5.0625 21.1165 6.47412 22.2132 8.36412 22.2132C10.2541 22.2132 11.6658 21.1165 11.6658 19.6582C11.6658 19.1799 12.0625 18.7832 12.5408 18.7832C13.0191 18.7832 13.4158 19.1799 13.4158 19.6582V22.0382C13.4158 24.5232 11.1524 26.5416 8.36412 26.5416ZM5.36577 23.1816C5.87911 24.1382 7.03412 24.7916 8.36412 24.7916C9.69412 24.7916 10.8491 24.1266 11.3625 23.1816C10.5341 23.6832 9.50745 23.9749 8.36412 23.9749C7.22078 23.9749 6.19411 23.6832 5.36577 23.1816Z" fill="#F8F8F8"/>
                                <path d="M8.36412 20.7665C6.45078 20.7665 4.73582 19.8915 3.88416 18.5032C3.51082 17.8965 3.3125 17.1848 3.3125 16.4615C3.3125 15.2365 3.84915 14.0932 4.82915 13.2415C6.71915 11.5848 9.97413 11.5849 11.8758 13.2299C12.8558 14.0932 13.4041 15.2365 13.4041 16.4615C13.4041 17.1848 13.2058 17.8965 12.8325 18.5032C11.9925 19.8915 10.2774 20.7665 8.36412 20.7665ZM8.36412 13.7082C7.45412 13.7082 6.61414 14.0115 5.98414 14.5598C5.38914 15.0732 5.0625 15.7498 5.0625 16.4615C5.0625 16.8698 5.16745 17.2432 5.37745 17.5932C5.91412 18.4799 7.05745 19.0282 8.36412 19.0282C9.67078 19.0282 10.8141 18.4799 11.3391 17.6049C11.5491 17.2666 11.6541 16.8815 11.6541 16.4732C11.6541 15.7615 11.3275 15.0848 10.7325 14.5598C10.1141 14.0115 9.27412 13.7082 8.36412 13.7082Z" fill="#F8F8F8"/>
                                <path d="M8.36412 23.9751C5.48245 23.9751 3.3125 22.1201 3.3125 19.6701V16.4618C3.3125 13.9768 5.57578 11.9585 8.36412 11.9585C9.68245 11.9585 10.9425 12.4135 11.8875 13.2302C12.8675 14.0935 13.4158 15.2368 13.4158 16.4618V19.6701C13.4158 22.1201 11.2458 23.9751 8.36412 23.9751ZM8.36412 13.7085C6.54412 13.7085 5.0625 14.9451 5.0625 16.4618V19.6701C5.0625 21.1285 6.47412 22.2251 8.36412 22.2251C10.2541 22.2251 11.6658 21.1285 11.6658 19.6701V16.4618C11.6658 15.7501 11.3392 15.0735 10.7442 14.5485C10.1142 14.0118 9.27412 13.7085 8.36412 13.7085Z" fill="#F8F8F8"/>
                                <path d="M22.2126 17.2667C20.4509 17.2667 18.9576 15.96 18.8176 14.28C18.7242 13.3117 19.0743 12.3667 19.7743 11.6784C20.3576 11.0717 21.1859 10.7334 22.0609 10.7334H24.4992C25.6542 10.7684 26.5409 11.6783 26.5409 12.7983V15.2018C26.5409 16.3218 25.6543 17.2317 24.5343 17.2667H22.2126ZM24.4642 12.4834H22.0726C21.6642 12.4834 21.2909 12.6351 21.0226 12.9151C20.6843 13.2417 20.5209 13.685 20.5676 14.1284C20.6259 14.8984 21.3726 15.5167 22.2126 15.5167H24.4992C24.6509 15.5167 24.7909 15.3768 24.7909 15.2018V12.7983C24.7909 12.6233 24.6509 12.4951 24.4642 12.4834Z" fill="#F8F8F8"/>
                                <path d="M18.6673 24.7918H15.7506C15.2723 24.7918 14.8756 24.3952 14.8756 23.9168C14.8756 23.4385 15.2723 23.0418 15.7506 23.0418H18.6673C21.6773 23.0418 23.6256 21.0935 23.6256 18.0835V17.2668H22.2139C20.4523 17.2668 18.9589 15.9602 18.8189 14.2802C18.7256 13.3118 19.0756 12.3668 19.7756 11.6785C20.359 11.0718 21.1872 10.7335 22.0622 10.7335H23.6139V9.91683C23.6139 7.18683 22.0156 5.30847 19.4256 5.00514C19.1456 4.95847 18.9006 4.9585 18.6556 4.9585H8.1556C7.8756 4.9585 7.60725 4.98182 7.33892 5.01682C4.77225 5.34348 3.19727 7.21016 3.19727 9.91683V12.2502C3.19727 12.7285 2.8006 13.1252 2.32227 13.1252C1.84393 13.1252 1.44727 12.7285 1.44727 12.2502V9.91683C1.44727 6.3235 3.66398 3.72184 7.10564 3.29017C7.42064 3.2435 7.78227 3.2085 8.1556 3.2085H18.6556C18.9356 3.2085 19.2973 3.22016 19.6706 3.27849C23.1123 3.67516 25.3639 6.2885 25.3639 9.91683V11.6085C25.3639 12.0868 24.9673 12.4835 24.4889 12.4835H22.0622C21.6539 12.4835 21.2806 12.6352 21.0123 12.9152C20.674 13.2418 20.5106 13.6851 20.5573 14.1285C20.6156 14.8985 21.3623 15.5168 22.2023 15.5168H24.5006C24.9789 15.5168 25.3756 15.9135 25.3756 16.3918V18.0835C25.3756 22.0968 22.6806 24.7918 18.6673 24.7918Z" fill="#F8F8F8"/>
                            </svg>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Payable earning</p>
                            <p class="text-xl font-bold">₦7,200,000</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- transaction --}}
    <section class="p-3 sm:p-5 px-2 py-6 rounded-lg bg-white mt-5">
        <div class="mx-auto max-w-full">
            <div class="relative overflow-hidden">
                <div
                    class="flex flex-col md:flex-row items-center justify-between space-y-3 md:space-y-0 md:space-x-4 px-1">
                    <div class="w-full md:w-1/2">
                        <h3 class="text-2xl font-bold mb-1">Transactions</h3>
                    </div>
                    <div
                        class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                        {{-- <button type="button"
                            class="flex items-center justify-center text-white bg-primary-500 hover:bg-primary-600 focus:ring-4 focus:ring-primary-300 font-light transition-colors ease-in-out rounded-xl text-sm px-4 py-3  focus:outline-none">
                            <svg class="size-5 mr-2" fill="currentColor" viewbox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path clip-rule="evenodd" fill-rule="evenodd"
                                    d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                            </svg>
                            Create booking
                        </button> --}}
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="w-full text-sm text-left text-gray-500 ">
                        <thead class="text-xs text-gray-700 border-b border-gray-50">
                            <tr>
                                <th scope="col" class="px-4 py-3">Description</th>
                                <th scope="col" class="px-4 py-3">Time</th>
                                <th scope="col" class="px-4 py-3">Transaction</th>
                                <th scope="col" class="px-4 py-3">Amount</th>
                                <th scope="col" class="px-4 py-3">Status</th>
                            </tr>
                        </thead>
                        <tbody class="">
                            {{-- <tr class="border-b dark:border-gray-700">
                            <th scope="row" class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white">Apple iMac 27&#34;</th>
                            <td class="px-4 py-3">PC</td>
                            <td class="px-4 py-3">Apple</td>
                            <td class="px-4 py-3">300</td>
                            <td class="px-4 py-3">$2999</td>
                            <td class="px-4 py-3 flex items-center justify-end">
                                <button id="apple-imac-27-dropdown-button" data-dropdown-toggle="apple-imac-27-dropdown" class="inline-flex items-center p-0.5 text-sm font-medium text-center text-gray-500 hover:text-gray-800 rounded-lg focus:outline-none  dark:hover:text-gray-100" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewbox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z" />
                                    </svg>
                                </button>
                                <div id="apple-imac-27-dropdown" class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:divide-gray-600">
                                    <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="apple-imac-27-dropdown-button">
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Show</a>
                                        </li>
                                        <li>
                                            <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                        </li>
                                    </ul>
                                    <div class="py-1">
                                        <a href="#" class="block py-2 px-4 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white">Delete</a>
                                    </div>
                                </div>
                            </td>
                        </tr> --}}
                        </tbody>
                    </table>
                    <div class="h-96 flex items-center justify-center text-center">
                        <div class="text-center">
                            <img src="{{ asset('assets/Empty_transaction.svg') }}" class="mx-auto mb-4" alt=""
                                srcset="">
                            <p class="font-medium mb-2">Nothing to show yet</p>
                            <span class="text-sm text-gray-300">You haven’t processed a transaction yet. When you do,
                                your <br> transaction history will appear here.</span>
                        </div>
                    </div>
                </div>

                <div class="mt-4 flex flex-col md:flex-row items-center justify-between">
                    <span class="text-sm text-gray-700 mb-2 md:mb-0">Showing <span class="font-semibold">10</span>
                        items</span>
                    <div class="flex items-center space-x-1">
                        <button class="px-3 py-1 bg-gray-200  text-gray-700 rounded-lg hover:bg-gray-300">Prev</button>
                        <button class="px-3 py-1 border border-primary-500 text-primary-500 rounded-lg">1</button>
                        <button
                            class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">2</button>
                        <button
                            class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">3</button>
                        <button
                            class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">4</button>
                        <button
                            class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">5</button>
                        <button
                            class="px-3 py-1 border border-gray-100 text-gray-700 rounded-lg hover:bg-gray-300">Next</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>
