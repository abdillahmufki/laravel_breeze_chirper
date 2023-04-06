<div class="card w-[23rem] h-96 bg-base-100 shadow-md">
    {{-- transition-all duration-300 ease-in-out transform hover:scale-105 hover:shadow-lg --}}
    <figure>
        <img class="hover:scale-125 transition-all duration-500 cursor-pointer" src={{ $src }} alt="Shoes" />
    </figure>
    <div class="card-body">
        <h2 class="card-title">
            {{ $title }}
            <div class="badge badge-secondary">{{ $badge }}</div>
        </h2>
        <p>{{ $content }}</p>
        <div class="card-actions justify-end">
            <div class="badge badge-outline">{{ $type }}</div>
            <div class="badge badge-outline">{{ $products }}</div>
        </div>
    </div>
</div>
