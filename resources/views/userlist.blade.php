<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          extend: {
            colors: {
              clifford: '#da373d',
            }
          }
        }
      }
    </script>
  
 
    <title>Document</title>
</head>
<body>
    @include('navbar')
  
<div class="sm:container mx-auto">
    <h1 class=" text-4xl font-extrabold leading-none tracking-tight text-gray-900 md:text-5xl lg:text-6xl dark:text-white mb-11">List des users</h1>

    <div class="relative overflow-x-auto">
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        ID
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Avatar
                    </th>
                 
                   
                    <th scope="col" class="px-6 py-3">
                        NAme
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Email
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
    
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $users)
            
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        {{$users['id']}}
                    </th>
                    <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                        <img class="w-10 h-10 rounded-full" src="{{$users['image']}}" alt="Jese image">
                        <div class="ps-3">
                            <div class="text-base font-semibold"> {{$users['name']}}</div>
                            <div class="font-normal text-gray-500"> {{$users['email']}}</div>
                        </div>  
                    </th>
                 
                 
                    <td class="px-6 py-4">
                        {{$users['name']}}
                    </td>
                    <td class="px-6 py-4">
                        {{$users['email']}}
                    </td>
                    <td>
                        @if ($users['status']==true)
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-2"></div> Online
                        </div>
                        @else
                        
                        <div class="flex items-center">
                            <div class="h-2.5 w-2.5 rounded-full bg-red-500 me-2"></div> Offline
                        </div>
                        
                     
                      @endif
                    </td>
                </tr>
                @endforeach
              
            </tbody>
        </table>
    </div>
</div>



   
