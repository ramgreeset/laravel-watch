<div class="flex flex-col grow gap-4">
    <h3 class="text-lg font-semibold text-right">18 lessons &middot; 2h 25min</h3>
    <div class="flex flex-col gap-4"></div>
    @foreach(range(1, 18) as $item)
        <a href="#" class="flex flex-col gap-2 p-4 rounded-md bg-gray-100 hover:bg-gray-200">
            <div class="flex gap-2 justify-between font-mono">
                <span class="text-sm">{{$item}}.</span>
                <span class="text-sm text-gray-600">5m 35sec</span>
            </div>
            <h3 class="font-semibold">Lorem ipsum dolor sit.</h3>
        </a>
    @endforeach
</div>
