<?php if (empty($messages)): ?>
    <div>
        Пока что сообщений нет
    </div>
<?php else: ?>
    <div>
        <?php foreach ($messages as $message): ?>
            <div>
                <?php echo htmlspecialchars($message['name']); ?>
                <?php echo htmlspecialchars($message['email']); ?>
                <?php echo htmlspecialchars($message['title']); ?>
                <?php echo htmlspecialchars($message['content']); ?>
                <?php echo htmlspecialchars($message['created']); ?>
            </div>
        <?php endforeach; ?>
    </div>
<?php endif; ?>