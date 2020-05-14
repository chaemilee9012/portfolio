<!-- header -->

<?
  include_once $_SERVER['DOCUMENT_ROOT']."/cover/admin/admin_check.php";
  $session = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="/cover/asset/js/admin_common.js"></script>
  <link rel="stylesheet" href="/cover/asset/css/admin_style.css">
</head>
<body>
  <header>
    Welcome, <?=$session?>
    <a href="/cover/admin/logout.php">[Sign out]</a>

    <nav>
      <a href="/cover/admin/work/list.php">Portfolio</a>
      <a href="/cover/admin/contact/request.php">Contact</a>
    </nav>
  </header>