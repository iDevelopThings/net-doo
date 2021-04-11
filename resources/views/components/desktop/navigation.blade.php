<div class="hidden lg:flex lg:flex-col h-screen w-56 xl:w-64 2xl:w-72 fixed top-14 left-0 bg-white border-r border-gray-200">

    <div class="pt-6 pb-4 flex lg:pl-8 xl:pl-10 2xl:pl-12 border-b">
        <div class="flex hover:text-yellow-300">
            <a href="#" class="flex">
                <x-icons.moon size="18"></x-icons.moon>
            </a>
        </div>

        <div class="flex ml-4">
            <a href="#" class="hover:text-blue-600">
                <x-icons.bell size="18"></x-icons.bell>
            </a>
        </div>
    </div>

    <div class="w-full h-full lg:py-2 text-sm">
        <x-admin-panel.side-menu.item href="/" text="Narudžbe">
            <x-icons.truck size="18"></x-icons.truck>
        </x-admin-panel.side-menu.item>
    
        <x-admin-panel.side-menu.item href="/admin-panel/product" text="Proizvodi">
            <x-icons.tv size="18"></x-icons.tv>
        </x-admin-panel.side-menu.item>
    
        <x-admin-panel.side-menu.item href="/" text="Kategorije">
          <x-icons.list size="18"></x-icons.list>
        </x-admin-panel.side-menu.item>
    
        <x-admin-panel.side-menu.item href="/" text="Akcije u toku">
            <x-icons.precent size="18"></x-icons.precent>
        </x-admin-panel.side-menu.item>
        
        <form action="/logout" method="POST">
            @csrf
            @method('POST')
            <button type="submit" class="flex flex-row font-semibold py-4 lg:pl-8 xl:pl-10 2xl:pl-12 border-t border-b bg-white border-white hover:text-blue-600">
                <x-icons.logout size="18"></x-icons.logout>
                Logout
            </button>
        </form>
    </div>

</div>