@extends('layouts.main')

@section('content')
    <section class="bg-white dark:bg-gray-900 min-h-screen flex justify-center items-center">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1
                class="mb-4 text-xl font-extrabold tracking-tight leading-none text-gray-900 md:text-5xl lg:text-6xl dark:text-white">
                Selamat Datang di Sistem Absensi Modern untuk Perusahaan Force Light
            </h1>
            <p class="mb-8 text3xl font-normal text-gray-500 lg:text-xl sm:px-16 lg:px-48 dark:text-gray-400">
                Bersama kami, mengelola absensi karyawan jadi lebih mudah dan efisien. Dengan teknologi terkini, kami
                memastikan setiap langkah absensi diatur dengan presisi dan keamanan terjamin. Nikmati kemudahan dalam
                mengelola waktu kerja dan produktivitas tim Anda.</p>

                @if (!Auth::check())
                <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0">
                    <a href="{{ route('login') }}"
                        class="link link-hover inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
                        Login Sekarang
                        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            fill="none" viewBox="0 0 14 10">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M1 5h12m0 0L9 1m4 4L9 9" />
                        </svg>
                    </a>
                </div>

                @else
                <a href="">
                    <div class="btn btn-outline btn-info text-sm">Absen Now!</div>
                </a>
                @endif
        </div>
    </section>
@endsection
