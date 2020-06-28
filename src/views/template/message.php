<?php
$errors = [];

if ($exception) {
    $message = [
        'type' => 'error',
        'message' => $exception->getMessage()
    ];

    if (get_class($exception) == 'ValidationException') {
        $errors = $exception->getErrors();
    }
}

$typeErro = '';
if (isset($message) && $message['type'] === 'error') {
    $typeErro = 'danger';
} else {
    $typeErro = 'info';
}
?>

<?php if (isset($message)) : ?>
    <div class="my-3 alert alert-<?= $typeErro ?>" role="alert">
        <?= $message['message'] ?>
    </div>
<?php endif ?>