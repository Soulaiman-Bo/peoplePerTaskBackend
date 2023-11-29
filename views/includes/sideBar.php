<aside id="logo-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full bg-white border-r border-gray-200 smXl:translate-x-0 dark:bg-gray-800 dark:border-gray-700" aria-label="Sidebar">
    <div class="h-full px-3 pb-4 overflow-y-auto bg-white dark:bg-gray-800">
        <ul class="space-y-2 font-medium">

            <ul class="space-y-2 font-medium">

                <li>
                    <a href="home.php" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                        <svg  class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2 6.27737C2 6.0311 2.12534 5.80007 2.33638 5.65735L7.53638 2.14078C7.81395 1.95307 8.18605 1.95307 8.46362 2.14078L13.6636 5.65735C13.8747 5.80007 14 6.0311 14 6.27737V12.8588C14 13.4891 13.4627 14 12.8 14H3.2C2.53726 14 2 13.4891 2 12.8588V6.27737Z" stroke="currentColor" stroke-width="2" />
                        </svg>
                        <span class="ml-3 font-inter">Home</span>
                    </a>
                </li>

                <li>
                    <a href="dashboard.php"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">
                         <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M6.1999 9.4V8.2M10.9999 9.4V7M15.7999 9.4V4.6M8.5999 14.2L6.7999 19M15.5935 18.9333L13.4722 14.2664M3.7999 14.2C2.47442 14.2 1.3999 13.1255 1.3999 11.8V3.4C1.3999 2.07452 2.47442 1 3.7999 1H18.1999C19.5254 1 20.5999 2.07452 20.5999 3.4V11.8C20.5999 13.1255 19.5254 14.2 18.1999 14.2H3.7999Z"  stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="ml-3 font-inter">Dashboard</span>
                    </a>
                </li>

                <li>
                    <a href="./index.php?view=getAllUsers"
                        class="flex items-center p-2 text-white rounded-lg bg-orange-600 dark:text-white hover:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <svg class="flex-shrink-0 w-5 h-5 text-white transition duration-75 dark:text-white group-hover:text-gray-900 dark:group-hover:text-white"
                            width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M2.15845 13C3.04205 11.5262 4.97863 10.5175 7.99996 10.5175C11.0213 10.5175 12.9579 11.5262 13.8415 13M10.4 5.4C10.4 6.72548 9.32545 7.8 7.99996 7.8C6.67448 7.8 5.59996 6.72548 5.59996 5.4C5.59996 4.07452 6.67448 3 7.99996 3C9.32545 3 10.4 4.07452 10.4 5.4Z"
                                stroke="currentColor" stroke-width="1.5" stroke-linecap="round" />
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap font-inter">Users</span>
                    </a>
                </li>

                <li>
                    <a href="./index.php?viewofFreelancer=getAllFreelancers"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" width="22" height="20" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.0253 18.5707L15.0256 15.3569C15.0258 13.5818 13.5867 12.1426 11.8115 12.1426H4.61432C2.83939 12.1426 1.40046 13.5814 1.40026 15.3563L1.3999 18.5707M20.5996 18.5709L20.5999 15.3571C20.6001 13.5819 19.161 12.1428 17.3858 12.1428M14.4062 2.06048C15.1955 2.64612 15.7071 3.58498 15.7071 4.64331C15.7071 5.70164 15.1955 6.64049 14.4062 7.22613M11.4937 4.64313C11.4937 6.41821 10.0547 7.85719 8.27964 7.85719C6.50457 7.85719 5.06559 6.41821 5.06559 4.64313C5.06559 2.86806 6.50457 1.42908 8.27964 1.42908C10.0547 1.42908 11.4937 2.86806 11.4937 4.64313Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap font-inter">Freelancers</span>
                    </a>
                </li>

                <li>
                    <a href="./index.php?viewofproject=getAllProjects"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 dark:text-gray-400 transition duration-75 group-hover:text-gray-900 dark:group-hover:text-white" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path stroke="currentColor" stroke-width="1"  d="M18.4375 11C18.9898 11 19.4375 10.5523 19.4375 10C19.4375 9.44772 18.9898 9 18.4375 9L18.4375 11ZM18 10C18 14.4183 14.4183 18 10 18V20C15.5228 20 20 15.5228 20 10H18ZM10 18C5.58172 18 2 14.4183 2 10H0C0 15.5228 4.47715 20 10 20V18ZM2 10C2 5.58172 5.58172 2 10 2V0C4.47715 0 0 4.47715 0 10H2ZM10 2C14.4183 2 18 5.58172 18 10H20C20 4.47715 15.5228 0 10 0V2ZM10 18C9.78721 18 9.50566 17.9056 9.16241 17.5738C8.81434 17.2373 8.45521 16.7021 8.13192 15.9631C7.48665 14.4882 7.0625 12.3807 7.0625 10H5.0625C5.0625 12.5898 5.51979 14.9823 6.29961 16.7648C6.68887 17.6545 7.1782 18.4373 7.77228 19.0117C8.37118 19.5907 9.12548 20 10 20V18ZM7.0625 10C7.0625 7.61928 7.48665 5.51177 8.13192 4.03686C8.45521 3.29792 8.81434 2.76272 9.16241 2.42621C9.50566 2.09436 9.78721 2 10 2V0C9.12548 0 8.37118 0.409315 7.77228 0.988315C7.1782 1.56266 6.68887 2.34548 6.29961 3.23522C5.51979 5.01767 5.0625 7.41015 5.0625 10H7.0625ZM10 20C10.8745 20 11.6288 19.5907 12.2277 19.0117C12.8218 18.4373 13.3111 17.6545 13.7004 16.7648C14.4802 14.9823 14.9375 12.5898 14.9375 10H12.9375C12.9375 12.3807 12.5133 14.4882 11.8681 15.9631C11.5448 16.7021 11.1857 17.2373 10.8376 17.5738C10.4943 17.9056 10.2128 18 10 18V20ZM14.9375 10C14.9375 7.41015 14.4802 5.01767 13.7004 3.23522C13.3111 2.34548 12.8218 1.56266 12.2277 0.988315C11.6288 0.409315 10.8745 0 10 0V2C10.2128 2 10.4943 2.09436 10.8376 2.42621C11.1857 2.76272 11.5448 3.29792 11.8681 4.03686C12.5133 5.51177 12.9375 7.61928 12.9375 10H14.9375ZM1 11L18.4375 11L18.4375 9L1 9L1 11Z" fill="currentColor" />
                        </svg>

                        <span class="flex-1 ml-3 whitespace-nowrap font-inter">Projects</span>
                    </a>
                </li>

                <li>
                    <a href="./index.php?viewofCategory=getAllcategories"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1C18.1046 1 19 1.88316 19 2.9726L19 6.33992C19 7.42936 18.1046 8.31252 17 8.31252H14C12.8954 8.31252 12 7.42936 12 6.33992L12 2.9726C12 1.88316 12.8954 1 14 1L17 1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 1C1.89543 1 0.999999 1.88316 0.999999 2.9726L1.00001 6.33992C1.00001 7.42936 1.89544 8.31252 3.00001 8.31252H6.00001C7.10458 8.31252 8.00001 7.42936 8.00001 6.33992L8 2.9726C8 1.88316 7.10457 1 6 1L3 1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 11.6875C18.1046 11.6875 19 12.5707 19 13.6601V17.0274C19 18.1168 18.1046 19 17 19H14C12.8954 19 12 18.1168 12 17.0274L12 13.6601C12 12.5707 12.8954 11.6875 14 11.6875H17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.00001 11.6875C1.89544 11.6875 1.00001 12.5707 1.00001 13.6601L1.00001 17.0274C1.00001 18.1168 1.89544 19 3.00001 19H6.00001C7.10458 19 8.00001 18.1168 8.00001 17.0274L8.00001 13.6601C8.00001 12.5707 7.10458 11.6875 6.00001 11.6875H3.00001Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <span class="flex-1 ml-3 whitespace-nowrap font-inter">Categories</span>
                    </a>
                </li>

                <li>
                    <a href="./index.php?viewoftestimonial=createtestimonial"
                        class="flex items-center p-2 text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700 group">

                        <svg class="flex-shrink-0 w-5 h-5 text-gray-500 transition duration-75 dark:text-gray-400 group-hover:text-gray-900 dark:group-hover:text-white" width="16" height="16" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M17 1C18.1046 1 19 1.88316 19 2.9726L19 6.33992C19 7.42936 18.1046 8.31252 17 8.31252H14C12.8954 8.31252 12 7.42936 12 6.33992L12 2.9726C12 1.88316 12.8954 1 14 1L17 1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3 1C1.89543 1 0.999999 1.88316 0.999999 2.9726L1.00001 6.33992C1.00001 7.42936 1.89544 8.31252 3.00001 8.31252H6.00001C7.10458 8.31252 8.00001 7.42936 8.00001 6.33992L8 2.9726C8 1.88316 7.10457 1 6 1L3 1Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M17 11.6875C18.1046 11.6875 19 12.5707 19 13.6601V17.0274C19 18.1168 18.1046 19 17 19H14C12.8954 19 12 18.1168 12 17.0274L12 13.6601C12 12.5707 12.8954 11.6875 14 11.6875H17Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M3.00001 11.6875C1.89544 11.6875 1.00001 12.5707 1.00001 13.6601L1.00001 17.0274C1.00001 18.1168 1.89544 19 3.00001 19H6.00001C7.10458 19 8.00001 18.1168 8.00001 17.0274L8.00001 13.6601C8.00001 12.5707 7.10458 11.6875 6.00001 11.6875H3.00001Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>



                        <span class="flex-1 ml-3 whitespace-nowrap font-inter">Testimonial</span>
                    </a>
                </li>

            </ul>
        </ul>
    </div>
</aside>