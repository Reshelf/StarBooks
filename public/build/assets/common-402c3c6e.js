function e(t,n){const o=document.querySelector(t),s=document.querySelector(n);o&&s&&o.addEventListener("keyup",()=>{const c=o.value;c!==null&&(s.textContent=c.length.toString())})}e(".count_2",".string_count_2");e(".count_6",".string_count_6");e(".count_7",".string_count_7");e(".count_11",".string_count_11");e(".count_12",".string_count_12");e(".count_13",".string_count_13");e(".count_14",".string_count_14");e(".count_15",".string_count_15");e(".count_16",".string_count_16");document.addEventListener("DOMContentLoaded",function(){const t=document.getElementById("sendForm"),n=document.querySelector(".progress"),o=document.getElementById("overlay");!t||!n||!o||t.addEventListener("submit",function(){n.style.display="block",o.classList.remove("hidden")})});function i(){document.querySelectorAll(".submit_btn, .submit_btn2, .submit_btn3").forEach(n=>n.classList.add("activeLoading"))}window.submit_btn=i;function u(){const t=document.querySelector(".stripe_connectbtn");t&&(t.classList.add("activeLoading"),window.setTimeout(function(){t.classList.remove("activeLoading")},5e3))}window.stripe_connectbtn=u;function r(t){const n=t.nextElementSibling;t.value?n.classList.add("text-xs","text-gray-500","dark:bg-dark-1","-translate-y-5","bg-white","px-2","py-1","z-20"):n.classList.remove("text-xs","text-gray-500","dark:bg-dark-1","-translate-y-5","bg-white","px-2","py-1","z-20")}window.updateLabel=r;
