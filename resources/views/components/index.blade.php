@extends('layout.app')

@section('title', 'Article')

@section('content')
        <div class="article-card">
            <article class="article-block">
                <h2>Kisah Kyai Melung</h2>
                <p>
                    Cerita atau legenda rakyat tentang desa Melung adanya Syech R. Abdurrahman (Kyai Melung) sebagai pendiri dan sesepuh desa Melung yang tidak tercatat dalam dokumen sejarah, namun diceritakan secara turun temurun. Diceritakan oleh para orang tua kepada anak-anaknya atau generasi penerusnya tidak lepas dari sejarah kadipaten Pasir Luhur, sebagai tempat persinggahan dan melintasan R. Kamandaka dan para prajurit Kadipaten Pasir Luhur.
                </p>
            </article>

            <article class="article-block">
                <h2>Wilayah Administratif</h2>
                <p>
                    Pada suatu saat para prajurit dalam melintasannya mendengar adanya ayam R. Kamandaka berkokok dikejauhan yang sangat keras bunyinya (<i>melung-melung</i>) disuatu wilayah maka sumber suara ayam berkokok itu ditandai sebagai daerah “Melung” yang dahulu masuk ke dalam wilayah Kecamatan Kebumen dan baru sekitar tahun 1955 dimasukkan ke dalam wilayah Kecamatan Kedungbanteng.
                </p>
            </article>

            <article class="article-block">
                <h2>Versi R. Singo Guna</h2>
                <p>
                    Lalu versi kedua adalah dengan adanya R. Singo Guna yang merupakan keturunan dari R. Honggo Wongso putra dari R. Klapa Aking atau R. Kolopaking. R. Honggo Wangsa menurunkan R. Niti Menggolo kemudian R. Niti Menggolo menurunkan anak bernama R. Kalioso (Syech Abdul Djalal) lalu menurunan anak bernama R. Singo Guna yang hidup di desa Melung.
                    <br>
                    <br>
                    Setelah itu masuk lagi keturunan Kakak R. Singo Guna yaitu R. Suro Handoko dan R. Suro Menggolo. Putra R. Suro Handoko yang bernama R. Sagi (R. Wirya Dikrama) memimpin desa Melung.
                </p>
            </article>
        </div>
        <div class="comment-card">
            <div class="comment-title">
                <span>💬</span>
                <h2>Tulis Komentar</h2>
            </div>

            @if (session('success'))
                <p role="status">{{ session('success') }}</p>
            @endif

            @if ($errors->any())
                <ul role="alert">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif

            <form class="comment-form" action="{{ route('comments.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="comment">Komentar Anda <span>*</span></label>
                    <textarea
                        id="comment"
                        name="comment"
                        placeholder="Tulis tanggapan atau komentar..."
                        required
                        {{ old('comment') }}
                    ></textarea>
                </div>

                <div class="comment-user-info">
                    <div class="form-group">
                        <label for="name">Nama Pengirim <span>*</span></label>
                        <input
                            type="text"
                            id="name"
                            name="nama"
                            placeholder="Nama Anda"
                            required
                            value="{{ old('nama') }}"
                        >
                    </div>

                    <div class="form-group">
                        <label for="phone">No. Telepon / WA <span>*</span></label>
                        <input
                            type="tel"
                            id="phone"
                            name="phone"
                            placeholder="Nomor Telepon"
                            required
                            value="{{ old('phone') }}"
                        >
                    </div>
                </div>

                <button type="submit" class="comment-button">
                    Kirim Komentar
                </button>
            </form>
        </div>
@endsection()