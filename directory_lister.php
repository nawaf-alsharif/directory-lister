<?php
if (isset($_POST['directory'])) {
    // الحصول على المدخل من المستخدم
    $directory = escapeshellarg($_POST['directory']);  // تطهير المدخل لتجنب الثغرات الأمنية

    // بناء الأمر باستخدام المدخل
    $command = "ls -l " . $directory;

    // تنفيذ الأمر باستخدام دالة system()
     system($command);
}
?>

<form method="POST">
    <label for="directory">أدخل مسار المجلد:</label>
    <input type="text" id="directory" name="directory" required>
    <button type="submit">تنفيذ</button>
</form>
