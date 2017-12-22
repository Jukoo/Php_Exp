    <title>Sup'Event</title>
    <!-- Bootstrap core CSS -->
    <?php if (isset($_GET['id']) && !empty($_GET['id'])){ 
      ?>
       <link href="utility/resumStyle.css" rel="stylesheet">

      <?php
    }else { 
        ?>
     <link href="utility/style.css" rel="stylesheet">
     <?php

    }
    ?>
   
    <!-- Custom styles for this template -->
    <style>
      body {
        padding-top: 54px;
      }
      @media (min-width: 992px) {
        body {
          padding-top: 56px;
        }
      }

    </style>

  </head>