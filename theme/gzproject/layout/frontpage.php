<?php echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes() ?>>
<head>
    <title><?php echo $PAGE->title ?></title>
    <?php echo $OUTPUT->standard_head_html() ?>
</head>
<body id="<?php p($PAGE->bodyid) ?>" class="<?php p($PAGE->bodyclasses) ?>">
<?php echo $OUTPUT->standard_top_of_body_html() ?>
<table id="page">
    <tr>
        <td colspan="3">
            <h1 class="headermain"><?php echo $PAGE->heading ?></h1>
            <div class="headermenu"><?php echo $OUTPUT->login_info(); echo $PAGE->headingmenu; ?></div>
        </td>
    </tr>
    <tr>
        <td>
            <?php echo $OUTPUT->blocks_for_region('side-pre') ?>
        </td>
        <td>
            <?php echo core_renderer::MAIN_CONTENT_TOKEN ?>
        </td>
        <td>
            <?php echo $OUTPUT->blocks_for_region('side-post') ?>
        </td>
    </tr>
    <tr>
        <td colspan="3">
            <p class="helplink"><?php echo page_doc_link(get_string('moodledocslink')) ?></p>
            <?php
            echo $OUTPUT->login_info();
            echo $OUTPUT->home_link();
            echo $OUTPUT->standard_footer_html();
            ?>
        </td>
    </tr>
</table>
<?php echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>

