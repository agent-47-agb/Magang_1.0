<?php $c = $site['contact'] ?? []; ?>
<section id="kontak" class="section section-alt">
  <div class="container">
    <h2 class="section-title reveal"><?= e($c['title'] ?? 'Kirim Pesan') ?></h2>
    <p class="section-subtitle reveal"><?= e($c['subtitle'] ?? 'Punya pertanyaan atau ide? Isi form di bawah.') ?></p>

    <form class="contact-form" id="contact-form" novalidate>
      <div class="form-grid">
        <div class="form-field">
          <label for="f-nama">Nama</label>
          <input type="text" id="f-nama" name="nama" placeholder="Nama Anda" required>
        </div>
        <div class="form-field">
          <label for="f-email">Email <span class="optional">(opsional)</span></label>
          <input type="email" id="f-email" name="email" placeholder="nama@contoh.com">
        </div>
      </div>
      <div class="form-field">
        <label for="f-pesan">Pesan</label>
        <textarea id="f-pesan" name="pesan" rows="4" placeholder="Tulis pesan Anda di sini…" required></textarea>
      </div>
      <button type="submit" class="btn btn-primary" id="contact-submit">Kirim Pesan</button>
      <p class="form-status" id="form-status" role="status" aria-live="polite"></p>
    </form>
  </div>
</section>