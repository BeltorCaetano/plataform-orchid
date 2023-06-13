@extends('layouts.app')
@section('section')
<header class="bg-white shadow">
    <div class="mx-auto max-w-7xl py-6 px-4 sm:px-6 lg:px-8">
      <h1 class="text-3xl font-bold tracking-tight text-gray-900">My Profile</h1>
    </div>
  </header>
  <main class="bg-gray-100 flex-1 w-full">
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8 ">
   
     <section class="max-w-4xl p-6 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800">
     
  
      <form  action="{{route("user-password.update")}}" method="POST">
          @method("PUT")
          @csrf
          <div class="grid grid-cols-1 gap-6 mt-4 sm:grid-cols-2">
              <div>
                  <label class="text-gray-700 dark:text-gray-200" for="name">Current Password</label>
                  <input id="name" name="current_password"  type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
              </div>
  
              <div>
                  <label class="text-gray-700 dark:text-gray-200" for="email">New Password</label>
                  <input id="email" name="password"  type="password" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-200 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-400 focus:ring-blue-300 focus:ring-opacity-40 dark:focus:border-blue-300 focus:outline-none focus:ring">
              </div>
  
           
  

          </div>
  
          <div class="flex justify-end mt-6">
              <button class="px-8 py-2.5 leading-5 text-white transition-colors duration-300 transform bg-gray-700 rounded-md hover:bg-gray-600 focus:outline-none focus:bg-gray-600">Save</button>
          </div>
      </form>
  </section>
    </div>
  </main>
@endsection