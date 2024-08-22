<x-app>
    <div class="w-1/2  h-screen overflow-auto">
    <div class="bg-[#4C61A5] sticky top-0 h-16 mt-4 rounded-lg flex items-center px-4 justify-between text-white">
          <div class="">
            Blogo
          </div>

          <div class="">
            <a href="{{ route('admin.index') }}">
                By Erc Ernst
            </a>
          </div>
    </div>

    <div class="my-12 mx-24 space-y-12">

        <div class="space-y-3 hover:bg-slate-200 p-2 rounded-2xl">
            <div class="flex justify-between items-center">
                <div class="flex gap-3">
                    <div class="">
                        <img src="data:image/png;base64,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" 
                            alt=""
                            class="w-12 h-12 rounded-2xl">
                    </div>
                    <div class="">
                    <div class="">Official E. Msilanga</div>
                    <div class="font-light">Admin</div>
                    </div>
                </div>
                <div class="">
                    <div class="font-light text-sm">Just now</div>
                </div>
            </div>
            <div class="">
                <p class="text-sm">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis error est maxime magni accusamus perspiciatis rem nisi sit, architecto rerum. Eos quas cumque repudiandae iste cupiditate delectus voluptatem ducimus sunt!
                    <a href="" class="text-[#4C61A5]">Read more...</a>
                </p>
            </div>
            <div class="w-full">
            <img src="data:image/jpeg;base64,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" 
                    alt=""
                    class="h-full w-full rounded-lg">
            </div>
        </div>

        <div class="space-y-3  hover:bg-slate-200 p-2 rounded-2xl">
            <div class="flex justify-between items-center">
                <div class="flex gap-3">
                    <div class="">
                        <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAeFBMVEUAAAD///9QUFDNzc36+vpubm4/Pz/f398NDQ2UlJQcHBzb29v09PT4+Pj8/PyCgoIrKyvu7u6pqak4ODgzMzPAwMDGxsYUFBRiYmImJiZJSUm6urpWVladnZ2JiYm0tLR5eXmQkJAoKChgYGDn5+dzc3Otra2jo6OnIWkQAAAGpUlEQVR4nO2c6ZaiMBBGjaigII4LLrhhS+v7v+GorfJVEnDpFhJO3X8z2n3qNpBKKhUaDYZhGIZhGIZhGIZhGIZhGIZhGIZhGIZhGIZhGIZhGGPxxnE8/jfxqo7jY6xG0XQaLZeH+azqUD5DPBVX/LjqWD7DRtz5rjqWz9DNDAdVx/IZkmFmWM/BJnsO62o4d2tu6OFzWEvDybbuhuNlZripZcr/d8gMu72qo/kE+BzW0xDnNDU1TIK6G0I+rKlh02FD23nDsDeZfDamvwVS/lOGk3X/9NU0+XRcf0fnJcOVf/uyU0Jsf8Mrhh2YxIpRKeH9AWA4+lf4zdkgAEERjEuK8Lc8a+iNDy0UFOG2tBh/x5OGiyQVEm55Qf6KTvSMYWcbyoIitSR9Qp0m19CbO4qfEENL6quQ8Q85hr3E1QiKYbvcSN8FDJf6qUpvozyCP0PNdFVyrO8BhpF2/M8TFLZk/UeGs0GuoHCtKOw8Mpxrn8GrYenRvsMDw840XzCclh/uG4DhtKN8OtupefBO0K0g3tcBQ0dNcE0/X1C0okUFAb8MGKpbpONlwSUUor+uIuJXKTIcR4WClqQLMHRlw7Z8zfzpgVxV34adDjAcNulHsyPxm+6Sfbxo4xrKt2HyjYZ0FrYYDUGmdfi5wtTwq4qQXyTXsHfsg0t4vE5aiaFrwzo/13COKq37yooaqhnUPMCwj4YLkgm399vRakMxx/9HQTdbCtbG0Fuj4SHLCrUxnKBgAL1EdhtCWSJBQ1x01MZwTm5S+H5tDL/AY4gNb7UxXKAHFtXsNoT2SzT0MYtQw6by+8wDDZMsKcTg4eBMgBimNpRMcwwH4LHEFQQxHCalx/s6aDjIqoO4cFpi0dBuw939Ynm4UUG20Sw3vF8sD4uIZLeXPoc21PX11xDv0j4pGg6wiqHUPUwEDddZdRBLNDilaYxsrtOIY2aI+XCLIw0uG8Nl+fG+DhqOsrILGk6xVoHdCulc/X3mgYbbbANxAVUof599PUZD63ZmcIt0Bt3R4TF73BIsT/lVBPwyOYZkgegm9yeRDjRVBPwyaIgPXIfcjvf5J2lZsM/Qh8VQDzu8hHNbRAzrYzjroouIrh9ZbohTFMkw/CkJr0hrm3V7wKQHSDIUweVEDdlu69vRnvis4WVAXZGb1IqVBTUMoCgx20iG577gEWlPTK3Y5G7scaKJi6G9bChc8l0RRpUF/RKkXwYNv5ZCxscJjUhtWDo1Cgyxa/F21fAfkRXT7hNtHDz25KPOpqDXxLXmREKCg4d0Wbx4oGssvVxOe462kyFzr3z8ndO3Z8fC6QIxVAu8Slq8kpQe6NvsMG7NraeONxfKD/RdvO4DQ/onuGHHjPQC3c3WnXWeqHlRSitm89gQ3ytxIy09zvd5wnB2UAxt2FS7QQ2P2rl0HEmC/bKj/A3PGDYaa2poyZT7h+cMY2lqY8PG6J0dRr7MOxc0klppbejYu7F5ylDOGH07Fr8XyMw7z7CpTMDT4tOYJkHW7dOcJdFa7fd2bGgPvoAvqBGO/vmayOnizNaKI0FncKjx9YYbdVZzWiGubVFcwTOWanucNBWbM62dLTcqZMSh1nADhe4ULmffltdMHB8YkoF0h3dsYIeih20XmgKhRwbSZgPPegVdK/LimggokHLj9JQGcWANujbkxWLDDskU52JcB+vCwcGClVShYY/coz8zAjJZDx21QGcaGLBcnZiRVykE13oqLRT7A9PHm26B4YqcAr71TEln2oamJ0Z8ZYl0x9FTwNkpWqlMPDT8YWzDdaJl/Qk9bJjpJ9Tw9DAaXXzD0ZIs3ntdFAzgxZGeUus3W3GUBQp90A2PlBFbRzxrqGwQm60ID+IS5ii0TuqQR22iGArfYMVxdpuGmYdUCJbWSmoN1ei3ZQ8ymfu69psKyleooxoKx9zzJb1DNqRcB8w1aQ1qHWKpG7in2x42eKkBZYrgvP/Upj0JYqsuIeST7Jc/hMFpEVZ9gdN2Axq5q6kAa8Yao08+Y9YXfSnuUPdyiIV253Rr7PH1eUHXBbYIZ3gD7ZeNHU97+a+hCXP682LttxNjzydstfGKgveX6HsYusaWGOOc2zTN75uZ6H7E4CKqtupbnMRXmh8wuRVsHSjhPnhNkqaHITU3XZxoRkE2tQnDvrt79BPf52+2MkLH9Ga38c4PzjhOtE6eeKAm27AVnVLjic8HVw3eam/uyMIwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwDMMwTIn8B+eNUzLJtmTHAAAAAElFTkSuQmCC" 
                            alt=""
                            class="w-12 h-12 rounded-2xl">
                    </div>
                    <div class="">
                    <div class="">Official E. Msilanga</div>
                    <div class="font-light">Admin</div>
                    </div>
                </div>
                <div class="">
                    <div class="font-light text-sm">Just now</div>
                </div>
            </div>
            <div class="">
                <p class="text-sm">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis error est maxime magni accusamus perspiciatis rem nisi sit, architecto rerum. Eos quas cumque repudiandae iste cupiditate delectus voluptatem ducimus sunt!
                    <a href="" class="text-[#4C61A5]">Read more...</a>
                </p>
            </div>
            <div class="w-full">
            <img src="data:image/jpeg;base64,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" 
                    alt=""
                    class="h-full w-full rounded-lg">
            </div>
        </div>

    </div>
    </div>
</x-app>