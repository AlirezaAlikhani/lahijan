<!doctype html>
<html dir="rtl">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.5/dist/flowbite.min.css" />
    @vite('resources/css/app.css')
</head>
<body>

<div class="p-10 rounded-lg overflow-x-auto relative  sm:rounded-lg">
    <table class="w-full text-sm text-right text-gray-500 ">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
        <tr>
            <th scope="col" class="py-3 px-6">
                عنوان خبر
            </th>
            <th scope="col" class="py-3 px-6">
                اطلاعیه خبر
            </th>
            <th scope="col" class="py-3 px-6">
                عکس
            </th>
            <th scope="col" class="py-3 px-6">
                تاریخ
            </th>
            <th scope="col" class="py-3 px-6">
                تعداد بازدید
            </th>

        </tr>
        </thead>
        <tbody>
        @foreach($newArchives as $newsArchive)
        <tr class="bg-white border-b hover:bg-gray-50 ">
            <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap">
                {{$newsArchive->title}}
            </th>
            <td class="py-4 px-6">
                {{$newsArchive->body}}
            </td>
            <td class="py-4 px-6">
                {{$newsArchive->image}}
            </td>
            <td class="py-4 px-6">
                {{$newsArchive->created_at}}
            </td>
            <td class="py-4 px-6">
                {{$newsArchive->view_count}}
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
    <button type="button" data-modal-toggle="authentication-modal" href=""
            class="btn items-center bg-green-600 text-[12px] text-white text-center hover:bg-green-500 rounded">
        افزودن کاربر دسته جمعی
    </button>

    <!-- Main modal -->
    <div id="authentication-modal" tabindex="-1" aria-hidden="true"
         class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
        <div class="relative w-full h-full max-w-md md:h-auto">
            <!-- Modal content -->
            <div class="relative bg-white rounded-lg shadow ">
                <button type="button"
                        class="absolute top-5 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center "
                        data-modal-toggle="authentication-modal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                              clip-rule="evenodd"></path>
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 mr-2 text-xl font-medium text-gray-900 ">انتخاب و افزودن کاربر
                        دسته جمعی</h3>
                    <form action="#" method="POST"
                          enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900">انتخاب
                                فایل اکسل</label>
                            @csrf
                            <div class="flex flex-col items-center justify-center w-full disabled">
                                <label for="dropzone-file"
                                       class="flex flex-col disabled items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50">
                                    <div class="flex flex-col items-center justify-center pt-5 pb-6 disabled">
                                        <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                             stroke="currentColor" viewBox="0 0 24 24"
                                             xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                        </svg>
                                        <p class="mb-2 text-sm text-gray-500"><span
                                                class="font-semibold">Click to upload</span> or drag and drop</p>
                                        <p class="text-xs text-gray-500">csv, xlsx</p>
                                    </div>
                                    <input id="dropzone-file" type="file" name="file" class="hidden disabled"/>
                                </label>
                                <button
                                    class="flex mt-2 w-full justify-center text-center  btn mr-1 btn-primary rounded">
                                    ایجاد
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>

<script src="https://unpkg.com/flowbite@1.5.5/dist/flowbite.js"></script>
