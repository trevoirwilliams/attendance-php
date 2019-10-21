<?php
$variables = [
      'SENDGRID_API_KEY'=>'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',
      'DB_HOST' => 'localhost',
      'DB_USERNAME' => 'root',
      'DB_PASSWORD' => '',
      'DB_NAME' => 'demoDB',
      'DB_PORT' => '3306',
  ];
  foreach ($variables as $key => $value) {
      putenv("$key=$value");
  }

  ?>