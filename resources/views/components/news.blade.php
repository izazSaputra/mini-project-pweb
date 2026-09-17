@extends('layout.app')

@section('title', 'News')
@section('heading', 'BERITA DESA MELUNG')

@section('content')
        <section class="news-section">
            <div class="news-heading">
                <div>
                    <h2>Seluruh Berita Desa</h2>
                    <p>Publikasi dan berita terbaru dari Desa Melung.</p>
                </div>
                <span>3 Berita</span>
            </div>

            <div class="news-list">
                <article class="news-card">
                    <img src="https://images.unsplash.com/photo-1529107386315-e1a2ed48a620?auto=format&fit=crop&w=800&q=80" alt="Kegiatan warga desa">
                    <div class="news-content">
                        <small>02 September 2026</small>
                        <h3>Kemeriahan Perayaan HUT RI di Desa Melung</h3>
                        <a href="#">Baca →</a>
                    </div>
                </article>

                <article class="news-card">
                    <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=800&q=80" alt="Kebersamaan masyarakat">
                    <div class="news-content">
                        <small>18 Agustus 2026</small>
                        <h3>Warga Melung Gelar Kerja Bakti Bersama</h3>
                        <a href="#">Baca →</a>
                    </div>
                </article>

                <article class="news-card">
                    <img src="https://images.unsplash.com/photo-1577962917302-cd874c4e31d2?auto=format&fit=crop&w=800&q=80" alt="Pelayanan administrasi desa">
                    <div class="news-content">
                        <small>07 Juli 2026</small>
                        <h3>Informasi Pelayanan Administrasi Desa</h3>
                        <a href="#">Baca →</a>
                    </div>
                </article>
            </div>
        </section>
@endsection
