<div class="col-md-8">
    <?php
    global $fauzanredux;
    ?>
    <?php if ($fauzanredux['advmiddle-switchbutton']) { ?>
        <div class="flex">
            <div class="app-card-adv-middle">
                <div class="app-card-adv-middle__images">
                    <a href="<?php echo $fauzanredux['advmiddle-url'] ?>" target="_blank">
                        <img src="<?php echo $fauzanredux['advmiddle-image']['url']; ?>">
                    </a>
                </div>
            </div>
        </div>
    <?php } ?>
</div>