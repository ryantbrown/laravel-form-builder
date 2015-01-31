<?php if(!$options['is_first_row'] || $options['number_of_fields'] == 0): ?>

    </div>

<?php endif; ?>
<?php if($options['number_of_fields'] > 0): ?>

    <div class="<?=num2string($options['number_of_fields']) ?> fields">

<?php endif; ?>