<section>
    <div class="container px-4 py-2">
        <h2 class="text-5xl text-gray-400 text-center mb-20">Latest Courses</h2>
        <div class="flex justify-between gap-2">

            @foreach(range(0, 3) as $i)
                <a class="bg-yellow-300 rounded-md hover:bg-yellow-400" href={{route('course')}}>
                    <article class="px-4 py-2">
                        <header>
                            <h2 class="font-semibold text-xl mb-2">Lorem ipsum dolor sit.</h2>
                        </header>
                        <p class="font-normal">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                            Cupiditate
                            debitis earum hic
                            impedit molestias, quasi rem repellendus sequi soluta veniam!
                        </p>
                        <footer class="flex flex-col items-end font-semibold">
                            <div>
                                <div class="flex items-center gap-2">
                                    <x-icon name="film"/>
                                    <span>23 lessons</span>
                                </div>
                                <div class="flex items-center gap-2">
                                    <x-icon name="clock"/>
                                    <span>2h 30m</span>
                                </div>
                            </div>
                        </footer>
                    </article>
                </a>
            @endforeach
        </div>
    </div>
</section>
