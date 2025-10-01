<footer class="footer">
    <div class="container">
        <p>&copy; <?php echo date('Y'); ?> Atholl Estates Inspired. All rights reserved.</p>
        <?php if (is_active_sidebar('footer-widget')) : ?>
            <div class="footer-widgets">
                <?php dynamic_sidebar('footer-widget'); ?>
            </div>
        <?php endif; ?>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
