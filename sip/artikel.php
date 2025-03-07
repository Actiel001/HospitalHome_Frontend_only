<?php
require_once 'konek.php'; 
$id = $_GET['id'];

// Ambil data artikel dari database
$result = $conn->query("SELECT * FROM articles WHERE id = $id");
$article = $result->fetch_assoc();

// Update jumlah tampilan
$conn->query("UPDATE articles SET views = views + 1 WHERE id = $id");

if ($article): ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title><?php echo $article['title']; ?></title>
    </head>
    <body>
        <h1><?php echo $article['title']; ?></h1>
        <img src="<?php echo $article['image_url']; ?>" alt="Artikel">
        <p><?php echo $article['content']; ?></p>
    </body>
    </html>
<?php else: ?>
    <p>Artikel tidak ditemukan.</p>
<?php endif;

$conn->close(); // Tutup koneksi database
?>

?>
