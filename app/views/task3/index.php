<?php ob_start() ?>

<div class="container mt-5">
    <h1 class="mb-4">Комментарии</h1>

    <div id="comments-section" class="mb-5">
        <?php foreach ($comments as $comment): ?>
        <div class="card mb-3">
            <div class="card-body">
                <h6 class="card-subtitle mb-2"><strong><?= $comment['email'] ?></strong></h6>
                <p class="card-text"><?= $comment['description'] ?></p>
            </div>
        </div>
        <?php endforeach ?>
    </div>

    <h1 class="mb-4">Добавить комментарий</h1>

    <form method="POST" action="/index.php?page=task3&action=store" class="mb-3">
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input name="email" type="email" class="form-control" placeholder="Введите ваш email" required>
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Комментарий</label>
            <textarea name="description" class="form-control" rows="5" placeholder="Введите ваш комментарий" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Отправить</button>
    </form>
</div>

<?php $content = ob_get_clean() ?>
<?php include('app/views/layout.php') ?>