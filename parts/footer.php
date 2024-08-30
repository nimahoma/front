<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
                <?php dynamic_sidebar( 'footer-1' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php if ( is_active_sidebar( 'footer-2' ) ) : ?>
                <?php dynamic_sidebar( 'footer-2' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php if ( is_active_sidebar( 'footer-3' ) ) : ?>
                <?php dynamic_sidebar( 'footer-3' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-3">
                <?php if ( is_active_sidebar( 'footer-4' ) ) : ?>
                <?php dynamic_sidebar( 'footer-4' ); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</footer>