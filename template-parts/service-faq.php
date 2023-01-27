<?php
    $count = 0;
    while( $count <= 8 ):
    $count++ ;
?>
<?php if(get_field("q-{$count}") && get_field("a-{$count}")) :?>
    <li class="service-nav-item accordion wow fadeInUp">
        <dt class="accordion-head">
            <p><?php echo nl2br(get_field("q-{$count}")); ?></p>
            <span class="accordion-icon"></span>
        </dt>
        <dd class="accordion-body">
            <div class="accordion-body-in">
            <?php echo nl2br(get_field("a-{$count}")); ?>
            </div><!-- /.accordion-body-in -->
        </dd>
    </li>
<?php endif; ?>
<?php endwhile; ?>