<?php for($i = 1; $i < 12; $i++): ?>
    <div class="row">
        <div class="col-xs-6 col-lg-<?php echo $i; ?>">
            <p class="p" style="background:rgba(0,0,0,0.05)">
                <span class="hidden-lg-up">6 / 12</span>
                <span class="hidden-md-down"><?php echo $i; ?> / 12</span>
            </p>
        </div>
        <div class="col-xs-6 col-lg-<?php echo 12 - $i; ?>">
            <p class="p" style="background:rgba(0,0,0,0.05)">
                <span class="hidden-lg-up">6 / 12</span>
                <span class="hidden-md-down"><?php echo 12 - $i; ?> / 12</span>
            </p>
        </div>
    </div>
<?php endfor; ?>