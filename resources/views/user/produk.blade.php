@extends('layouts.app')

@section('title', 'Produk - ' . $module->name)

@section('content')
<div class="container">
    @php $firstObject = $module->objects->first(); @endphp

    @if ($module && $firstObject)
    <div style="position: relative; width: 100%; height: 400px; margin-bottom: 60px;">
        <img src="{{ asset('storage/' . $module->image) }}" alt="Module Image" style="width: 100%; height: 100%; object-fit: cover; border-radius: 12px;">
        <div style="position: absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); color: white; background-color: rgba(0,0,0,0.4); padding: 20px 30px; border-radius: 10px;">
            <h2 style="font-size: 36px; font-weight: bold;">{{ $firstObject->object_name }}</h2>
        </div>
    </div>
    @endif

    <div style="display: flex; gap: 40px;">
        {{-- Sidebar List Object --}}
        <div style="flex: 1;">
            <h4 style="font-size: 18px; margin-bottom: 10px; color: #0f172a;">{{ $module->name }}</h4>
            <ul id="object-list" style="display: flex; flex-direction: column; gap: 12px; padding: 0; margin: 0;">
                @foreach ($module->objects as $object)
                    <li style="list-style: none;">
                        <a href="javascript:void(0);"
                           class="object-link"
                           data-id="{{ $object->id }}"
                           style="
                                display: block;
                                padding: 14px 18px;
                                background-color: #f8fafc;
                                border: 1px solid #e2e8f0;
                                border-radius: 12px;
                                box-shadow: 0 2px 4px rgba(0,0,0,0.04);
                                color: #1e293b;
                                font-size: 15px;
                                font-weight: 500;
                                text-decoration: none;
                                transition: all 0.3s ease-in-out;
                           "
                           onmouseover="this.style.backgroundColor='#e0f2fe'; this.style.borderColor='#38bdf8'; this.style.color='#0284c7';"
                           onmouseout="this.style.backgroundColor='#f8fafc'; this.style.borderColor='#e2e8f0'; this.style.color='#1e293b';"
                        >
                            {{ $object->object_name }}
                        </a>
                    </li>
                @endforeach
            </ul>
            
        </div>

        {{-- Konten Detail --}}
        <div style="flex: 2;">
            @foreach ($module->objects as $object)
                <div class="object-content" data-id="{{ $object->id }}" style="display: none; margin-bottom: 60px;">
                    <h3 style="font-size: 22px; margin-bottom: 10px; color: #1e293b;">{{ $object->object_name }}</h3>
                    @if ($object->image)
                        <img src="{{ asset('storage/' . $object->image) }}" alt="Object Image" style="width: 100%; max-width: 600px; border-radius: 10px; margin-bottom: 12px;">
                    @endif
                    <p style="color: #475569;">{{ $object->object_description }}</p>
                </div>
            @endforeach
        </div>
    </div>
</div>

{{-- JavaScript logic --}}
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const links = document.querySelectorAll('.object-link');
        const contents = document.querySelectorAll('.object-content');

        // Tampilkan konten pertama
        if (contents.length > 0) {
            contents[0].style.display = 'block';
        }

        links.forEach(link => {
            link.addEventListener('click', () => {
                const id = link.getAttribute('data-id');

                // Sembunyikan semua
                contents.forEach(content => content.style.display = 'none');

                // Tampilkan yang sesuai
                const showContent = document.querySelector(`.object-content[data-id="${id}"]`);
                if (showContent) {
                    showContent.style.display = 'block';
                }
            });
        });
    });
</script>
@endsection
