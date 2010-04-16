<?php
// Set the title for the main template
$parent->context->page_title = $context->name.' | '.pear2\SimpleChannelFrontend\Main::$channel->name;
?>
<div class="package">
    <div class="grid_8 left">
        <h2>Package :: <?php echo $context->name; ?></h2>
        <p><em><?php echo $context->summary; ?></em></p>
        <p>
            <?php
            $description = preg_replace("|\&lt\;\?php(.*)\?\&gt\;|Use", "highlight_string('<?php'.html_entity_decode('\\1').'?>', true)", $context->description);
            echo nl2br($description);
            ?>
        </p>
        <?php
        if (file_exists(dirname(__FILE__)).'/../docs/'.$context->name) : ?>
        <h4><a href="<?php echo pear2\SimpleChannelFrontend\Main::getURL(); ?>docs/<?php $context->name; ?>/">API Documentation</a></h4>
        <?php
        endif;
        ?>
        <?php echo $savant->render($context->channel . '/' . $context->name . '-' . $context->version['release'], 'InstallInstructions.tpl.php'); ?>
    </div>
    <div class="grid_4 right releases">
        <h3>Releases</h3>
        <ul>
            <?php
             foreach ($context as $version => $release): ?>
            <li>
                <a href="<?php echo pear2\SimpleChannelFrontend\Main::getURL() . $context->name . '-' . $version; ?>"><?php echo $version; ?></a>
                <span class="stability"><?php echo $release['stability']; ?></span>
                <abbr class="releasedate" title="<?php echo $context->date.' '.$context->time; ?>"><?php echo $context->date; ?></abbr>
                <a class="download" href="<?php echo $context->getDownloadURL('.tgz'); ?>">Download</a>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>
