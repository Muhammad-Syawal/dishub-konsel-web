@extends('dashboard.layouts.app')

{{-- Title --}}
@section('title')
    Post
@endsection

{{-- Head --}}
@section('head')
@endsection

{{-- Container --}}
@section('container')
    <section>
        <div class="flex items-center">
            <i class="bx bxs-news mr-4 text-3xl"></i>
            <h1 class="font-bold text-2xl">POST</h1>
        </div>
        <hr class="border-2 border-yellow-700 rounded-full mt-2">
    </section>

    <section class="mt-10">
        <table class="table-auto w-full mt-7">
            <thead>
                <tr class="text-center bg-yellow-400 font-semibold">
                    <td class="border border-black py-2 w-12">No</td>
                    <td class="border border-black py-2">Judul</td>
                    <td class="border border-black py-2">Tanggal</td>
                    <td class="border border-black py-2 w-56">Aksi</td>
                </tr>
            </thead>

            <tbody>
                <tr class="hover:bg-yellow-100">
                    <td class="border border-black py-2 text-center">1</td>
                    <td class="border border-black py-2 text-center">Bakti Sosial</td>
                    <td class="border border-black py-2 text-center">29 Agustus 2023</td>
                    <td class="border border-black py-2 text-center">
                        <button
                            class="rounded-md bg-green-400 hover:bg-green-500 active:bg-green-600 active:text-green-50 duration-200 w-16 py-1">Edit</button>
                        <button
                            class="rounded-md bg-red-400 hover:bg-red-500 active:bg-red-600 active:text-red-50 duration-200 w-16 py-1">Hapus</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </section>

    <section class="fixed bottom-5 right-10">
        <button
            class="w-16 h-16 text-3xl bg-yellow-400 hover:bg-yellow-500 active:bg-yellow-600 active:text-slate-100 duration-200 rounded-full">
            <i class="fa-solid fa-plus"></i>
        </button>
    </section>
@endsection