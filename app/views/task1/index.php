<?php ob_start() ?>
<div class="container">
    <div class="row align-items-center">
        <table class="table table-striped mt-5">
            <thead>
                <tr>
                    <th>#</th>
                    <?php foreach ($subjects as $subject) : ?>
                        <th><?= $subject ?></th>
                    <?php endforeach ?>
                </tr>
            </thead>
            <tbody>

                
                    <?php foreach ($studentSubjectScore as $student => $score): ?>
                    <tr>
                        <td><?= $student ?></td>
                        <?php foreach($subjects as $subject): ?>
                        <td><?= isset($score[$subject]) ? $score[$subject] : '' ?></td>
                        <?php endforeach ?>
                    </tr>
                    <?php endforeach ?>
                

            </tbody>
        </table>
    </div>
</div>

<?php $content = ob_get_clean() ?>
<?php include('app/views/layout.php') ?>