<?php
function demoBlock($name, $title) {
    echo '<h1 class="h1">';
    echo '<a name="' . htmlspecialchars($name) . '" href="#' . htmlspecialchars($name) . '" class="a"' .
        ' title="Permalink">§</a> ' . htmlspecialchars($title);
    echo '</h1>';
    echo '<div class="demo-block">';
    echo '<div class="before"></div>';
    echo '<div class="content">';
    require('_' . $name . '.php');
    echo '</div>';
    echo '<div class="after"></div>';
    echo '</div>';
    echo '<p class="p text-align-right"><a href="#" class="a text-transform-uppercase">' .
        '<small class="small">top</small></a></p>';
    echo '<p class="p">&nbsp;</p>';
    echo '<p class="p">&nbsp;</p>';
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- page title -->
    <title>Bottle Based Project Skeleton</title>

    <!-- bootstrap global styles -->
    <link rel="stylesheet" href="lib/styles/bootstrap.css">

    <!-- init polymer -->
    <script src="lib/scripts/main.min.js"></script>

    <!-- TODO remove -->
    <!-- syntax highlight -->
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/styles/github.min.css">
    <script src="//cdnjs.cloudflare.com/ajax/libs/highlight.js/9.5.0/highlight.min.js"></script>
</head>
<body unresolved>

<p class="p">&nbsp;</p>

<div class="container">
    <table>
        <tbody>
        <tr>
            <td class="white-space-nowrap">
                <h1 class="h1">Bottle</h1>
                <h2 class="h5">Modular SCSS Toolkit</h2>
            </td>
            <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
            <td style="width:100%;">
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <hr class="hr" />
            </td>
        </tr>
        </tbody>
    </table>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
</div>

<div class="container-max-md">
    <?php
    demoBlock('typography-heading', 'Typography / Headings');
    demoBlock('typography-paragraph', 'Typography / Paragraph');
    demoBlock('typography-cite', 'Typography / Citation');
    demoBlock('typography-blockquote', 'Typography / Blockquote');
    demoBlock('typography-pre', 'Typography / Preformatted');
    demoBlock('typography-hr', 'Typography / Horizontal Rule');
    demoBlock('typography-a', 'Typography / Anchor');
    demoBlock('typography-button', 'Typography / Button');
    demoBlock('typography-label', 'Typography / Label');
    demoBlock('typography-strong', 'Typography / Strong');
    demoBlock('typography-em', 'Typography / Italic');
    demoBlock('typography-q', 'Typography / Quoted');
    demoBlock('typography-del', 'Typography / Deleted');
    demoBlock('typography-small', 'Typography / Small');
    demoBlock('typography-mark', 'Typography / Mark');
    demoBlock('typography-abbr', 'Typography / Abbreviation');
    demoBlock('typography-code', 'Typography / Code');
    demoBlock('typography-kbd', 'Typography / Keyboard');
    demoBlock('typography-dl', 'Typography / Definition List');
    demoBlock('typography-ol', 'Typography / Ordered List');
    demoBlock('typography-ul', 'Typography / Unordered List');
    demoBlock('typography-ol-ul', 'Typography / Mixed List');
    demoBlock('typography-table', 'Typography / Table');
    demoBlock('nav', 'Navigation');
    demoBlock('form', 'Form & Form Elements');
    demoBlock('utilities-text-decoration', 'Utilities / Text Decoration');
    demoBlock('utilities-text-transform', 'Utilities / Text Transform');
    demoBlock('utilities-align', 'Utilities / Alignment');
    demoBlock('grid-containers', 'Grid / Containers');
    demoBlock('grid-columns', 'Grid / Columns');
    demoBlock('clearfix', 'Clearfix');
    demoBlock('pulls', 'Pulls');
    demoBlock('visibility', 'Visibility');
    demoBlock('display', 'Display');
    demoBlock('position', 'Positioning');
    ?>
</div>

</body>
</html>