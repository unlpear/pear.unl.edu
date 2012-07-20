<?php

if (isset($context->options['packageVersion'])) {
    $releaseRoot = $context->package->name . '-'
        . $context->package->version['release'];
} else {
    $releaseRoot = $context->package->name;
}

$packageURL = $frontend->getURL() . $context->package->name;
$releaseURL = $frontend->getURL() . $releaseRoot;

// Set the page title
if (isset($context->options['file'])) {
    $parent->context->page_title = $context->options['file'] . ' - '
        . $releaseRoot . ' - ' . $frontend->title;
} else {
    $parent->context->page_title = 'Files - '
        . $releaseRoot . ' - ' . $frontend->title;
}

?>
<div class="file-title pearbox">
    <div class="pearbox-header">
        <h2>
            <?php
            echo '<a href="' . $packageURL . '">' . $context->package->name . '</a>';

            if (isset($context->options['packageVersion'])) {
                echo '-<a href="' . $releaseURL . '">' . $context->package->version['release'] . '</a>';
            }

            if (isset($context->options['file'])) {
                echo ' › ';
                echo '<span>' . $context->options['file'] . '</span>';
            }
            ?>
        </h2>
    </div>
</div>

<div class="file-list pearbox">
<div class="pearbox-content">
<?php

$releaseFile = $context->package->name . '-'
    . $context->package->version['release'] . '.tgz';

$fileCount      = 0;
$directoryCount = 0;

$traverseFiles = function(
    \RecursiveIterator $node
) use (
    &$traverseFiles,
    $context,
    $releaseFile,
    $releaseRoot,
    &$fileCount,
    &$directoryCount,
    $frontend
) {
    echo '<ul>';
    foreach ($node as $file) {
        echo '<li>';

        $filename = basename($file);

        if ($node->hasChildren()) {
            $directoryCount++;
            echo $filename . '/';
            $traverseFiles($node->getChildren());
        } else {
            $fileCount++;

            $filePath = substr(
                $file,
                strpos($file, $releaseFile) + strlen($releaseFile) + 1
            );

            $fileURL = $frontend->getURL()
                . $releaseRoot . '/files/' . $filePath;

            echo '<a href="' . htmlspecialchars($fileURL) . '">';
            echo $filename;
            echo '</a>';
        }

        echo '</li>';
    }
    echo '</ul>';
};

$node = $context->getRaw('releaseFile');
$traverseFiles($node);

?>
</div>
</div>
<?php

if (isset($context->file)) {
    echo' <div class="file-content">';
    echo '<div class="file-line-numbers">';
    $count = 0;
    foreach ($context->file as $line) {
        $count++;
        $class = ($count % 2 === 0) ? 'even' : 'odd';
        $line = str_replace(' ', '&nbsp;', $line);
        echo '<div class=' . $class . '>' . $count . '</div>';
    }
    echo '</div>';

    echo '<pre class="file-lines">';
    echo '<code>';
    $count = 0;
    foreach ($context->file as $line) {
        $count++;
        $class = ($count % 2 === 0) ? 'even' : 'odd';
        $line = str_replace(' ', '&nbsp;', $line);
        $line = str_replace("\t", '&nbsp;&nbsp;&nbsp;&nbsp;', $line);
/*        if (preg_match('/^\s+$/', $line) === 1) {
            $line = '&nbsp;';
        }*/
        echo $line;
    }
    echo '</code>';
    echo '</pre>';

    echo '<div class="file-end">EOF</div>';
    echo '<script>hljs.initHighlightingOnLoad();</script>';
    echo '</div>';
} else {
    echo '<div class="file-info">';
    printf(
        '<strong>%s</strong> files in <strong>%s</strong> directories. ',
        $fileCount,
        $directoryCount
    );
    echo 'Select a file to view its contents.';
    echo '</div>';
}

?>
