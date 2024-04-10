<?php require 'views/components/head.php' ?>
<?php require 'views/components/navbar.php' ?>

<form method='POST'>
        <label>
            <span>Title: </span>
            <input name='title' placeholder='title' value='<?= $_POST['title'] ?? ''?>'/>
            <?php if(isset($error['title'])) { ?>
            <p><?= $error['title'] ?></p>
            <?php }?>
        </label>
        <label>
            <span>Category ID: </span>
            <select name='category_id'>
                <option value='1'>Sport</option>
                <option value='2'>music</option>
                <option value='3'>food</option>
            </select>
        </label>
        <button>Create post</button>
    </form>
<?php ?>

<?php require 'views/components/footer.php';