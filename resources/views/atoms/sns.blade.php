 <div class="dropdown">
     <button class="dropbtn">
         <div class="text-xs flex justify-center items-center">
             <svg class="lg:mr-2 w-[20px] h-[20px] stroke-t-color dark:stroke-ddd" fill="none" viewBox="0 0 24 24"
                 stroke-width="1.5" stroke="currentColor">
                 <path stroke-linecap="round" stroke-linejoin="round"
                     d="M9 8.25H7.5a2.25 2.25 0 00-2.25 2.25v9a2.25 2.25 0 002.25 2.25h9a2.25 2.25 0 002.25-2.25v-9a2.25 2.25 0 00-2.25-2.25H15m0-3l-3-3m0 0l-3 3m3-3V15" />
             </svg>
             <div class="hidden lg:block">
                 {{ __('シェアする') }}
             </div>
         </div>
     </button>
     <div class="dropdown-content">
         <div class="">
             <!-- Twitter -->
             <a class="hover:bg-[#46ACDF] hover:bg-opacity-10 rounded tracking-widest flex items-center py-2 px-4 text-[#46ACDF] m-2"
                 href="https://twitter.com/share?url={{ url()->full() }}&text={{ $sns_title }}%0a" target="_blank"
                 rel="nofollow noopener noreferrer">
                 <svg class="mr-2" width="18" height="18" viewBox="0 0 32 32" fill="none">
                     <path
                         d="M11.7887 28C8.55374 28 5.53817 27.0591 3 25.4356C5.15499 25.5751 8.95807 25.2411 11.3236 22.9848C7.76508 22.8215 6.16026 20.0923 5.95094 18.926C6.25329 19.0426 7.6953 19.1826 8.50934 18.856C4.4159 17.8296 3.78793 14.2373 3.92748 13.141C4.695 13.6775 5.99745 13.8641 6.50913 13.8174C2.69479 11.0882 4.06703 6.98276 4.74151 6.09635C7.47882 9.88867 11.5812 12.0186 16.6564 12.137C16.5607 11.7174 16.5102 11.2804 16.5102 10.8316C16.5102 7.61092 19.1134 5 22.3247 5C24.0025 5 25.5144 5.71275 26.5757 6.85284C27.6969 6.59011 29.3843 5.97507 30.2092 5.4432C29.7934 6.93611 28.4989 8.18149 27.7159 8.64308C27.7224 8.65878 27.7095 8.62731 27.7159 8.64308C28.4037 8.53904 30.2648 8.18137 31 7.68256C30.6364 8.52125 29.264 9.91573 28.1377 10.6964C28.3473 19.9381 21.2765 28 11.7887 28Z"
                         fill="#47ACDF" />
                 </svg>
                 Twitter
             </a>

             <!-- Facebook -->
             <a class="hover:bg-[#0F91F3] hover:bg-opacity-10 rounded tracking-widest flex items-center py-2 px-4 text-[#0F91F3] m-2"
                 href="http://www.facebook.com/share.php?u={{ url()->full() }}" target="_blank"
                 rel="nofollow noopener noreferrer">
                 <svg class="mr-2" width="18" height="18" viewBox="0 0 32 32" fill="none">
                     <circle cx="16" cy="16" r="14" fill="url(#paint0_linear_29_2043)" />
                     <path
                         d="M21.2137 20.2816L21.8356 16.3301H17.9452V13.767C17.9452 12.6857 18.4877 11.6311 20.2302 11.6311H22V8.26699C22 8.26699 20.3945 8 18.8603 8C15.6548 8 13.5617 9.89294 13.5617 13.3184V16.3301H10V20.2816H13.5617V29.8345C14.2767 29.944 15.0082 30 15.7534 30C16.4986 30 17.2302 29.944 17.9452 29.8345V20.2816H21.2137Z"
                         fill="white" />
                     <defs>
                         <linearGradient id="paint0_linear_29_2043" x1="16" y1="2" x2="16"
                             y2="29.917" gradientUnits="userSpaceOnUse">
                             <stop stop-color="#18ACFE" />
                             <stop offset="1" stop-color="#0163E0" />
                         </linearGradient>
                     </defs>
                 </svg>
                 Facebook
             </a>

             <!-- LINE -->
             <a class="hover:bg-[#2DCF54] hover:bg-opacity-10 rounded tracking-widest flex items-center py-2 px-4 text-[#2DCF54] m-2"
                 href="http://line.me/R/msg/text/?{{ url()->full() }}%0a{{ $sns_title }}" target="_blank"
                 rel="nofollow noopener noreferrer">
                 <svg class="mr-2" width="18" height="18" viewBox="0 0 32 32" fill="none">
                     <path
                         d="M30 14.4979C30 8.15792 23.7199 3 15.9999 3C8.28094 3 2 8.15792 2 14.4979C2 20.1817 6.98063 24.9417 13.7084 25.8418C14.1644 25.9412 14.7849 26.146 14.9419 26.5404C15.0831 26.8986 15.0342 27.4598 14.987 27.8216C14.987 27.8216 14.8227 28.8214 14.7873 29.0343C14.7264 29.3926 14.5061 30.4353 15.9999 29.7981C17.4942 29.1609 24.0626 24.9935 26.9998 21.572C29.0287 19.3204 30 17.0353 30 14.4979Z"
                         fill="#2CCF54" />
                     <path
                         d="M13.1553 11.4249H12.1733C12.0228 11.4249 11.9004 11.5483 11.9004 11.7V17.8665C11.9004 18.0184 12.0228 18.1416 12.1733 18.1416H13.1553C13.3059 18.1416 13.428 18.0184 13.428 17.8665V11.7C13.428 11.5483 13.3059 11.4249 13.1553 11.4249Z"
                         fill="white" />
                     <path
                         d="M19.9147 11.4249H18.9327C18.7821 11.4249 18.66 11.5483 18.66 11.7V15.3635L15.8645 11.5472C15.8128 11.4688 15.729 11.43 15.6375 11.4249H14.6558C14.5052 11.4249 14.3828 11.5483 14.3828 11.7V17.8665C14.3828 18.0184 14.5052 18.1416 14.6558 18.1416H15.6375C15.7883 18.1416 15.9104 18.0184 15.9104 17.8665V14.204L18.7094 18.0252C18.7597 18.0972 18.845 18.1416 18.9327 18.1416H19.9147C20.0655 18.1416 20.1874 18.0184 20.1874 17.8665V11.7C20.1874 11.5483 20.0655 11.4249 19.9147 11.4249Z"
                         fill="white" />
                     <path
                         d="M10.7884 16.5974H8.12013V11.7002C8.12013 11.548 7.99802 11.4246 7.84773 11.4246H6.86545C6.71489 11.4246 6.59277 11.548 6.59277 11.7002V17.8657C6.59277 18.0154 6.71435 18.1416 6.86518 18.1416H10.7884C10.9389 18.1416 11.0605 18.0179 11.0605 17.8657V16.873C11.0605 16.7208 10.9389 16.5974 10.7884 16.5974Z"
                         fill="white" />
                     <path
                         d="M25.3377 12.9688C25.4883 12.9688 25.6098 12.8456 25.6098 12.6932V11.7005C25.6098 11.5483 25.4883 11.4246 25.3377 11.4246H21.4148C21.2641 11.4246 21.1421 11.5506 21.1421 11.7002V17.866C21.1421 18.0152 21.2638 18.1416 21.4142 18.1416H25.3377C25.4883 18.1416 25.6098 18.0179 25.6098 17.866V16.873C25.6098 16.7211 25.4883 16.5974 25.3377 16.5974H22.6697V15.5551H25.3377C25.4883 15.5551 25.6098 15.4316 25.6098 15.2794V14.2868C25.6098 14.1346 25.4883 14.0109 25.3377 14.0109H22.6697V12.9688H25.3377Z"
                         fill="white" />
                 </svg>
                 LINE
             </a>
         </div>
     </div>
 </div>
