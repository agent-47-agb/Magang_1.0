<?php $site = $site ?? site_content(); ?>
  </main>

  <footer class="site-footer">
    <div class="container footer-wrap">
      <div class="footer-brand">
        <span class="brand-logo" aria-hidden="true">⌘</span>
        <strong><?= e($site['site']['name'] ?? 'Magang 1.0') ?></strong>
      </div>
      <nav class="footer-nav" aria-label="Navigasi footer">
        <?php foreach (($site['menu'] ?? []) as $item): ?>
          <a href="<?= e($item['href'] ?? '#') ?>"><?= e($item['label'] ?? '') ?></a>
        <?php endforeach; ?>
      </nav>
      <p class="footer-copy"><?= e($site['footer']['copyright'] ?? '© ' . date('Y') . ' ' . ($site['site']['name'] ?? 'Magang 1.0')) ?></p>
    </div>
  </footer>

  <script src="js/main.js" defer></script>
</body>
</html>