<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
      integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
    .thumbnail a>.img_min {
        height: 150px;
    }
</style>

<?php

$it = new FilesystemIterator(dirname(__FILE__) . '/uploads');
if (iterator_count($it) > 0) {
foreach ($it as $fileinfo) {
    $name = $fileinfo->getFilename();
    $lien =  'uploads/' . $name;

    echo '<div class="col-xs-6"><div class="thumbnail">
                <a href="' . $lien . '" class="">
                    <img src="' . $lien . '" alt="Image" class="img_min">
                </a>
                <p class="text-center">' . $name . '</p>
                <form action="delete.php" method="post" class="text-right">
                    <input type="hidden" name="url" value="' . $lien . '">
                    <input type="submit" value="Delete">
                </form>
             </div></div>';
}
}
?>

