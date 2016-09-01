<div class="pluginplate">

    <?php $post_meta = get_post_meta( get_the_ID() ); ?>
    <table class="pluginplate-data">
    <?php foreach ( $post_meta as $post_meta_key => $post_meta_value ) : ?>
        <tr>
            <td class="key"><?php echo $post_meta_key; ?></td>
            <td class="value"><?php print_r( $post_meta_value[0] ); ?></td>
        </tr>
    <?php endforeach; ?>
    </table>

</div><!-- #pluginplate -->

