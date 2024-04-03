<!-- Sidebar -->
<div :class="sidebarOpen ? 'translate-x-0 ease-out' : '-translate-x-full ease-in'"
    class="fixed inset-y-0 left-0 z-30 w-64 overflow-y-auto transition duration-300 transform bg-gray-900 lg:translate-x-0 lg:static lg:inset-0">
    <div class="flex items-center justify-center mt-8">
        <a href="{{ route('dashboard') }}" class="flex items-center mt-1 mr-3">
            <img src="../img/core-img/logo.png" width="50px" alt="" />
            <span class="mx-2 text-2xl font-semibold text-white">Dashboard</span>
        </a>
    </div>

    <nav class="mt-10">
        <a class="flex items-center px-6 py-2 mt-4 text-gray-100 bg-gray-700 bg-opacity-25"
            href="{{ route('dashboard') }}">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_1304)">
                    <path
                        d="M20.5583 5.04004V12.0479C20.5583 12.5947 20.363 13.0635 19.9724 13.4541C19.5818 13.8447 19.1052 14.04 18.5427 14.04H13.5505C13.0037 14.04 12.5349 13.8447 12.1443 13.4541C11.7537 13.0635 11.5583 12.5947 11.5583 12.0479V5.04004C11.5583 4.49316 11.7537 4.02441 12.1443 3.63379C12.5349 3.24316 13.0037 3.04785 13.5505 3.04785H18.5427C19.1052 3.04785 19.5818 3.24316 19.9724 3.63379C20.363 4.02441 20.5583 4.49316 20.5583 5.04004ZM7.55054 3.04785H2.55835C1.99585 3.04785 1.51929 3.24316 1.12866 3.63379C0.738037 4.02441 0.542725 4.49316 0.542725 5.04004V9.04785C0.542725 9.59473 0.738037 10.0635 1.12866 10.4541C1.51929 10.8447 1.99585 11.04 2.55835 11.04H7.55054C8.09741 11.04 8.56616 10.8447 8.95679 10.4541C9.34741 10.0635 9.54272 9.59473 9.54272 9.04785V5.04004C9.54272 4.49316 9.34741 4.02441 8.95679 3.63379C8.56616 3.24316 8.09741 3.04785 7.55054 3.04785ZM18.5427 16.0322H13.5505C13.0037 16.0322 12.5349 16.2275 12.1443 16.6182C11.7537 17.0088 11.5583 17.4854 11.5583 18.0479V21.0479C11.5583 21.5947 11.7537 22.0635 12.1443 22.4541C12.5349 22.8447 13.0037 23.04 13.5505 23.04H18.5427C19.1052 23.04 19.5818 22.8447 19.9724 22.4541C20.363 22.0635 20.5583 21.5947 20.5583 21.0479V18.0479C20.5583 17.4854 20.363 17.0088 19.9724 16.6182C19.5818 16.2275 19.1052 16.0322 18.5427 16.0322ZM7.55054 13.0322H2.55835C1.99585 13.0322 1.51929 13.2275 1.12866 13.6182C0.738037 14.0088 0.542725 14.4854 0.542725 15.0479V21.0479C0.542725 21.5947 0.738037 22.0635 1.12866 22.4541C1.51929 22.8447 1.99585 23.04 2.55835 23.04H7.55054C8.09741 23.04 8.56616 22.8447 8.95679 22.4541C9.34741 22.0635 9.54272 21.5947 9.54272 21.0479V15.0479C9.54272 14.4854 9.34741 14.0088 8.95679 13.6182C8.56616 13.2275 8.09741 13.0322 7.55054 13.0322Z"
                        fill="#7F8DFF" />
                </g>
                <defs>
                    <clipPath id="clip0_15_1304">
                        <rect width="24" height="24" fill="white"
                            transform="matrix(1 0 0 -1 0.542725 24.54)" />
                    </clipPath>
                </defs>
            </svg>

            <span class="mx-3">Dashboard</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('dashboard') }}">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_1315)">
                    <path
                        d="M20.5583 8.04004H0.542725C0.542725 7.21191 0.835693 6.50488 1.42163 5.91895C2.00757 5.33301 2.7146 5.04004 3.54272 5.04004H5.55835V4.03223C5.55835 3.7666 5.65601 3.53613 5.85132 3.34082C6.04663 3.14551 6.2771 3.04785 6.54272 3.04785C6.82397 3.04785 7.06226 3.14551 7.25757 3.34082C7.45288 3.53613 7.55054 3.7666 7.55054 4.03223V5.04004H13.5505V4.03223C13.5505 3.7666 13.6482 3.53613 13.8435 3.34082C14.0388 3.14551 14.2771 3.04785 14.5583 3.04785C14.824 3.04785 15.0544 3.14551 15.2498 3.34082C15.4451 3.53613 15.5427 3.7666 15.5427 4.03223V5.04004H17.5583C18.3865 5.04004 19.0935 5.33301 19.6794 5.91895C20.2654 6.50488 20.5583 7.21191 20.5583 8.04004ZM0.542725 10.0322H20.5583V19.0322C20.5583 19.8604 20.2654 20.5674 19.6794 21.1533C19.0935 21.7393 18.3865 22.0322 17.5583 22.0322H3.54272C2.7146 22.0322 2.00757 21.7393 1.42163 21.1533C0.835693 20.5674 0.542725 19.8604 0.542725 19.0322V10.0322ZM13.5505 14.04C13.5505 14.1025 13.5583 14.1689 13.574 14.2393C13.5896 14.3096 13.613 14.3682 13.6443 14.415H13.6208C13.6521 14.4775 13.6873 14.5361 13.7263 14.5908C13.7654 14.6455 13.8005 14.6963 13.8318 14.7432C13.8943 14.79 13.949 14.8291 13.9958 14.8604C14.0115 14.8916 14.0349 14.9111 14.0662 14.9189C14.0974 14.9268 14.1287 14.9385 14.1599 14.9541C14.1912 14.9697 14.2224 14.9814 14.2537 14.9893C14.2849 14.9971 14.3162 15.0088 14.3474 15.0244H14.3708C14.3865 15.0244 14.4099 15.0283 14.4412 15.0361C14.4724 15.0439 14.5115 15.0479 14.5583 15.0479C14.5896 15.0479 14.6208 15.0439 14.6521 15.0361C14.6833 15.0283 14.7224 15.0244 14.7693 15.0244H14.7458C14.7771 15.0088 14.8083 14.9971 14.8396 14.9893C14.8708 14.9814 14.9021 14.9697 14.9333 14.9541C14.9646 14.9385 14.9958 14.9268 15.0271 14.9189C15.0583 14.9111 15.0896 14.8916 15.1208 14.8604C15.1365 14.8447 15.156 14.8291 15.1794 14.8135C15.2029 14.7979 15.2302 14.7744 15.2615 14.7432C15.3083 14.6963 15.3474 14.6455 15.3787 14.5908C15.4099 14.5361 15.4412 14.4854 15.4724 14.4385V14.415C15.5037 14.3682 15.5232 14.3096 15.531 14.2393C15.5388 14.1689 15.5427 14.1025 15.5427 14.04C15.5427 13.9775 15.5388 13.9111 15.531 13.8408C15.5232 13.7705 15.5037 13.7119 15.4724 13.665C15.4412 13.6025 15.4099 13.5439 15.3787 13.4893C15.3474 13.4346 15.3083 13.3838 15.2615 13.3369C15.2302 13.3057 15.2029 13.2822 15.1794 13.2666C15.156 13.251 15.1365 13.2354 15.1208 13.2197C15.0896 13.1885 15.0583 13.1689 15.0271 13.1611C14.9958 13.1533 14.9646 13.1416 14.9333 13.126C14.9021 13.1104 14.8708 13.0986 14.8396 13.0908C14.8083 13.083 14.7771 13.0713 14.7458 13.0557C14.7146 13.0557 14.6833 13.0518 14.6521 13.0439C14.6208 13.0361 14.5896 13.0322 14.5583 13.0322C14.4177 13.0322 14.2849 13.0596 14.1599 13.1143C14.0349 13.1689 13.9255 13.2432 13.8318 13.3369C13.8005 13.3838 13.7654 13.4346 13.7263 13.4893C13.6873 13.5439 13.6599 13.5947 13.6443 13.6416L13.6208 13.665C13.6052 13.7119 13.5896 13.7705 13.574 13.8408C13.5583 13.9111 13.5505 13.9775 13.5505 14.04ZM9.54272 14.04C9.54272 14.04 9.54272 14.0439 9.54272 14.0518C9.54272 14.0596 9.54272 14.0635 9.54272 14.0635C9.54272 14.126 9.55054 14.1885 9.56616 14.251C9.58179 14.3135 9.60522 14.3682 9.63647 14.415C9.6521 14.4775 9.67944 14.5361 9.71851 14.5908C9.75757 14.6455 9.80054 14.6963 9.84741 14.7432C9.89429 14.79 9.94507 14.833 9.99976 14.8721C10.0544 14.9111 10.1052 14.9385 10.1521 14.9541H10.1755C10.2224 14.9854 10.281 15.0088 10.3513 15.0244C10.4216 15.04 10.488 15.0479 10.5505 15.0479C10.6912 15.0479 10.8201 15.0205 10.9373 14.9658C11.0544 14.9111 11.1599 14.8369 11.2537 14.7432C11.3005 14.6963 11.3396 14.6455 11.3708 14.5908C11.4021 14.5361 11.4333 14.4854 11.4646 14.4385V14.415C11.4958 14.3682 11.5193 14.3096 11.5349 14.2393C11.5505 14.1689 11.5583 14.1025 11.5583 14.04C11.5583 13.9775 11.5505 13.9111 11.5349 13.8408C11.5193 13.7705 11.4958 13.7119 11.4646 13.665C11.4021 13.4775 11.2849 13.3252 11.113 13.208C10.9412 13.0908 10.7537 13.0322 10.5505 13.0322C10.3474 13.0322 10.1599 13.0908 9.98804 13.208C9.81616 13.3252 9.69897 13.4775 9.63647 13.665C9.60522 13.7119 9.58179 13.7666 9.56616 13.8291C9.55054 13.8916 9.54272 13.9541 9.54272 14.0166C9.54272 14.0166 9.54272 14.0205 9.54272 14.0283C9.54272 14.0361 9.54272 14.04 9.54272 14.04ZM9.54272 18.0479C9.54272 18.0479 9.54272 18.0557 9.54272 18.0713C9.54272 18.1338 9.55054 18.1963 9.56616 18.2588C9.58179 18.3213 9.60522 18.376 9.63647 18.4229C9.6521 18.4854 9.67944 18.5439 9.71851 18.5986C9.75757 18.6533 9.80054 18.7041 9.84741 18.751C9.94116 18.8447 10.0466 18.915 10.1638 18.9619C10.281 19.0088 10.4099 19.0322 10.5505 19.0322C10.6912 19.0322 10.8201 19.0088 10.9373 18.9619C11.0544 18.915 11.1599 18.8447 11.2537 18.751C11.3005 18.7041 11.3435 18.6533 11.3826 18.5986C11.4216 18.5439 11.449 18.4854 11.4646 18.4229C11.4958 18.3604 11.5193 18.2979 11.5349 18.2354C11.5505 18.1729 11.5583 18.1104 11.5583 18.0479C11.5583 17.9697 11.5505 17.8994 11.5349 17.8369C11.5193 17.7744 11.4958 17.7119 11.4646 17.6494C11.449 17.5869 11.4216 17.5283 11.3826 17.4736C11.3435 17.4189 11.3005 17.3682 11.2537 17.3213C11.1755 17.2432 11.074 17.1768 10.949 17.1221C10.824 17.0674 10.6912 17.04 10.5505 17.04C10.488 17.04 10.4216 17.0479 10.3513 17.0635C10.281 17.0791 10.2224 17.1025 10.1755 17.1338V17.1104C10.113 17.1416 10.0544 17.1768 9.99976 17.2158C9.94507 17.2549 9.89429 17.29 9.84741 17.3213C9.80054 17.3682 9.76147 17.4189 9.73022 17.4736C9.69897 17.5283 9.66772 17.5869 9.63647 17.6494C9.60522 17.7119 9.58179 17.7744 9.56616 17.8369C9.55054 17.8994 9.54272 17.9619 9.54272 18.0244C9.54272 18.0244 9.54272 18.0322 9.54272 18.0479ZM5.55835 18.0479C5.55835 18.1729 5.58179 18.2979 5.62866 18.4229C5.67554 18.5479 5.74585 18.6572 5.8396 18.751C5.85522 18.7666 5.87866 18.7861 5.90991 18.8096C5.94116 18.833 5.9646 18.8525 5.98022 18.8682C6.01147 18.8838 6.04272 18.8994 6.07397 18.915C6.10522 18.9307 6.13647 18.9463 6.16772 18.9619C6.19897 18.9775 6.23022 18.9893 6.26147 18.9971C6.29272 19.0049 6.32397 19.0088 6.35522 19.0088C6.38647 19.0244 6.41772 19.0322 6.44897 19.0322C6.48022 19.0322 6.51147 19.0322 6.54272 19.0322C6.5896 19.0322 6.62866 19.0322 6.65991 19.0322C6.69116 19.0322 6.72241 19.0244 6.75366 19.0088H6.73022C6.7771 19.0088 6.81616 19.0049 6.84741 18.9971C6.87866 18.9893 6.90991 18.9775 6.94116 18.9619C6.97241 18.9463 6.99976 18.9307 7.02319 18.915C7.04663 18.8994 7.07397 18.8838 7.10522 18.8682C7.13647 18.8525 7.16382 18.833 7.18726 18.8096C7.21069 18.7861 7.23804 18.7666 7.26929 18.751C7.34741 18.6572 7.41382 18.5518 7.46851 18.4346C7.52319 18.3174 7.55054 18.1885 7.55054 18.0479C7.55054 17.9072 7.52319 17.7744 7.46851 17.6494C7.41382 17.5244 7.34741 17.415 7.26929 17.3213C7.23804 17.3057 7.21069 17.29 7.18726 17.2744C7.16382 17.2588 7.13647 17.2354 7.10522 17.2041C7.07397 17.1885 7.04663 17.1729 7.02319 17.1572C6.99976 17.1416 6.97241 17.126 6.94116 17.1104C6.90991 17.0947 6.87866 17.083 6.84741 17.0752C6.81616 17.0674 6.78491 17.0635 6.75366 17.0635H6.73022C6.7146 17.0479 6.68726 17.04 6.64819 17.04C6.60913 17.04 6.57397 17.04 6.54272 17.04C6.51147 17.04 6.48022 17.04 6.44897 17.04C6.41772 17.04 6.38647 17.0479 6.35522 17.0635C6.32397 17.0635 6.29272 17.0713 6.26147 17.0869C6.23022 17.1025 6.19897 17.1104 6.16772 17.1104C6.13647 17.126 6.10522 17.1416 6.07397 17.1572C6.04272 17.1729 6.01147 17.1885 5.98022 17.2041L5.8396 17.3213C5.74585 17.415 5.67554 17.5244 5.62866 17.6494C5.58179 17.7744 5.55835 17.9072 5.55835 18.0479Z"
                        fill="#8094AE" />
                </g>
                <defs>
                    <clipPath id="clip0_15_1315">
                        <rect width="24" height="24" fill="white"
                            transform="matrix(1 0 0 -1 0.542725 24.54)" />
                    </clipPath>
                </defs>
            </svg>

            <span class="mx-3">Bookings</span>
        </a>



        <div x-data="{ open: false }"
            class="px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100">
            <h2 id="accordion-color-heading-1">
                <div class="flex items-center">
                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_15_1329)">
                            <path
                                d="M11.5349 14.04V23.04H7.55054V14.04H11.5349ZM18.1677 9.56348L10.1521 3.25879C10.074 3.19629 9.98413 3.14551 9.88257 3.10645C9.78101 3.06738 9.66772 3.04785 9.54272 3.04785C9.41772 3.04785 9.30444 3.06738 9.20288 3.10645C9.10132 3.14551 9.00366 3.19629 8.90991 3.25879H8.93335L0.917725 9.56348C0.80835 9.65723 0.718506 9.77051 0.648193 9.90332C0.577881 10.0361 0.542725 10.1807 0.542725 10.3369V20.251C0.542725 21.0166 0.812256 21.6729 1.35132 22.2197C1.89038 22.7666 2.54272 23.04 3.30835 23.04H5.53491V13.0322C5.53491 12.7666 5.63257 12.5361 5.82788 12.3408C6.02319 12.1455 6.26147 12.0479 6.54272 12.0479H12.5427C12.824 12.0479 13.0623 12.1455 13.2576 12.3408C13.4529 12.5361 13.5505 12.7666 13.5505 13.0322V23.04H15.7771C16.5427 23.04 17.1951 22.7666 17.7341 22.2197C18.2732 21.6729 18.5427 21.0166 18.5427 20.251V10.3369C18.5427 10.1807 18.5076 10.0361 18.4373 9.90332C18.3669 9.77051 18.2771 9.65723 18.1677 9.56348Z"
                                fill="#8094AE" />
                        </g>
                        <defs>
                            <clipPath id="clip0_15_1329">
                                <rect width="24" height="24" fill="white"
                                    transform="matrix(1 0 0 -1 0.542725 24.54)" />
                            </clipPath>
                        </defs>
                    </svg>

                    <button @click="open = !open"
                        class="flex items-center justify-between w-full px-3  text-gray-500 hover:text-gray-100"
                        :aria-expanded="open.toString()">
                        <span>Room</span>
                        <svg :class="{ 'rotate-180': open }" class="-mr-1 h-5 w-5 font-bold text-gray-400"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                clip-rule="evenodd" />
                        </svg>
                    </button>
                </div>
            </h2>
            <div x-show="open" class="dark:border-gray-700 dark:bg-gray-900">
                <a class="flex items-center px-6 py-1 text-[15px] text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{ route('rooms.index') }}">
                    <span class="mx-3">Room List</span>
                </a>

                <a class="flex items-center px-6 py-1 text-[15px] text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{ route('types.index') }}">
                    <span class="mx-3">Room Type</span>
                </a>

                <a class="flex items-center px-6 py-1 text-gr5y-500 text-[14px] hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
                    href="{{ route('facilities.index') }}">
                    <span class="mx-3">Facilities</span>
                </a>
            </div>
        </div>


        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('dashboard') }}">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_1341)">
                    <path
                        d="M13.949 3.04785H3.54272C2.7146 3.04785 2.00757 3.34082 1.42163 3.92676C0.835693 4.5127 0.542725 5.21973 0.542725 6.04785V20.04C0.542725 20.8682 0.835693 21.5752 1.42163 22.1611C2.00757 22.7471 2.7146 23.04 3.54272 23.04H13.949C14.7771 23.04 15.4841 22.7471 16.0701 22.1611C16.656 21.5752 16.949 20.8682 16.949 20.04V6.04785C16.949 5.21973 16.656 4.5127 16.0701 3.92676C15.4841 3.34082 14.7771 3.04785 13.949 3.04785ZM14.9568 20.04C14.9568 20.3213 14.8591 20.5596 14.6638 20.7549C14.4685 20.9502 14.2302 21.0479 13.949 21.0479H3.54272C3.44897 21.0322 3.35522 21.0088 3.26147 20.9775C3.16772 20.9463 3.08179 20.9072 3.00366 20.8604L5.55835 18.1885L7.1521 19.8525C7.2146 19.9307 7.29272 19.9893 7.38647 20.0283C7.48022 20.0674 7.58179 20.0869 7.69116 20.0869C7.78491 20.0869 7.87476 20.0713 7.96069 20.04C8.04663 20.0088 8.12085 19.9619 8.18335 19.8994L11.9333 16.7119L11.7693 17.8369C11.7693 17.8525 11.7693 17.8682 11.7693 17.8838C11.7693 17.8994 11.7693 17.915 11.7693 17.9307C11.7693 18.1182 11.8318 18.2822 11.9568 18.4229C12.0818 18.5635 12.238 18.6494 12.4255 18.6807C12.4412 18.6807 12.4568 18.6807 12.4724 18.6807C12.488 18.6807 12.5037 18.6807 12.5193 18.6807C12.7068 18.6807 12.8708 18.6182 13.0115 18.4932C13.1521 18.3682 13.238 18.2119 13.2693 18.0244L13.6677 15.0244C13.6677 15.0088 13.6677 14.9932 13.6677 14.9775C13.6677 14.9619 13.6677 14.9463 13.6677 14.9307C13.6677 14.7432 13.6052 14.5791 13.4802 14.4385C13.3552 14.2979 13.2068 14.2119 13.0349 14.1807H13.0115L10.0115 13.7822C9.99585 13.7822 9.98022 13.7822 9.9646 13.7822C9.94897 13.7822 9.92554 13.7822 9.89429 13.7822C9.69116 13.7822 9.51538 13.8525 9.36694 13.9932C9.21851 14.1338 9.14429 14.3135 9.14429 14.5322C9.14429 14.7197 9.21069 14.8838 9.34351 15.0244C9.47632 15.165 9.63647 15.251 9.82397 15.2822L11.0896 15.4463L7.73804 18.3057L6.09741 16.5713C6.03491 16.5088 5.95679 16.458 5.86304 16.4189C5.76929 16.3799 5.66772 16.3604 5.55835 16.3604C5.44897 16.3604 5.34741 16.3799 5.25366 16.4189C5.15991 16.458 5.08179 16.5088 5.01929 16.5713L2.53491 19.1729V6.04785C2.53491 5.7666 2.63257 5.52832 2.82788 5.33301C3.02319 5.1377 3.26147 5.04004 3.54272 5.04004H13.949C14.2302 5.04004 14.4685 5.1377 14.6638 5.33301C14.8591 5.52832 14.9568 5.7666 14.9568 6.04785V20.04ZM12.7537 8.04004C12.7537 8.32129 12.656 8.55957 12.4607 8.75488C12.2654 8.9502 12.0271 9.04785 11.7458 9.04785H5.74585C5.4646 9.04785 5.22632 8.9502 5.03101 8.75488C4.83569 8.55957 4.73804 8.32129 4.73804 8.04004C4.73804 7.75879 4.83569 7.52051 5.03101 7.3252C5.22632 7.12988 5.4646 7.03223 5.74585 7.03223H11.7458C12.0271 7.03223 12.2654 7.12988 12.4607 7.3252C12.656 7.52051 12.7537 7.75879 12.7537 8.04004ZM8.74585 12.0479C8.74585 12.3135 8.64819 12.5439 8.45288 12.7393C8.25757 12.9346 8.01929 13.0322 7.73804 13.0322H5.74585C5.4646 13.0322 5.22632 12.9346 5.03101 12.7393C4.83569 12.5439 4.73804 12.3135 4.73804 12.0479C4.73804 11.7666 4.83569 11.5283 5.03101 11.333C5.22632 11.1377 5.4646 11.04 5.74585 11.04H7.73804C8.01929 11.04 8.25757 11.1377 8.45288 11.333C8.64819 11.5283 8.74585 11.7666 8.74585 12.0479Z"
                        fill="#8094AE" />
                </g>
                <defs>
                    <clipPath id="clip0_15_1341">
                        <rect width="24" height="24" fill="white"
                            transform="matrix(1 0 0 -1 0.542725 24.54)" />
                    </clipPath>
                </defs>
            </svg>

            <span class="mx-3">Reports</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('dashboard') }}">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_1353)">
                    <path
                        d="M5.18335 9.39941C4.91772 9.13379 4.70679 8.81738 4.55054 8.4502C4.39429 8.08301 4.31616 7.68848 4.31616 7.2666C4.31616 7.21973 4.31616 7.17285 4.31616 7.12598C4.31616 7.0791 4.31616 7.04004 4.31616 7.00879C4.42554 5.91504 4.87866 4.98926 5.67554 4.23145C6.47241 3.47363 7.42554 3.0791 8.53491 3.04785H8.55835C9.6521 3.0791 10.6013 3.46582 11.406 4.20801C12.2107 4.9502 12.6677 5.86035 12.7771 6.93848V6.96191C12.7771 7.00879 12.781 7.05566 12.7888 7.10254C12.7966 7.14941 12.8005 7.2041 12.8005 7.2666C12.8005 7.68848 12.7224 8.0791 12.5662 8.43848C12.4099 8.79785 12.1912 9.11816 11.9099 9.39941C11.5193 9.75879 11.0701 10.0439 10.5623 10.2549C10.0544 10.4658 9.51147 10.5713 8.93335 10.5713C8.9021 10.5713 8.87476 10.5713 8.85132 10.5713C8.82788 10.5713 8.80054 10.5713 8.76929 10.5713H8.79272C8.74585 10.5713 8.70288 10.5713 8.66382 10.5713C8.62476 10.5713 8.5896 10.5713 8.55835 10.5713C8.51147 10.5713 8.45679 10.5713 8.39429 10.5713C8.33179 10.5713 8.2771 10.5713 8.23022 10.5713C7.63647 10.5713 7.07788 10.4658 6.55444 10.2549C6.03101 10.0439 5.57397 9.75879 5.18335 9.39941ZM18.0271 12.165C17.949 12.1182 17.8708 12.0869 17.7927 12.0713C17.7146 12.0557 17.6365 12.0479 17.5583 12.0479C17.2771 12.0479 17.0388 12.1455 16.8435 12.3408C16.6482 12.5361 16.5505 12.7666 16.5505 13.0322C16.5505 13.2354 16.5974 13.415 16.6912 13.5713C16.7849 13.7275 16.9177 13.8447 17.0896 13.9229C17.449 14.1104 17.781 14.6064 18.0857 15.4111C18.3904 16.2158 18.5427 17.1807 18.5427 18.3057V20.04C18.5427 20.3213 18.6404 20.5596 18.8357 20.7549C19.031 20.9502 19.2693 21.0479 19.5505 21.0479C19.8318 21.0479 20.0701 20.9502 20.2654 20.7549C20.4607 20.5596 20.5583 20.3213 20.5583 20.04V18.3057C20.5583 16.8525 20.3279 15.5674 19.8669 14.4502C19.406 13.333 18.7927 12.5713 18.0271 12.165ZM14.7224 9.44629C14.6443 9.47754 14.5701 9.5166 14.4998 9.56348C14.4294 9.61035 14.3552 9.64941 14.2771 9.68066C14.1365 9.77441 14.0232 9.89551 13.9373 10.0439C13.8513 10.1924 13.8083 10.3604 13.8083 10.5479C13.8083 10.8291 13.906 11.0674 14.1013 11.2627C14.2966 11.458 14.5349 11.5557 14.8162 11.5557C14.9099 11.5557 14.9998 11.54 15.0857 11.5088C15.1716 11.4775 15.2537 11.4385 15.3318 11.3916C15.3943 11.3604 15.4568 11.3252 15.5193 11.2861C15.5818 11.2471 15.6443 11.2041 15.7068 11.1572C16.1912 10.9541 16.6169 10.6729 16.9841 10.3135C17.3513 9.9541 17.6443 9.54004 17.863 9.07129V9.04785C17.863 9.03223 17.8669 9.0166 17.8748 9.00098C17.8826 8.98535 17.8865 8.96973 17.8865 8.9541V8.93066C17.9021 8.83691 17.9177 8.73535 17.9333 8.62598C17.949 8.5166 17.9568 8.40723 17.9568 8.29785C17.9568 7.40723 17.6833 6.61816 17.1365 5.93066C16.5896 5.24316 15.9021 4.79004 15.074 4.57129H15.0505C15.0193 4.57129 14.9802 4.56738 14.9333 4.55957C14.8865 4.55176 14.8396 4.54785 14.7927 4.54785C14.5271 4.54785 14.2966 4.64551 14.1013 4.84082C13.906 5.03613 13.8083 5.27441 13.8083 5.55566C13.8083 5.77441 13.8787 5.97363 14.0193 6.15332C14.1599 6.33301 14.3396 6.4541 14.5583 6.5166C14.9646 6.62598 15.3005 6.84863 15.5662 7.18457C15.8318 7.52051 15.9646 7.89941 15.9646 8.32129C15.9646 8.33691 15.9646 8.35645 15.9646 8.37988C15.9646 8.40332 15.9646 8.42285 15.9646 8.43848V8.41504C15.8083 8.64941 15.6248 8.85254 15.4138 9.02441C15.2029 9.19629 14.9724 9.3291 14.7224 9.42285V9.44629ZM12.0505 13.0322H5.04272C4.41772 13.0322 3.83179 13.1963 3.28491 13.5244C2.73804 13.8525 2.26147 14.3018 1.85522 14.8721C1.44897 15.4424 1.12866 16.1104 0.894287 16.876C0.659912 17.6572 0.542725 18.4932 0.542725 19.3838V20.5322C0.542725 20.5947 0.550537 20.6494 0.566162 20.6963C0.581787 20.7432 0.597412 20.79 0.613037 20.8369C0.644287 20.9307 0.691162 21.0205 0.753662 21.1064C0.816162 21.1924 0.886475 21.2666 0.9646 21.3291C1.23022 21.5791 1.60522 21.8057 2.0896 22.0088C2.5896 22.2275 3.16772 22.4111 3.82397 22.5596C4.48022 22.708 5.2146 22.8291 6.0271 22.9229C6.82397 23.001 7.66772 23.04 8.55835 23.04C9.43335 23.04 10.2771 23.001 11.0896 22.9229C11.8865 22.8291 12.6169 22.708 13.281 22.5596C13.9451 22.4111 14.5193 22.2275 15.0037 22.0088C15.5037 21.8057 15.8865 21.5791 16.1521 21.3291C16.2302 21.2666 16.2966 21.1924 16.3513 21.1064C16.406 21.0205 16.449 20.9307 16.4802 20.8369C16.5115 20.79 16.531 20.7432 16.5388 20.6963C16.5466 20.6494 16.5505 20.5947 16.5505 20.5322V19.3838C16.5505 18.4932 16.4333 17.6572 16.199 16.876C15.9646 16.1104 15.6443 15.4424 15.238 14.8721C14.8318 14.3018 14.3552 13.8525 13.8083 13.5244C13.2615 13.1963 12.6755 13.0322 12.0505 13.0322Z"
                        fill="#8094AE" />
                </g>
                <defs>
                    <clipPath id="clip0_15_1353">
                        <rect width="24" height="24" fill="white"
                            transform="matrix(1 0 0 -1 0.542725 24.54)" />
                    </clipPath>
                </defs>
            </svg>

            <span class="mx-3">Guests</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('dashboard') }}">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_1362)">
                    <path
                        d="M20.4412 6.44629C20.4412 5.88379 20.2615 5.3916 19.9021 4.96973C19.5271 4.54785 19.0427 4.19238 18.449 3.90332C17.8552 3.61426 17.1755 3.39941 16.4099 3.25879C15.6599 3.11816 14.8865 3.04785 14.0896 3.04785C13.3083 3.04785 12.5349 3.11816 11.7693 3.25879C11.0193 3.39941 10.3435 3.61426 9.74194 3.90332C9.14038 4.19238 8.65991 4.54785 8.30054 4.96973C7.94116 5.40723 7.76147 5.90723 7.76147 6.46973L7.83179 10.2666C7.67554 10.2666 7.51929 10.2627 7.36304 10.2549C7.20679 10.2471 7.05054 10.2432 6.89429 10.2432C6.12866 10.2432 5.37085 10.3057 4.62085 10.4307C3.85522 10.5557 3.17163 10.7432 2.57007 10.9932C1.96851 11.2432 1.48022 11.5635 1.10522 11.9541C0.730225 12.3447 0.542725 12.8057 0.542725 13.3369V13.3604L0.659912 19.9229C0.659912 20.4697 0.847412 20.9385 1.22241 21.3291C1.59741 21.7197 2.08569 22.04 2.68726 22.29C3.28882 22.54 3.9646 22.7275 4.7146 22.8525C5.48022 22.9775 6.24585 23.04 7.01147 23.04C8.19897 23.04 9.35132 22.8877 10.4685 22.583C11.5857 22.2783 12.3943 21.8057 12.8943 21.165C13.0974 21.1963 13.3083 21.2158 13.5271 21.2236C13.7458 21.2314 13.9724 21.2354 14.2068 21.2354C14.988 21.2354 15.7615 21.165 16.5271 21.0244C17.2927 20.8838 17.9724 20.6689 18.5662 20.3799C19.1599 20.0908 19.6365 19.7354 19.9958 19.3135C20.3708 18.876 20.5583 18.376 20.5583 17.8135L20.4412 6.44629ZM2.58179 15.2119C3.19116 15.4775 3.84741 15.6807 4.55054 15.8213C5.25366 15.9619 5.98022 16.0322 6.73022 16.0322C6.76147 16.0322 6.79663 16.0322 6.83569 16.0322C6.87476 16.0322 6.91772 16.0322 6.9646 16.0322H6.94116C6.98804 16.0322 7.0271 16.0322 7.05835 16.0322C7.0896 16.0322 7.12866 16.0322 7.17554 16.0322C7.90991 16.0322 8.62866 15.9619 9.33179 15.8213C10.0349 15.6807 10.7068 15.4775 11.3474 15.2119L11.2771 15.2354L11.3005 17.0869C10.7693 17.415 10.1794 17.6768 9.53101 17.8721C8.88257 18.0674 8.20679 18.165 7.50366 18.165C7.40991 18.165 7.31226 18.1611 7.21069 18.1533C7.10913 18.1455 7.01147 18.1416 6.91772 18.1416H6.94116C6.86304 18.1416 6.7771 18.1455 6.68335 18.1533C6.5896 18.1611 6.49585 18.165 6.4021 18.165C5.69897 18.165 5.0271 18.0713 4.38647 17.8838C3.74585 17.6963 3.14429 17.4307 2.58179 17.0869H2.60522L2.58179 15.2119ZM18.4724 10.501C17.9412 10.8447 17.3513 11.1182 16.7029 11.3213C16.0544 11.5244 15.3787 11.626 14.6755 11.626C14.5818 11.626 14.488 11.6221 14.3943 11.6143C14.3005 11.6064 14.2146 11.6025 14.1365 11.6025H14.1599C14.1443 11.6025 14.1365 11.6025 14.1365 11.6025C14.1365 11.6025 14.1287 11.6025 14.113 11.6025C13.738 11.6025 13.363 11.583 12.988 11.5439C12.613 11.5049 12.2458 11.4463 11.8865 11.3682H11.9568C11.6599 11.1963 11.3435 11.0439 11.0076 10.9111C10.6716 10.7783 10.3162 10.6729 9.94116 10.5947L9.89429 10.5713C9.87866 10.5557 9.86694 10.5439 9.85913 10.5361C9.85132 10.5283 9.8396 10.5166 9.82397 10.501L9.7771 8.32129C10.3865 8.57129 11.0388 8.77051 11.7341 8.91895C12.4294 9.06738 13.1521 9.1416 13.9021 9.1416C13.9333 9.1416 13.9685 9.1416 14.0076 9.1416C14.0466 9.1416 14.0818 9.1416 14.113 9.1416C14.1443 9.1416 14.1794 9.1416 14.2185 9.1416C14.2576 9.1416 14.2927 9.1416 14.324 9.1416C15.074 9.1416 15.8005 9.06738 16.5037 8.91895C17.2068 8.77051 17.8787 8.55566 18.5193 8.27441L18.449 8.29785L18.4724 10.501ZM13.2458 13.3369C13.2458 13.29 13.2419 13.2432 13.2341 13.1963C13.2263 13.1494 13.2146 13.1025 13.199 13.0557H13.2224C13.363 13.0713 13.5154 13.083 13.6794 13.0908C13.8435 13.0986 14.0037 13.1025 14.1599 13.1025C14.1912 13.1025 14.2263 13.1025 14.2654 13.1025C14.3044 13.1025 14.3396 13.1025 14.3708 13.1025C15.1208 13.1025 15.8474 13.0283 16.5505 12.8799C17.2537 12.7314 17.9255 12.5166 18.5662 12.2354L18.4958 12.2588L18.5193 14.5322C18.4099 14.626 18.2966 14.7158 18.1794 14.8018C18.0623 14.8877 17.9333 14.9541 17.7927 15.001L17.7693 15.0244C17.3162 15.2119 16.8279 15.3643 16.3044 15.4814C15.781 15.5986 15.238 15.6572 14.6755 15.6572C14.6443 15.6572 14.6091 15.6572 14.5701 15.6572C14.531 15.6572 14.488 15.6572 14.4412 15.6572C14.238 15.6572 14.0349 15.6533 13.8318 15.6455C13.6287 15.6377 13.4255 15.6182 13.2224 15.5869H13.2693L13.2458 13.3369ZM14.0896 5.04004C15.5115 5.04004 16.5935 5.23145 17.3357 5.61426C18.0779 5.99707 18.449 6.28223 18.449 6.46973V6.56348C17.9021 6.90723 17.3044 7.17285 16.656 7.36035C16.0076 7.54785 15.3318 7.6416 14.6287 7.6416C14.5349 7.6416 14.4451 7.6416 14.3591 7.6416C14.2732 7.6416 14.1833 7.6416 14.0896 7.6416H14.113C14.0349 7.6416 13.949 7.64551 13.8552 7.65332C13.7615 7.66113 13.6599 7.66504 13.5505 7.66504C12.8474 7.66504 12.1716 7.56348 11.5232 7.36035C10.8748 7.15723 10.2771 6.88379 9.73022 6.54004H9.75366V6.44629C9.75366 6.25879 10.1208 5.97754 10.8552 5.60254C11.5896 5.22754 12.6677 5.04004 14.0896 5.04004ZM6.89429 12.2354C8.25366 12.2354 9.30054 12.3838 10.0349 12.6807C10.7693 12.9775 11.1677 13.2041 11.2302 13.3604V13.5479C10.699 13.8604 10.113 14.1064 9.47241 14.2861C8.83179 14.4658 8.15991 14.5557 7.45679 14.5557C7.36304 14.5557 7.27319 14.5557 7.18726 14.5557C7.10132 14.5557 7.01147 14.5479 6.91772 14.5322H6.94116C5.72241 14.5322 4.74194 14.4072 3.99976 14.1572C3.25757 13.9072 2.7771 13.665 2.55835 13.4307V13.3604C2.63647 13.2041 3.04272 12.9775 3.7771 12.6807C4.51147 12.3838 5.55054 12.2354 6.89429 12.2354ZM7.01147 21.0479C5.63647 21.0479 4.58179 20.8955 3.84741 20.5908C3.11304 20.2861 2.7146 20.0635 2.6521 19.9229V18.8447C3.24585 19.0947 3.89038 19.29 4.58569 19.4307C5.28101 19.5713 5.99585 19.6416 6.73022 19.6416C6.7771 19.6416 6.81616 19.6416 6.84741 19.6416C6.87866 19.6416 6.91772 19.6416 6.9646 19.6416H6.94116C6.98804 19.6416 7.03101 19.6416 7.07007 19.6416C7.10913 19.6416 7.14429 19.6416 7.17554 19.6416C7.92554 19.6416 8.65601 19.5674 9.36694 19.4189C10.0779 19.2705 10.7615 19.0557 11.4177 18.7744L11.3474 18.8213V19.8994C11.2849 20.0557 10.8865 20.2861 10.1521 20.5908C9.41772 20.8955 8.37085 21.0479 7.01147 21.0479ZM14.2068 19.2432C14.0662 19.2432 13.9216 19.2393 13.7732 19.2314C13.6248 19.2236 13.4802 19.2119 13.3396 19.1963L13.2927 17.1104C13.4802 17.126 13.6638 17.1377 13.8435 17.1455C14.0232 17.1533 14.199 17.1572 14.3708 17.1572C14.4333 17.1572 14.4919 17.1572 14.5466 17.1572C14.6013 17.1572 14.6521 17.1572 14.699 17.1572C15.3708 17.1572 16.0232 17.0869 16.656 16.9463C17.2888 16.8057 17.8943 16.6104 18.4724 16.3604L18.4021 16.3838C18.4333 16.3682 18.4568 16.3525 18.4724 16.3369C18.488 16.3213 18.5115 16.3135 18.5427 16.3135V17.8369C18.5427 18.0088 18.1755 18.2861 17.4412 18.6689C16.7068 19.0518 15.6287 19.2432 14.2068 19.2432Z"
                        fill="#8094AE" />
                </g>
                <defs>
                    <clipPath id="clip0_15_1362">
                        <rect width="24" height="24" fill="white"
                            transform="matrix(1 0 0 -1 0.542725 24.54)" />
                    </clipPath>
                </defs>
            </svg>

            <span class="mx-3">Payment</span>
        </a>

        <a class="flex items-center px-6 py-2 mt-4 text-gray-500 hover:bg-gray-700 hover:bg-opacity-25 hover:text-gray-100"
            href="{{ route('dashboard') }}">
            <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <g clip-path="url(#clip0_15_1383)">
                    <path
                        d="M18.2849 15.165L18.4724 15.0947C19.0818 14.876 19.5818 14.501 19.9724 13.9697C20.363 13.4385 20.5583 12.8369 20.5583 12.165C20.5583 11.9932 20.5427 11.8291 20.5115 11.6729C20.4802 11.5166 20.4412 11.3604 20.3943 11.2041L20.4177 11.2275L19.6912 8.97754C19.6912 8.97754 19.6873 8.96191 19.6794 8.93066C19.6716 8.89941 19.6677 8.88379 19.6677 8.88379C19.4646 8.27441 19.1013 7.77441 18.5779 7.38379C18.0544 6.99316 17.4568 6.79785 16.7849 6.79785C16.613 6.79785 16.449 6.80957 16.2927 6.83301C16.1365 6.85645 15.9802 6.89941 15.824 6.96191L15.8474 6.93848L15.5427 7.05566C15.5115 7.05566 15.4802 7.05957 15.449 7.06738C15.4177 7.0752 15.3865 7.0791 15.3552 7.0791C15.2927 7.0791 15.2302 7.06738 15.1677 7.04395C15.1052 7.02051 15.0505 6.99316 15.0037 6.96191L14.9333 6.8916C14.8552 6.84473 14.7966 6.77832 14.7576 6.69238C14.7185 6.60645 14.699 6.5166 14.699 6.42285C14.699 6.42285 14.699 6.41895 14.699 6.41113C14.699 6.40332 14.699 6.39941 14.699 6.39941V6.16504C14.699 6.14941 14.699 6.1416 14.699 6.1416C14.699 6.1416 14.699 6.13379 14.699 6.11816C14.699 5.69629 14.6169 5.29785 14.4529 4.92285C14.2888 4.54785 14.0662 4.21973 13.7849 3.93848C13.5193 3.65723 13.2029 3.43848 12.8357 3.28223C12.4685 3.12598 12.074 3.04785 11.6521 3.04785H9.33179C8.48804 3.04785 7.76929 3.34863 7.17554 3.9502C6.58179 4.55176 6.28491 5.28223 6.28491 6.1416V6.35254C6.28491 6.46191 6.26147 6.56738 6.2146 6.66895C6.16772 6.77051 6.10522 6.85254 6.0271 6.91504L5.90991 7.00879C5.84741 7.05566 5.7771 7.09082 5.69897 7.11426C5.62085 7.1377 5.54272 7.14941 5.4646 7.14941C5.41772 7.14941 5.37476 7.14551 5.33569 7.1377C5.29663 7.12988 5.26147 7.11816 5.23022 7.10254V7.12598C5.0896 7.06348 4.94116 7.02051 4.78491 6.99707C4.62866 6.97363 4.4646 6.96191 4.29272 6.96191C3.60522 6.96191 2.99976 7.16504 2.47632 7.57129C1.95288 7.97754 1.60522 8.49316 1.43335 9.11816V9.1416L0.706787 11.4619C0.659912 11.6025 0.62085 11.7549 0.5896 11.9189C0.55835 12.083 0.542725 12.251 0.542725 12.4229C0.542725 13.0947 0.741943 13.7002 1.14038 14.2393C1.53882 14.7783 2.04272 15.1494 2.6521 15.3525L2.67554 15.376C2.70679 15.376 2.74194 15.3838 2.78101 15.3994C2.82007 15.415 2.85522 15.4229 2.88647 15.4229C2.9646 15.4697 3.03101 15.5322 3.08569 15.6104C3.14038 15.6885 3.17554 15.7744 3.19116 15.8682L3.26147 16.0088C3.2771 16.0557 3.28882 16.1025 3.29663 16.1494C3.30444 16.1963 3.30835 16.2432 3.30835 16.29C3.30835 16.3838 3.29663 16.4697 3.27319 16.5479C3.24976 16.626 3.2146 16.6963 3.16772 16.7588C2.99585 17.0088 2.85913 17.2861 2.75757 17.5908C2.65601 17.8955 2.60522 18.2197 2.60522 18.5635C2.60522 19.0635 2.7146 19.5283 2.93335 19.958C3.1521 20.3877 3.44897 20.7432 3.82397 21.0244V21.0479L5.67554 22.4072C5.92554 22.5947 6.19897 22.7432 6.49585 22.8525C6.79272 22.9619 7.11304 23.0244 7.45679 23.04C7.48804 23.04 7.51929 23.04 7.55054 23.04C7.58179 23.04 7.62085 23.04 7.66772 23.04C7.73022 23.04 7.79272 23.04 7.85522 23.04C7.91772 23.04 7.98022 23.0322 8.04272 23.0166H8.01929C8.44116 22.9541 8.82397 22.8096 9.16772 22.583C9.51147 22.3564 9.79272 22.0791 10.0115 21.751L10.0349 21.7275L10.2224 21.4463C10.2849 21.3682 10.3591 21.3018 10.4451 21.2471C10.531 21.1924 10.6208 21.165 10.7146 21.165C10.824 21.165 10.9216 21.1924 11.0076 21.2471C11.0935 21.3018 11.1677 21.3682 11.2302 21.4463L11.4412 21.7275C11.7068 22.0869 12.0505 22.376 12.4724 22.5947C12.8943 22.8135 13.3474 22.9229 13.8318 22.9229C14.1755 22.9229 14.5037 22.8682 14.8162 22.7588C15.1287 22.6494 15.4099 22.4932 15.6599 22.29L17.4646 20.9072C17.8396 20.6104 18.1365 20.2471 18.3552 19.8174C18.574 19.3877 18.6833 18.9229 18.6833 18.4229C18.6833 18.0791 18.6365 17.7588 18.5427 17.4619C18.449 17.165 18.3083 16.8838 18.1208 16.6182L18.1443 16.6416L17.9099 16.3135C17.863 16.251 17.8318 16.1807 17.8162 16.1025C17.8005 16.0244 17.7927 15.9463 17.7927 15.8682C17.7927 15.8369 17.7927 15.8018 17.7927 15.7627C17.7927 15.7236 17.8005 15.6807 17.8162 15.6338V15.6572C17.8474 15.5322 17.906 15.4268 17.9919 15.3408C18.0779 15.2549 18.1755 15.1963 18.2849 15.165ZM10.5505 17.04C9.44116 17.04 8.49585 16.6494 7.7146 15.8682C6.93335 15.0869 6.54272 14.1416 6.54272 13.0322C6.54272 11.9385 6.93335 11.001 7.7146 10.2197C8.49585 9.43848 9.44116 9.04785 10.5505 9.04785C11.6599 9.04785 12.6052 9.43848 13.3865 10.2197C14.1677 11.001 14.5583 11.9385 14.5583 13.0322C14.5583 14.1416 14.1677 15.0869 13.3865 15.8682C12.6052 16.6494 11.6599 17.04 10.5505 17.04ZM12.5427 13.0322C12.5427 13.5947 12.3474 14.0713 11.9568 14.4619C11.5662 14.8525 11.0974 15.0479 10.5505 15.0479C10.0037 15.0479 9.53491 14.8525 9.14429 14.4619C8.75366 14.0713 8.55835 13.5947 8.55835 13.0322C8.55835 12.4854 8.75366 12.0166 9.14429 11.626C9.53491 11.2354 10.0037 11.04 10.5505 11.04C11.0974 11.04 11.5662 11.2354 11.9568 11.626C12.3474 12.0166 12.5427 12.4854 12.5427 13.0322Z"
                        fill="#8094AE" />
                </g>
                <defs>
                    <clipPath id="clip0_15_1383">
                        <rect width="24" height="24" fill="white"
                            transform="matrix(1 0 0 -1 0.542725 24.54)" />
                    </clipPath>
                </defs>
            </svg>

            <span class="mx-3">Settings</span>
        </a>
    </nav>
</div>
