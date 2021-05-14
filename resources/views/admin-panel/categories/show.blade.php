@extends('layouts.app')

@section('content')    

    <x-admin-panel.layout>
        <div class="w-full bg-white rounded-md border border-gray-200 py-4 px-4 dark:bg-gray-800 dark:border-gray-700">

            <div class="lg:grid lg:grid-cols-2 lg:gap-8">
                {{-- <div x-data="imageGallery()" x-init="loadImages()" class="">
                    <div x-show="activeImage" class="relative border border-gray-200 dark:border-gray-700 rounded-md">
                        <div @click="previous()" class="bg-white dark:bg-gray-700 absolute top-28 lg:top-44 -left-4 py-2 px-2 rounded-full shadow-sm border border-gray-200 dark:border-gray-700">
                            <x-icons.arrow-left size="26"></x-icons.arrow-left>
                        </div>
                        <div @click="next()" class="bg-white dark:bg-gray-700 absolute top-28 lg:top-44 -right-4 py-2 px-2 rounded-full shadow-sm border border-gray-200 dark:border-gray-700">
                            <x-icons.arrow-right size="26"></x-icons.arrow-right>
                        </div>
                        <img x-bind:src="activeImage.image_url" alt="" class="block h-64 lg:h-96 mx-auto select-none">
                    </div>
                </div> --}}

                <div>
                    <div class="">

                    </div>
                </div>

                    <div class="flex justify-between py-2 mt-4 lg:py-0 lg:mt-2">
                        <div class="flex items-center lg:text-2xl">

                        </div>
                    </div>
        
                    <div class="mt-4 lg:grid lg:grid-flow-cols lg:grid-cols-2">
                        
                    </div>

                    <div class="mt-4 text-base">

                    </div>
                </div>
            </div>

            <script>
                function imageGallery(images){
                    return{
                        images,
                        activeImage: '',
                        loadImages(){
                            this.activeImage = this.images[0];
                        },
                        next(){
                            if((this.images.indexOf(this.activeImage) + 1) == this.images.length){
                                this.activeImage = this.images[0];
                            }else{
                            this.activeImage = this.images[this.images.indexOf(this.activeImage) + 1];
                            }
                        },
                        previous(){
                            if(this.images.indexOf(this.activeImage) == 0){
                                this.activeImage = this.images[this.images.length - 1];
                            }else{
                                this.activeImage = this.images[this.images.indexOf(this.activeImage) - 1];
                            }
                        },
                    }
                }
            </script>

        </div>
    </x-admin-panel.layout>

@endsection