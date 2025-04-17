<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9"
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">
    <?php foreach ($urls as $url): ?>
    <url>
        <loc><?php echo htmlspecialchars($url['loc']); ?></loc>
        <lastmod><?php echo $url['lastmod']; ?></lastmod>
        <changefreq><?php echo $url['changefreq']; ?></changefreq>
        <priority><?php echo $url['priority']; ?></priority>
        <?php if (isset($url['image'])): ?>
        <image:image>
            <image:loc><?php echo htmlspecialchars(base_url() . $url['image']['loc']); ?></image:loc>
            <?php if (isset($url['image']['caption'])): ?>
            <image:caption><?php echo htmlspecialchars($url['image']['caption']); ?></image:caption>
            <?php endif; ?>
            <?php if (isset($url['image']['title'])): ?>
            <image:title><?php echo htmlspecialchars($url['image']['title']); ?></image:title>
            <?php endif; ?>
        </image:image>
        <?php endif; ?>
    </url>
    <?php endforeach; ?>
</urlset>