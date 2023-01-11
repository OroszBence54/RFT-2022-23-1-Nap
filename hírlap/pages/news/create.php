<?php
require_once ('libs/News.php');
require_once('libs/FormValidator.php');

$val = new FormValidator();
$errors = [];

if (!(User::isLogged() && User::can('Hírek szerkesztése'))) {
    header('location: '.Route::getRoute('/news'));
    exit;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $target_dir = "././public/images/news/";
    $target_file = $target_dir.basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
  
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        $uploadOk = 1;
    } else {
        $errors = array_merge($errors, ['Hiba a fáljfeltöltéssel.']);
        $uploadOk = 0;
    }
    if (file_exists($target_file)) {
        $errors = array_merge($errors, ['Hiba: Ilyen fájl már létezik.']);
        $uploadOk = 0;
      }

    if ($uploadOk == 0) {
        $errors = array_merge($errors, ['Hiba a fáljfeltöltéssel.']);
      } else {
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            $input = [
                'title' => trim($_POST['title']),
                'description' => trim($_POST['description']),
                'type' => trim($_POST['type']),
                'image' => basename( $_FILES["image"]["name"]),
            ];

            $val->name('title')->value($input['title'])->required();
            $val->name('description')->value($input['description'])->required();

            if ($val->isSuccess()) {
                News::createNews($input);
                header('location: '.Route::getRoute('/news'));
                exit;
            }
            if (count((array)$val->getErrors()) > 0)
                $errors = array_merge($errors, $val->getErrors());

        } else {
            $errors = array_merge($errors, ['Hiba a fáljfeltöltéssel.']);
        }
      }
}

?>
<div class="container py-4">
    <h1 class="fw-bold mb-4">Hír létrehozása</h1>
    <form method="post" action="<?php echo Route::getRoute('/news/create')?>" enctype="multipart/form-data">
        <?php if(count((array)$errors) > 0) {?>
            <div class="alert alert-danger">
                <?php foreach($errors as $error) {?>
                    <li><?php echo $error ?></li>
                <?php }?>
            </div>
        <?php } ?>
        <div class="row">
            <div class="col-12 col-md-8 col-lg-6">
                <div class="mb-3">
                    <label for="title" class="form-label">Cím:</label>
                    <input type="text" class="form-control" id="title" name="title" required>
                </div>
                <div class="mb-3">
                    <label for="type" class="form-label">Kategória:</label>
                    <select class="form-select" id="type" name="type">
                        <?php foreach (News::getTypes() as $type):?>
                            <option value="<?php echo $type['id']?>"><?php echo $type['name']?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Leírás:</label>
                    <textarea class="form-control" rows="10" cols="50" id="description" name="description" required></textarea>
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Kép:</label>
                    <input class="form-control" type="file" id="image" name="image" required>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-success me-2">Létrehozás</button>
    </form>
</div>