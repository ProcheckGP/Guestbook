<?php if (empty($messages)): ?>
    <div>
        Пока что сообщений нет
    </div>
<?php else: ?>
    <div>
        <?php foreach ($messages as $message): ?>
            <div class="container form-output-message">
                <div class="row form-output-message-header">
                    <div class="col-6">
                        <span class="form-output-message-name"><?php echo htmlspecialchars($message['name']); ?></span>
                        <span class="form-output-message-email"><?php echo htmlspecialchars($message['email']); ?></span>
                    </div>
                    <div class="col-6 form-output-message-time align-left">
                        <?php echo htmlspecialchars($message['created']); ?>
                    </div>
                </div>
                <div>
                    <span>Тема: "<?php echo htmlspecialchars($message['title']); ?>"</span>
                </div>
                <div>
                    <?php echo htmlspecialchars($message['content']); ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>