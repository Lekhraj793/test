<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
  $(document).ready(function(){
      $('#list').on('click', 'li', function(e) {
       $(this).remove();
    });
  });
</script>
</head>

<body style="background: black;color: white;">
  <ul id="list">
    <?php for ($i=0; $i < 100; $i++) {
    echo "<li>  hello:-$i </li>";
    } ?>
  </ul>
</body>
</html>
