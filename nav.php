<nav>
      <a href="./">Home</a>
      <?php
      if (isset($_COOKIE['user']))
      {
        echo '<a href="code.php">ระบบยืมคืน</a>';
        echo '<a href="book.php">หนังสือ</a>';
        echo '<a href="logout.php">Logout</a>';
      }
      else{
        echo '<a href="login.php">Login</a>';
      }
      ?>
</nav>